<?php 
include(dirname(__DIR__).'/configs.php');
$ranks = '';
$json = file_get_contents("http://guildox.com/api/guild/$RegionName/$RealmName/$GuildName");
if($json == false)
{
throw new Exception("Failed To load infomation. check setup options");
}
$decode = json_decode($json, true);
var_dump(json_decode($json));
?>