<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h1>Server Information</h1>
<br>
<h1>WAR SERVER WITH INFINE RUNES/AMMUNITION/POTES</h1>

<?php

$path = 'C:\Users\Felipe\Documents\GitHub\ComodatoGLOBAL';
echo '<table cellpadding="0"><tr class="yellow"><td><center>From level</center></td><td><center>To level</center></td><td><center>Rate</center></td></tr>';
if (is_dir($path)) {

   
    $xml1 = simplexml_load_file($path."\data\xml\stages.xml");
    foreach ($xml1 as $stage1) {
		
			if ($stage1['maxlevel'] == '' && $stage1['minlevel'] > '1') {
			$stage1['maxlevel'] = 'Infinite';   
			}
			if ($stage1['multiplier'] > '0') {
			echo '<tr><td><center>'.$stage1['minlevel'].'</center></td><td><center>'.$stage1['maxlevel'].'</center></td><td><center>'.$stage1['multiplier'].'</center></td></tr>';   
		}
	}	
    $word = 'a'; 
    $loadconfig = file($path.'\config.lua');
    $key = 'rateMagic';
    $key2 = 'rateLoot';
    $key3 = 'rateSkill';
	$key4 = 'removeChargesFromRunes';
	$key5 = 'removeAmmoWhenUsingDistanceWeapon';
	$key6 = 'experienceByKillingPlayers';
	
    $found = false;
    foreach ($loadconfig as $lineNumber => $e) {
    if (strpos($e,$key) !== false) {
      $found = true;
      break;
    }
}

    foreach ($loadconfig as $lineNumberr => $ee) {
    if (strpos($ee,$key2) !== false) {
      $found = true;
      break;
    }
}

    foreach ($loadconfig as $lineNumberrr => $eee) {
    if (strpos($eee,$key3) !== false) {
      $found = true;
      break;
    }
}

    foreach ($loadconfig as $lineNumberrrr => $eeee) {
    if (strpos($eeee,$key4) !== false) {
      $found = true;
      break;
    }
}	
    foreach ($loadconfig as $lineNumberrrrr => $eeeee) {
    if (strpos($eeeee,$key5) !== false) {
      $found = true;
      break;
    }
}
	foreach ($loadconfig as $lineNumberrrrrr => $eeeeee) {
    if (strpos($eeeeee,$key6) !== false) {
      $found = true;
      break;
    }
}
if ($found) {
  echo '<table cellpadding="0"><tr class="yellow"><td><center>Magic rate</center></td><td><center>Skills rate</center></td><td><center>Loot rate</center></td></tr>';
  echo '<tr><td><center>'.$loadconfig[$lineNumber].'</center></td><td><center>'.$loadconfig[$lineNumberrr].'</center></td><td><center>'.$loadconfig[$lineNumberr].'</center></td></tr>';
  echo '<table cellpadding="0"><tr class="yellow"><td><center>Infinite Runes</center></td><td><center>Infinite Ammunition</center></td><td><center>Experience Kill Players</center></td></tr>';
  echo '<tr><td><center>'.$loadconfig[$lineNumberrrr].'</center></td><td><center>'.$loadconfig[$lineNumberrrrr].'</center></td><td><center>'.$loadconfig[$lineNumberrrrrr].'</center></td></tr>';

}
   
   
    $talkactions = simplexml_load_file($path.'/data/talkactions/talkactions.xml');
    echo '<table cellpadding="0"><tr class="yellow"><td><center>Player commands</center></td></center></tr>';
    foreach ($talkactions as $commands) {
        if ($commands['access'] == '0') {
    echo '<center><tr><td><center>'.$commands['words'].'</center></td></tr></center>';
        }
    }
    echo '</table></tr>';
   
} else {
   
echo '<br><b>Invalid path!</b>';
   
}
?>
<?php include 'layout/overall/footer.php'; ?>