<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h1>Server Information</h1>
<?php

$path = '/root/evodera';
echo '<table cellpadding="0"><tr class="yellow"><td><center>From level</center></td><td><center>To level</center></td><td><center>Rate</center></td></tr>';
if (is_dir($path)) {

   
    $xml1 = simplexml_load_file($path."\data\xml\stages.xml");
    foreach ($xml1->world->children() as $stage1) {
        if ($stage1['maxlevel'] == '') {
        $stage1['maxlevel'] = 'Infinite';   
        }
        echo '<tr><td><center>'.$stage1['minlevel'].'</center></td><td><center>'.$stage1['maxlevel'].'</center></td><td><center>'.$stage1['multiplier'].'</center></td></tr>';   
        }
    $word = 'a'; 
    $loadconfig = file($path.'\config.lua');
    $key = 'rateMagic';
    $key2 = 'rateLoot';
    $key3 = 'rateSkill';
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

if ($found) {
  echo '<table cellpadding="0"><tr class="yellow"><td><center>Magic rate</center></td><td><center>Skills rate</center></td><td><center>Loot rate</center></td></tr>';
  echo '<tr><td><center>'.$loadconfig[$lineNumber].'</center></td><td><center>'.$loadconfig[$lineNumberrr].'</center></td><td><center>'.$loadconfig[$lineNumberr].'</center></td></tr>';
}
   
    $getallplayers = mysql_query("SELECT COUNT(*) as MAX FROM players");
    $parseallplayers = mysql_fetch_assoc($getallplayers);
    $getallaccounts = mysql_query("SELECT COUNT(*) as MEX FROM accounts");
    $parseallaccounts = mysql_fetch_assoc($getallaccounts);
    $getallguilds = mysql_query("SELECT COUNT(*) as MOX FROM guilds");
    $parseallguilds = mysql_fetch_assoc($getallguilds);
   
    echo '</table></tr>';
    echo '<table cellpadding="0"><tr class="yellow"><td><center>Total accounts</center></td><td><center>Total players</center></td><td><center>Total guilds</center></td></tr>';
    echo '<tr><td><center>'.$parseallplayers['MAX'].'</center></td><td><center>'.$parseallaccounts['MEX'].'</center></td><td><center>'.$parseallguilds['MOX'].'</center></td></tr>';
    echo '</table></tr>';
   
    $talkactions = simplexml_load_file($path.'/data/talkactions/talkactions.xml');
    echo '<table cellpadding="0"><tr class="yellow"><td><center>Player commands</center></td></center></tr>';
    foreach ($talkactions as $commands) {
        if (empty($commands['access'])) {
    echo '<center><tr><td><center>'.$commands['words'].'</center></td></tr></center>';
        }
    }
    echo '</table></tr>';
   
} else {
   
echo '<br><b>Invalid path!</b>';
   
}
?>