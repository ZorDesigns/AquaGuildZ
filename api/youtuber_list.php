<?php
include(dirname(__DIR__).'/configs.php');
@$json = file_get_contents("https://www.googleapis.com/youtube/v3/search?key=AIzaSyDzKj7t2ehdmukAizhE-Tt0QtO3e2y1J5U&channelId=UCcegG7KKMvpd7UVFHdJ4tTQ&part=snippet,id&order=date&maxResults=16");
if($json == false)
{
throw new Exception("Failed To load infomation. check setup options");
}
$decode = json_decode($json, true);
$rows=array();
foreach ($decode['items'] as $i => $e)
{
$rows[$i]['videoId'] = @$e['id']['videoId'];
$rows[$i]['publishedAt'] = $e['snippet']['publishedAt'];
$rows[$i]['title'] = $e['snippet']['title'];
$rows[$i]['description'] = $e['snippet']['description'];
$rows[$i]['url'] = $e['snippet']['thumbnails']['medium']['url'];
$rows[$i]['width'] = $e['snippet']['thumbnails']['medium']['width'];
$rows[$i]['height'] = $e['snippet']['thumbnails']['medium']['height'];
}
$s = (isset($_GET['s']) ? $_GET['s'] : '');
$u = (isset($_GET['u']) ? $_GET['u'] : '0');
if ($s != '')
{
sksort($rows,$s,$u);
}
else
{
sksort($rows,true);
}
//Video Arrays
foreach($rows as $p) {
$ytvideourl = $p['videoId'];
$ytpublished = $p['publishedAt'];
$ytTitle = $p['title'];
$mname = $p['description'];
$ytvidbg = $p['url'];
$mrace = $p['width'];
$mlevel = $p['height'];
//Results
echo '
<li>
<div class="media-video-container" align="left">
<div class="media-video-thumb container_frame">
<div class="cframe_inner">
<a href="https://www.youtube.com/watch?v='.$ytvideourl.'">
<!--Video Image Preview-->
<div class="image-thumb-preview" style="background-image:url('.$ytvidbg.');background-size: 200px 113px;background-repeat: no-repeat;"></div>
<div class="play-button-small"></div>
</a>
</div>
</div>
</div>
<div class="screanshot-title-info">'.substr(strip_tags($ytTitle),0,50).'...<p>On YouTube</p></div>
</li>
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
$offset++;
}
if(!$found) $temp_array = array_merge($temp_array, array($key => $val));
}
if ($sort_ascending) $array = array_reverse($temp_array);
else $array = $temp_array;
}
?>