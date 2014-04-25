<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h1>Server Information</h1>


<?PHP 
echo '<table border="0" cellspacing="0"><tr class="yellow"><td><center>Server Information</center></td></tr> 
<tr><td>'; 
$getshit11 = mysql_query("SELECT `id`, `name` FROM `players` ORDER BY `id` DESC LIMIT 1");  
$fetchshitt = mysql_fetch_assoc($getshit11);  
$getshit1 = mysql_query("SELECT COUNT(*) as `shit` FROM `players` "); 
$fetchshit = mysql_fetch_assoc($getshit1); 
$getshit2 = mysql_query("SELECT `name`, `level` FROM `players` ORDER BY `level` DESC LIMIT 1"); 
$fetchshit2 = mysql_fetch_assoc($getshit2); 
$getshit3 = mysql_query("SELECT COUNT(*) as `shiter` FROM `accounts` "); 
$fetchshit3 = mysql_fetch_assoc($getshit3); 
$getshit4 = mysql_query("SELECT COUNT(*) as `yea` FROM `guilds` "); 
$fetchshit4 = mysql_fetch_assoc($getshit4); 
echo '<center>Welcome to our newest player: <a href="characterprofile.php?name='.$fetchshitt['name'].'">'.$fetchshitt['name'].'</a></center></td></tr>'; 
echo '<tr><td><center>The best player is: <a href="characterprofile.php?name='.$fetchshit2['name'].'">'.$fetchshit2['name'].'</a> level: '.$fetchshit2['level'].' congratulations!</center></td></tr>'; 
echo '<tr><td><center>We have <b>'.$fetchshit3['shiter'].'</b> accounts in our database, <b>'.$fetchshit['shit'].'</b> players, and <b>'.$fetchshit4['yea'].' </b>guilds </center></td></tr>'; 
echo '</table>'; 
?>
