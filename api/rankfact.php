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
echo'
<div class="block online_players">
<div class="half_top logo_container">
<div class="online_logo">
<span class="picto_Joueurs"></span>
</div>
</div>
<div class="middle_content">
<h1>'.$value.'</h1>
<h2>Realm Rank</h2>
</div>
</div>';
}
}   
else {
echo'
<div class="block online_players">
<div class="half_top logo_container">
<div class="online_logo">
<span class="picto_Joueurs"></span>
</div>
</div>
<div class="middle_content">
<h1>'.$result['realm_rank'].'</h1>
<h2>Realm Rank</h2>
</div>
</div>
';
} 
}
else {
echo 'Unknown error';
}
?>