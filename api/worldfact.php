<?php
include(dirname(__DIR__).'/configs.php');
$ranks = '';
$json = file_get_contents("http://www.wowprogress.com/guild/eu/twisting-nether/O+M+E+G+A/json_rank");
if ($json == false) {
throw new Exception("Failed To load infomation. Check setup options");
}
$result = json_decode($json, true);
if (isset($result['world_rank'])) {
if (is_array($result['world_rank'])) {
foreach ($result["world_rank"] as $value) {
echo'
<div class="block online_players">
<div class="half_top logo_container">
<div class="world_logo">
<span class="picto_Joueurs"></span>
</div>
</div>
<div class="middle_content">
<h1 class="fix_area_h1">'.$value.'</h1>
<h2>World Rank</h2>
</div>
</div>';
}
}   
else {
echo'
<div class="block online_players">
<div class="half_top logo_container">
<div class="world_logo">
<span class="picto_Joueurs"></span>
</div>
</div>
<div class="middle_content">
<h1 class="fix_area_h1">'.$result['world_rank'].'</h1>
<h2>World Rank</h2>
</div>
</div>
';
} 
}
else {
echo 'Unknown error';
}
?>