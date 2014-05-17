<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<<<<<<< HEAD


<h1>World of Comodato</h1>

<h1>NOVO LANÇAMENTO SERVIDOR DEDICADO 100% GLOBAL, STAGES E VOCAÇÕES BALANCEADAS, VENHA CONFERERIR, COMODATO UM OT PENSANDO EM VOCÊ.</h1>
<p>
-ATUALIZAÇÕES FREQUENTES
-UPDATES
- PREMMY ACCOUNT, VARIAS VANTAGENS. 
- STAGES BALANCEADAS
-PROMOÇÕES
OQUE ESTÁ ESPERANDO, ENTREM JÁ,  VENHAM CONFERIR O MELHOR SERVIDOR GLOBAL 10.37 ATUALIZADO SEM BUGS, O SERVIDOR SEMPRE ATUALIZANDO COM O DECORRER DO UPDATE.
</p>
=======
<h1>Server Information</h1>
Here you will find all basic information about <?php echo '<b>'.$config['site_title'].'</b>'; ?>
<?php
>>>>>>> 309c17eca34470dd5f762ad3c437fe6394d734d1

// Check if server stages are enabled
$stages_path = simplexml_load_file($config['server_path'].'/data/xml/stages.xml');
$lua_path = parse_ini_file($config['server_path'].'/config.lua');

if ($stages_path->config['enabled'] != 0) {

	// Stages are beeing used
	echo "<h2>Server stages</h2>
	<table class='table table-striped table-hover'>
	<tbody><tr class='yellow'><td>Minium level</td><td>Maximun level</td><td>Multiplier</td></tr>";

	foreach ($stages_path->children()->stage as $stages) {

		if($stages['maxlevel'] === NULL) {
			echo '<tr><td><center>'.$stages['minlevel'].'</center></td><td><center>Infinite</center></td><td><center>x'.$stages['multiplier'].'</center></td></tr>';
		} else {
			echo '<tr><td><center>'.$stages['minlevel'].'</center></td><td><center>'.$stages['maxlevel'].'</center></td><td><center>x'.$stages['multiplier'].'</center></td></tr>';
		}
	}

	echo '</tbody></table>';

} else {

	// Not using stages
	echo "<h2>Server rates</h2>
	<table class='table table-striped table-hover'>
	<tbody><tr class='yellow'><td>Experience rate</td><td>Skills rate</td><td>Magic rate</td><td>Loot rate</td></tr>
	<tr><td><center>x".$lua_path['rateExp']."</center></td><td><center>x".$lua_path['rateSkill']."</center></td><td><center>x".$lua_path['rateMagic']."</center></td><td><center>x".$lua_path['rateLoot']."</center></td></tr>
	</tbody></table>";
}

// General info 

$information = array(

	'World type'             => $lua_path['worldType'],
	'Protection level'       => $lua_path['protectionLevel'],
	'Kills to red skull'     => $lua_path['protectionLevel'],
	'Kills to black skull'   => $lua_path['killsToBlackSkull'],
	'Remove ammo'            => $lua_path['removeAmmoWhenUsingDistanceWeapon'],
	'Remove runes' 		 	 => $lua_path['removeChargesFromRunes'],
	'Time to decrease frags' => $lua_path['timeToDecreaseFrags'],
	'House rent period'      => $lua_path['houseRentPeriod'],
	'AFK Kickout minutes'    => $lua_path['kickIdlePlayerAfterMinutes'],
	'Location'               => $lua_path['location'],
	'Owner name'             => $lua_path['ownerName']

);

echo "<h2>Server general information</h2><ul>";

foreach ($information as $key => $value) {
	echo "<li>".$key." - <b>".$value."</b></li>";
}

echo '</ul>';

?>
<?php include 'layout/overall/footer.php'; ?>