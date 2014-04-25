<?PHP 
echo '<table border="0" cellspacing="0"><tr class="yellow"><td><center>Server Information</center></td></tr> 
<tr><td>'; 
$fetchshitt = mysql_select_single("SELECT `id`, `name` FROM `players` ORDER BY `id` DESC LIMIT 1");  

$fetchshit = mysql_select_single("SELECT COUNT(*) as `shit` FROM `players` "); 

$fetchshit2 = mysql_select_single("SELECT `name`, `level` FROM `players` ORDER BY `level` DESC LIMIT 1"); 
$fetchshit3 = mysql_select_single("SELECT COUNT(*) as `shiter` FROM `accounts` "); 
$fetchshit4 = mysql_select_single("SELECT COUNT(*) as `yea` FROM `guilds` "); 

echo '<center>Welcome to our newest player: <a href="characterprofile.php?name='.$fetchshitt['name'].'">'.$fetchshitt['name'].'</a></center></td></tr>'; 
echo '<tr><td><center>The best player is: <a href="characterprofile.php?name='.$fetchshit2['name'].'">'.$fetchshit2['name'].'</a> level: '.$fetchshit2['level'].' congratulations!</center></td></tr>'; 
echo '<tr><td><center>We have <b>'.$fetchshit3['shiter'].'</b> accounts in our database, <b>'.$fetchshit['shit'].'</b> players, and <b>'.$fetchshit4['yea'].' </b>guilds </center></td></tr>'; 
echo '</table>'; 
?>
