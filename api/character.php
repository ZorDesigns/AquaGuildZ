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
$classes = array( '1', '2', '4', '5', '6', '7', '8', '9', '10', '11' );
$replacements = array( 'Warrior', 'Paladin', 'Hunter', 'Rogue', 
'Priest', 'Death Knight', 'Shaman', 'Mage', 'Warlock', 'Monk','Druid' );
$resultclass = $replacements[$p['class'] - 1];
//Table of Guild Members
echo '
<div class="roster-bg-dark">
<div class="groster-row">
<img src="http://eu.battle.net/static-render/eu/'.$mthumb.'" width="90" height="90" style="float:left;">
<div class="grinfo">
<p><a href="http://eu.battle.net/wow/en/character/twisting-nether/'.$mname.'/advanced">'.$mname.'</small></a></p>
<p class="wow-class-'.$mclass.'">'.$resultclass.'</p>
<p class="wow-class-'.$mclass.'">'.$mrole.'</p>
<p class="wow-grank">'.$ranks[$mrank].'</p>
<p class="wow-gachiev"><img src="assets/images/achievements.gif"> '.$machiev.'</p>
</div>
<div class="clear"></div>
</div>
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