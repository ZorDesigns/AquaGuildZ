<?php
include(dirname(__DIR__).'/configs.php');
$ranks = array('rank 1', 'rank 2', 'rank 3', 'rank 4', 'rank 5', 'rank 6', 'rank 7', 'rank 8', 'rank 9', 'rank 10');
@$json = file_get_contents("https://$RegionName.api.battle.net/wow/guild/$RealmName/$GuildName?fields=members&locale=$LocaleName&apikey=$APIkey");
if($json == false)
{
throw new Exception("Failed To load infomation. check setup options");
}
$decode = json_decode($json, true);
//$rows = $decode['members'];
$rows=array();
foreach ($decode['members'] as $i => $e)
{
$rows[$i]['rank'] = $e['rank'];
$rows[$i]['name'] = $e['character']['name'];
$rows[$i]['class'] = $e['character']['class'];
$rows[$i]['race'] = $e['character']['race'];
$rows[$i]['level'] = $e['character']['level'];
$rows[$i]['gender'] = $e['character']['gender'];
$rows[$i]['achiev'] = $e['character']['achievementPoints'];
$rows[$i]['thumbnail'] = $e['character']['thumbnail'];
$rows[$i]['spec'] = @$e['character']['spec']['name'];
$rows[$i]['desc'] = @$e['character']['spec']['role'];
}
$s = (isset($_GET['s']) ? $_GET['s'] : '');
$u = (isset($_GET['u']) ? $_GET['u'] : '0');
if ($s != '')
{
sksort($rows,$s,$u);
}
else
{
sksort($rows,'rank',true);
}
//Character Arrays
foreach($rows as $p) {
$mrank = $p['rank'];
$mname = $p['name'];
$mclass = $p['class'];
$mrace = $p['race'];
$mlevel = $p['level'];
$mgender = $p['gender'];
$machiev = $p['achiev'];
$mthumb = $p['thumbnail'];
$mrole = $p['spec'];
$mtype = $p['desc'];
$classes = array( '1', '2', '4', '5', '6', '7', '8', '9', '10', '11' );
$replacements = array( 'Warrior', 'Paladin', 'Hunter', 'Rogue', 
'Priest', 'Death Knight', 'Shaman', 'Mage', 'Warlock', 'Monk','Druid' );
$resultclass = $replacements[$p['class'] - 1];
//Table of Guild Members
echo '
<div class="panel_fix panel-default margin-5" style="background-image: url(assets/images/roster/bg-'.$mclass.'.png);">
<div class="panel-heading">
<div class="community-title">
<div class="tit op_player wow-class-'.$mclass.'"><a href="http://eu.battle.net/wow/en/character/twisting-nether/'.$mname.'/advanced">'.$mname.'</a></div>
<small>'.$ranks[$mrank].'</small>
</div>
</div>
<ul class="recr_class fix-ava">
<li id="class"><span style="background:url(http://eu.battle.net/static-render/eu/'.$mthumb.') no-repeat; background-size: 100%; position:static;"></span><p></p></li>
<li id="change_avatar"><a href="#" class="fix-lett-ava"></a></li>
</ul>
<table class="table table-stripped"><tbody>
<tr>
<td style="width:40%;">Class</td>
<td><span class="op_player wow-class-'.$mclass.'">'.$resultclass.'</span></td>
</tr>
<tr>
<td style="width:40%;">Talent</td>
<td><span class="op_player wow-class-'.$mclass.'">'.$mrole.'</span></td>
</tr>
<tr>
<td>Type</td>
<td><small>'.$mtype.'</small></td>
</tr>
<tr>
<td data-speak="com_user_messages">Achievements</td>
<td><span>'.$machiev.'</span></td>
</tr>
<tr>
<td data-speak="com_user_likes">Rank</td>
<td><span><small>'.$ranks[$mrank].'</small></span></td>
</tr>
</tbody>
</table>
</div>
';
}
function sksort(&$array, $subkey="id", $sort_ascending=false)
{
if (count($array))
$temp_array[key($array)] = array_shift($array);
foreach($array as $key => $val){
$offset = 0;
$found = false;
foreach($temp_array as $tmp_key => $tmp_val)
{
if(!$found and strtolower($val[$subkey]) > strtolower($tmp_val[$subkey]))
{
$temp_array = array_merge( (array)array_slice($temp_array,0,$offset),
array($key => $val),
array_slice($temp_array,$offset)
);
$found = true;
}
$offset++;
}
if(!$found) $temp_array = array_merge($temp_array, array($key => $val));
}
if ($sort_ascending) $array = array_reverse($temp_array);
else $array = $temp_array;
}
?>