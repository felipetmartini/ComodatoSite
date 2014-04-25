<?php require_once 'engine/init.php'; include 'layout/overall/header.php';
    // Cache the results
    $cache = new Cache('engine/cache/topQuestMakers');
    if ($cache->hasExpired()) {
        $quests = mysql_select_multi("SELECT `p`.`name` AS `name`, `p`.`level` AS `level`, `p`.`group_id` AS `group_id`, COUNT(`ps`.`value`) AS `count` FROM `player_storage` ps LEFT JOIN `players` p ON `p`.`id` = `ps`.`player_id` WHERE `key` IN (954) AND `level` >= 8 AND `group_id` < 4 GROUP BY `name` ORDER BY `count` DESC, `level` DESC LIMIT 50;");
       
        $cache->setContent($quests);
        $cache->save();
    } else {
        $quests = $cache->load();
    }
 
if (!empty($quests) || $quests !== false) {
?>
<style>
.progress {
        position: relative;
        border: 1px solid black;
        height: 9px;
        width: 500px;
        border-radius: 5px
}
.progress .text {
        position: absolute;
        float: left;
        left: 235px;
        top: -4px;
        color: white;
        font-weight: bold;
}
.progress .done {
        float: left;
        height: 9px;
        background: #00BF00;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px
}
.progress .remaining {
        float: left;
        height: 9px;
        background: grey;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px
}
</style>
<h1>Top Quest Makers</h1>
<table id="questMakersTable" class="table table-striped">
    <tr class="yellow">
                <th>#</th>
        <th>Name:</th>
                <th>Level:</th>
        <th>Progress:</th>
    </tr>
       
    <?php $s = 5; $totalQuests = 1; $i = 0; foreach ($quests as $quest) { $i++; $percent = round((int)$quest['count'] / $totalQuests * 100, 2); ?>
    <tr>
                <td><?php echo $i; ?></td>
        <td><a href="characterprofile.php?name=<?php echo $quest['name']; ?>"><?php echo $quest['name']; ?></a></td>
                <td><?php echo $quest['level']; ?></td>
                <td style="text-align: center;"><div class="progress"><span class="text"><?php echo round($percent); ?>%</span><div style="width: <?php echo ($percent * $s); ?>px;" class="done"></div><div style="width: <?php echo ((100 - $percent) * $s); ?>px;" class="remaining"></div></div></td>
    </tr>
    <?php } ?>
</table>
 
<?php
} else echo '<h1>No quests yet.</h1>';
 include 'layout/overall/footer.php'; ?>