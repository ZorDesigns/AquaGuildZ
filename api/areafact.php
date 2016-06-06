<?php
include(dirname(__DIR__).'/configs.php');
$ranks = '';
$json = file_get_contents("http://www.wowprogress.com/guild/eu/twisting-nether/hellenic%20horde/json_rank");
if ($json == false) {
throw new Exception("Failed To load infomation. Check setup options");
}
$result = json_decode($json, true);
if (isset($result['area_rank'])) {
if (is_array($result['area_rank'])) {
foreach ($result["area_rank"] as $value) {
echo'
<div class="block online_players">
<div class="half_top logo_container">
<div class="area_logo">
<span class="picto_Joueurs"></span>
</div>
</div>
<div class="middle_content">
<h1 class="fix_area_h1">'.$value.'</h1>
<h2>Europe Rank</h2>
</div>
</div>';
}
}   
else {
echo'
<div class="block online_players">
<div class="half_top logo_container">
<div class="area_logo">
<span class="picto_Joueurs"></span>
</div>
</div>
<div class="middle_content">
<h1 class="fix_area_h1">'.$result['area_rank'].'</h1>
<h2>Europe Rank</h2>
</div>
</div>
';
} 
}
else {
echo 'Unknown error';
}
?>