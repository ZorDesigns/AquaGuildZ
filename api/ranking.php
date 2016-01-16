<?php
include(dirname(__DIR__).'/configs.php');
$ranks = '';
$json = file_get_contents("http://guildox.com/api/guild/$RegionName/$RealmName/$GuildName");
if($json == false)
{
throw new Exception("Failed To load infomation. Check setup options");
}
$decode = json_decode($json, true);
//$rows = $decode['members'];
$rows=array();
foreach ($decode['rank'] as $i => $e)
{
$rows[$i]['name'] = $e['name'];
$rows[$i]['rank'] = $e['rank']['realm'];
}
//Rank Arrays
foreach($rows as $p) {
$mrank = $p['rank'];
$mname = $p['name'];
//Table of Guild Members
echo '
<li>
<p><img src="assets/images/'.$mname.'.png" alt="Rank: '.$mrank.'" title="Rank: '.$mrank.'"></p>
<a href="http://guildox.com/guild/eu/twisting-nether/Hellenic%20Horde">Realm '.$mname.' Rank: </a>
<span>'.$mrank.'</span>
</li>
';
}
function skrank(&$array, $subkey="id", $sort_ascending=false)
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