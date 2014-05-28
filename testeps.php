<?php
/*

 Retorno PagSeguro 2.0 - PHP e MySQL
 por Diogo Dourado - www.dourado.net
 Última Atualização: 09/06/2011
 
 Se você ainda não é cadastrado no PagSeguro, utilize o link abaixo para se cadastrar:
 https://pagseguro.uol.com.br/?ind=528005

*/

header('Content-Type: text/html; charset=ISO-8859-1');

/* Edite este arquivo e insira suas configurações */

	require 'config.php';
	require 'engine/database/connect.php';

	// Fetch paypal configurations
	$pagseguro = $config['pagseguro'];
	$psprices = $config['pagseguro_prices'];

/* Não é necessário alterar nada desta linha para baixo */

	define('TOKEN', '$config['pagseguro']['token']');
	
	class PagSeguroNpi {
	
	private $timeout = 30; // Timeout em segundos
	
	public function notificationPost() {
		$postdata = 'Comando=validar&Token='.TOKEN;
		foreach ($_POST as $key => $value) {
			$valued    = $this->clearStr($value);
			$postdata .= "&$key=$valued";
		}
		return $this->verify($postdata);
	}
	
	private function clearStr($str) {
		if (!get_magic_quotes_gpc()) {
			$str = addslashes($str);
		}
		return $str;
	}
	
	private function verify($data) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "https://sandbox.pagseguro.uol.com.br/pagseguro-ws/checkout/NPI.jhtml");
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_TIMEOUT, $this->timeout);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$result = trim(curl_exec($curl));
		curl_close($curl);
		return $result;
	}

}


function ConverterData($data) {
	$data = explode(' ', $data);
	$hora = $data[1]; $data = $data[0];
	$data = explode('/', $data);
	$data = $data[2].'-'.$data[1].'-'.$data[0].' ';		
	return $data.$hora;
}


if (count($_POST) > 0) {
	
	$npi = new PagSeguroNpi();
	$result = $npi->notificationPost();
	
	$transacaoID = isset($_POST['TransacaoID']) ? $_POST['TransacaoID'] : '';
	
	if ($result == "VERIFICADO") {
	
		// Recebendo Dados
		$VendedorEmail  = $_POST['VendedorEmail'];
		$TransacaoID = $_POST['TransacaoID'];
		$Referencia = $_POST['Referencia'];
		$Extras = $_POST['Extras'];
		$TipoFrete = $_POST['TipoFrete'];
		$ValorFrete = $_POST['ValorFrete'];
		$DataTransacao = ConverterData($_POST['DataTransacao']);
		$Anotacao = $_POST['Anotacao'];
		$TipoPagamento = $_POST['TipoPagamento'];
		$StatusTransacao = $_POST['StatusTransacao'];

		$CliNome = $_POST['CliNome'];
		$CliEmail = $_POST['CliEmail'];
		$CliEndereco = $_POST['CliEndereco'];
		$CliNumero = $_POST['CliNumero'];
		$CliComplemento = $_POST['CliComplemento'];
		$CliBairro = $_POST['CliBairro'];
		$CliCidade = $_POST['CliCidade'];
		$CliEstado = $_POST['CliEstado'];
		$CliCEP = $_POST['CliCEP'];
		$CliTelefone = $_POST['CliTelefone'];

		$NumItens = $_POST['NumItens'];
		
		// Gravando Dados
		mysql_insert("INSERT into `znote_PagSeguroTransacoes` SET
		`VendedorEmail`='$VendedorEmail',	
		`TransacaoID`='$TransacaoID',	
		`Referencia`='$Referencia',	
		`Extras`='$Extras',	
		`TipoFrete`='$TipoFrete',	
		`ValorFrete`='$ValorFrete',	
		`DataTransacao`='$DataTransacao',	
		`Anotacao`='$Anotacao',	
		`TipoPagamento`='$TipoPagamento',	
		`StatusTransacao`='$StatusTransacao',	
		`CliNome`='$CliNome',	
		`CliEmail`='$CliEmail',	
		`CliEndereco`='$CliEndereco',	
		`CliNumero`='$CliNumero',	
		`CliComplemento`='$CliComplemento',	
		`CliBairro`='$CliBairro',	
		`CliCidade`='$CliCidade',	
		`CliEstado`='$CliEstado',	
		`CliCEP`='$CliCEP',	
		`CliTelefone`='$CliTelefone',	
		`NumItens`='$NumItens',	
		`Data`=now();");

		// Recebendo e gravando produtos
		$Processo = mysql_select_single("SELECT `VendedorEmail` FROM `znote_PagSeguroProdutos` WHERE `VendedorEmail`='$VendedorEmail' AND `TransacaoID`='$TransacaoID';");

			for($i=1;$i<=$NumItens;$i++) {
				
				$ProdID = $_POST["ProdID_{$i}"];
				$ProdDescricao = $_POST["ProdDescricao_{$i}"];
				$ProdValor = $_POST["ProdValor_{$i}"];
				$ProdQuantidade = $_POST["ProdQuantidade_{$i}"];
				$ProdFrete = $_POST["ProdFrete_{$i}"];
		
				mysql_insert("INSERT into `znote_PagSeguroProdutos` SET
				`VendedorEmail`='$VendedorEmail',	
				`TransacaoID`='$TransacaoID',	
				`Ordem`='$i',	
				`ProdID`='$ProdID',	
				`ProdDescricao`='$ProdDescricao',	
				`ProdValor`='$ProdValor',	
				`ProdQuantidade`='$ProdQuantidade',	
				`ProdFrete`='$ProdFrete';");			
			}
		
		

					if( $_POST['StatusTransacao'] == 'Aprovado') {

						$pspaidMoney = 0;
						$pspaidPoints = 0;
					
						foreach ($psprices as $pspriceValue => $pspointsValue) {
							if ($pspriceValue == $ProdValor) {
								$pspaidMoney = $pspriceValue;
								$pspaidPoints = $pspointsValue;
							}
						}

						// Process payment
						$data = mysql_select_single("SELECT `points` AS `old_points` FROM `znote_accounts` WHERE `account_id`='$Referencia';");

						// Give points to user
						$new_points = $data['old_points'] + $pspaidPoints;
						mysql_update("UPDATE `znote_accounts` SET `points`='$new_points' WHERE `account_id`='$Referencia'");
					
					}
	} else if ($result == "FALSO") {
		//O post não foi validado pelo PagSeguro.
		Header("Location: ".$config['pagseguro']['false'].""); exit();
	} else {
		//Erro na integração com o PagSeguro.
		Header("Location: ".$config['pagseguro']['failed'].""); exit();
	}
} else {
	Header("Location: ".$config['pagseguro']['success'].""); exit();
}
?>