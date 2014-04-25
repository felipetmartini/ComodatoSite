<?php
#    TFS 0.2, 0.3/4, 1.0 VIP Friends for ZnoteAAC
#    By cbrm @ otland.net
#    Improved by Znote. (This requires Znote AAC 1.4+, and is compatible with Znote AAC 1.5)

require_once 'engine/init.php';
protect_page();
include 'layout/overall/header.php';

?>
<h1>VIP Friends</h1>
<?php

if ($config['TFSVersion'] !== 'TFS_10') $viplist = mysql_select_multi('SELECT `p`.`name` AS `name`, `p`.`id` AS `id`, `p`.`online` AS `online`, `v`.`player_id` FROM `account_viplist` AS `v` LEFT JOIN `players` AS `p` ON `v`.`player_id` = `p`.`id` WHERE `v`.`account_id` = '.$user_data['id'].' ORDER BY `p`.`name`, `p`.`online` ASC LIMIT 0,100');
else {
    // Lets attempt this at TFS 1.0
    $viplist = mysql_select_multi('SELECT `p`.`name` AS `name`, `p`.`id` AS `id`, `v`.`player_id` FROM `account_viplist` AS `v` LEFT JOIN `players` AS `p` ON `v`.`player_id` = `p`.`id` WHERE `v`.`account_id` = '.$user_data['id'].' ORDER BY `p`.`name` ASC LIMIT 0,100');
    if (!empty($viplist) || $viplist) {
        // Lets find out who are online with just one additional query (not quite sure how to do this with joins)
     
        // Fill up an array that only contains player ids
        $pids = array();
        foreach ($viplist as $p) $pids[] = $p['id'];
     
        // Do a query that returns the online players from that array.
        $onlineData = mysql_select_multi("SELECT `player_id` FROM `players_online` WHERE `player_id` IN (". implode(',', array_map('intval', $pids)) .")");

        // Based on onlineData, fill up an array with only ids of players who are logged in.
        $oids = array();
        foreach ($onlineData as $o) $oids[] = $o['player_id'];
     
        // Now lets modify $viplist with online status, we need to use for loop
        // instead of foreach loop to manipulate original array.
        for ($i = 0; $i < count($viplist); $i++) {
            if (in_array($viplist[$i]['id'], $oids)) $viplist[$i]['online'] = 1;
            else $viplist[$i]['online'] = 0;
        }
    }
}

if (empty($viplist) || !$viplist) echo 'You VIP list is empty.';
else {
    ?>
    <table>
        <tr class="yellow">
            <td width="60%">
                <strong>Name</strong>
            </td>
            <td width="40%">
                <strong>Status</strong>
            </td>
        </tr>
        <?php
        foreach ($viplist as $friend) {
            ?>
            <tr>
                <td>
                    <a href="characterprofile.php?name=<?php echo $friend['name']; ?>">
                        <?php echo $friend['name']; ?>
                    </a>
                </td>
                <td>
                    <?php
                    if ($friend['online'] == 0) echo '<span style="color: red;">Offline</span>';
                    else echo '<span style="color: green;">Online</span>';
                    ?>
                </td>
            </tr>
            <?php
            }
            ?>
    </table>
    <?php
}

include 'layout/overall/footer.php'; ?>