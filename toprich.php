<?php require_once 'engine/init.php'; include 'layout/overall/header.php';
$cache = new Cache('engine/cache/lastkillers');
if ($cache->hasExpired()) {
	$latests = mysql_select_multi("SELECT * FROM `player_items` WHERE `itemtype` = 2160");
	if ($latests !== false) {
		$cache->setContent($latests);
		$cache->save();
	}
} else {
	$latests = $cache->load();
}
if ($latests) {
?>
<h1>Latest kills</h1>
<table id="killersTable" class="table table-striped">
	<tr class="yellow">
		<th>Killer</th>
		<th>Victim</th>
	</tr>
	<?php foreach ($latests as $last) { 
		echo '<tr>';
		echo "<td width='35%'><a href='characterprofile.php?name=". $last['player_id'] ."'>". $last['player_id'] ."</a></td>";
		echo "<td width='35%'><a ". $last['itemtype'] ."</a></td>";
		echo '</tr>';
	} ?>
</table>
<?php
} else echo 'No player kills exist.';

SELECT *  FROM `player_items` WHERE `player_id` = 1 AND `itemtype` = 2160
	<?php
	/////////
}
include 'layout/overall/footer.php'; ?>