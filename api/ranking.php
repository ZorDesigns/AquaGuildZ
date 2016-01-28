<?php
include(dirname(__DIR__).'/configs.php');
$ranks = '';
$json = file_get_contents("http://www.wowprogress.com/guild/eu/twisting-nether/hellenic%20horde/json_rank");
if ($json == false) {
throw new Exception("Failed To load infomation. Check setup options");
}
$result = json_decode($json, true);
if (isset($result['realm_rank'])) {
if (is_array($result['realm_rank'])) {
foreach ($result["realm_rank"] as $value) {
echo'<div class="cont_container">
<ul class="top_voters_list">
<li>
<p><img src="assets/images/Raid.png" alt="Rank: '.$value.'" title="Rank: '.$value.'"></p>
<a href="http://www.wowprogress.com/guild/eu/twisting-nether/Hellenic+Horde">Realm Rank: </a>
<span>'.$value.'</span>
</li>
</ul>
</div>';
}
}   
else {
echo'<div class="cont_container">
<ul class="top_voters_list">
<li>
<p><img src="assets/images/Raid.png" alt="Rank: '.$result['realm_rank'].'" title="Rank: '.$result['realm_rank'].'"></p>
<a href="http://www.wowprogress.com/guild/eu/twisting-nether/Hellenic+Horde">Realm Rank: </a>
<span>'.$result['realm_rank'].'</span>
</li>
</ul>
</div>';
} 
}
else {
echo 'Unknown error';
}
?>