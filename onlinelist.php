<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>
 
<h1>Who is online?</h1>
<?php
$array = online_list();
if ($array) {
        ?>
       
        <table id="onlinelistTable">
                <tr class="yellow">
                        <td>Outfit:</td>
                        <td>Name:</td>
                        <td>Level:</td>
                        <td>Vocation:</td>
                </tr>
                        <?php
                        foreach ($array as $value) {
                        echo '<tr>';
                        echo '<td><div style="position: relative; width: 32px; height: 32px;"><div style="background-image: url(outfitter.php?id='.$value[4].'&addons='.$value[5].'&head='.$value[6].'&body='.$value[7].'&legs='.$value[8].'&feet='.$value[9].'); position: absolute; width: 64px; height: 80px; background-position: bottom right; background-repeat: no-repeat; right: 0px; bottom: 0px;"></div></div></td>';
                        echo '<td><a href="characterprofile.php?name='. $value[0] .'">'. $value[0] .'</a></td>';
                        echo '<td>'. $value[1] .'</td>';
                        echo '<td>'. vocation_id_to_name($value[2]) .'</td>';
                        echo '</tr>';
                        }
                        ?>
        </table>
 
        <?php
} else {
        echo 'Nobody is online.';
}
?>
<?php include 'layout/overall/footer.php'; ?>