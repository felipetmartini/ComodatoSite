<?php 
require_once 'engine/init.php'; include 'layout/overall/header.php'; echo '<h1>Spells</h1>';
if(file_exists('spell.php')) { require_once 'spell.php'; ?>
<table>
    <tr class="yellow">
        <td><b>Name</b></td>
        <?php if($show_spells_groups) echo '<td><b>Group</b></td>';  ?>
        <td><b>Type</b></td>
        <td><b>Exp Lvl</b></td>
        <td><b>Mana</b></td>
        <td><b>Premium</b></td>  
        </span>
    </tr>

<?php 
    @$sort = $_REQUEST['sort'];
    if(!isset($sort)) $sort = 'name';
    
    @$vocation = $_REQUEST['vocation'];
    if(!isset($vocation)) $vocation = 'vall';
    
    if($show_spells_groups)
    {
        @$group = $_REQUEST['_group'];
        if(!isset($group)) $group = 'gall';
    }
    
    @$type = $_REQUEST['_type'];
    if(!isset($type)) $type = 'tall';
    
    @$premium = $_REQUEST['_premium'];
    if(!isset($premium)) $premium = 'pall';
    
    $order = array();
    foreach($spells as $key => $row)
    {
        $order[$key] = $row[$sort];
    }
    array_multisort($order, SORT_ASC, $spells);
    
    foreach($spells as $spell) { 
        if($vocation != 'vall')
        {
            if(!in_array($vocation, $spell['vocation'])) continue;
        }
        if($show_spells_groups && $group != 'gall')
        {
            if($spell['group'] != $group) continue;
        }
        if($type != 'tall')
        {
            if($spell['type'] != $type) continue;
        }
        if($premium != 'pall')
        {
            if($spell['premium'] != $premium) continue;
        }
    ?>
    <tr>
        <td><?php echo '<b>'.$spell['name'].'</b> ('.$spell['words'].')'; ?></td>
        <?php if($show_spells_groups) echo '<td>'.$spell['group'].'</td>'; ?>
        <td><?php echo $spell['type']; ?></td>
        <td><?php echo $spell['level']; ?></td>
        <td><?php echo $spell['mana']; ?></td>
        <td><?php echo $spell['premium']; ?></td>
    </tr>
<?php } echo '</table>'; ?> 

<form action='spells.php' method='post'>
    <table>
        <tr class="yellow">
            <td colspan=4><b>Spell Search</b></td></tr>
            <tr class="yellow">
                <?php if($show_spells_groups) {
                echo'<td width=25%><b>vocation</b></td>
                    <td width=25%><b>group</b></td>
                    <td width=25%><b>type</b></td>
                    <td width=25%><b>premium</b></td>';}
                else {
                echo'<td width=40%><b>vocation</b></td>
                    <td width=30%><b>type</b></td>
                    <td width=30%><b>premium</b></td>';}?>
            </tr>
            <tr>
                <td valign='top'>
                    <input type='radio' name='vocation' value='vall' checked> all<br>
                    <?php 
                    foreach(config('vocations') as $id => $vocation)
                    {
                        if($id > 0)
                        {
                            echo "<input type='radio' name='vocation' value='".$vocation."'> ".$vocation."<br>";
                        }
                    }
                    ?>
                </td>
                <?php 
                if($show_spells_groups) echo"
                    <td valign='top'>
                        <input type='radio' name='_group' value='gall' checked> all<br>
                        <input type='radio' name='_group' value='Attack'> attack<br>
                        <input type='radio' name='_group' value='Healing'> healing<br>
                        <input type='radio' name='_group' value='Support'> support</td>"; ?>
                <td valign='top'>
                    <input type='radio' name='_type' value='tall' checked> all<br>
                    <input type='radio' name='_type' value='Instant'> instant<br>
                    <input type='radio' name='_type' value='Rune'> rune
                </td>
                <td valign='top'>
                    <input type='radio' name='_premium' value='pall' checked> all<br>
                    <input type='radio' name='_premium' value='no'> no<br>
                    <input type='radio' name='_premium' value='yes'> yes
                </td>
            </tr>
            <tr>
                <td>sort by:
                    <select name='sort'>
                        <option value='name' selected>name
                        <option value='words'>words
                        <?php if($show_spells_groups) echo "<option value='group' >group"; ?>
                        <option value='type' >type
                        <option value='level' >exp lvl
                        <option value='mana' >mana
                        <option value='premium' >premium
                    </select>
                </td>
                <td colspan='3'>
                    <input type='submit' name='submit'>
                </td>
            </tr>
    </table>
</form>
<?php } else { echo 'This page has not been configured yet.'; };
include 'layout/overall/footer.php'; ?>