<?php require_once 'engine/init.php'; include 'layout/overall/header.php';
 
    // Cache the results
    $cache = new Cache('engine/cache/topAddonMakers');
    if ($cache->hasExpired()) {
        $addons = mysql_select_multi("SELECT `p`.`name` AS `name`, `p`.`level` AS `level`, `p`.`group_id` AS `group_id`, SUM(`ps`.`value` & 255) AS `sum` FROM `player_storage` ps LEFT JOIN `players` p ON `ps`.`player_id` = `p`.`id` WHERE `ps`.`key` BETWEEN 10031 AND 10048 AND level >= 8 AND group_id < 4 GROUP BY `name` ORDER BY `sum` DESC, `level` DESC LIMIT 50;");
       
        $cache->setContent($addons);
        $cache->save();
    } else {
        $addons = $cache->load();
    }
 
if (!empty($addons) || $addons !== false) {
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
        left: 240px;
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
<h1>Top Addon Makers</h1>
<table id="addonMakersTable" class="table table-striped">
    <tr class="yellow">
                <th>#</th>
        <th>Name:</th>
                <th>Level:</th>
        <th>Progress:</th>
    </tr>
       
    <?php
        $s = 5; $totalAddons = 24 * 3; $i = 0; foreach ($addons as $addon) { $i++; $percent = round((int)$addon['sum'] / $totalAddons * 100, 2); ?>
    <tr>
                <td><?php echo $i; ?></td>
        <td><a href="characterprofile.php?name=<?php echo $addon['name']; ?>"><?php echo $addon['name']; ?></a></td>
                <td><?php echo $addon['level']; ?></td>
                <td style="text-align: center;"><div class="progress"><span class="text"><?php echo round($percent); ?>%</span><div style="width: <?php echo ($percent * $s); ?>px;" class="done"></div><div style="width: <?php echo ((100 - $percent) * $s); ?>px;" class="remaining"></div></div></td>
    </tr>
    <?php } ?>
</table>
 
<?php
} else echo '<h1>No addons yet.</h1>';
 include 'layout/overall/footer.php'; ?>