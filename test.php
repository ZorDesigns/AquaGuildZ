<?php
header('Content-type: text/html; charset=utf-8');
$PlayerName = 'Maouzi';
require_once('configs.php');

//-- Guild APIs --//
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/guild/'.$RealmName.'/'.$GuildName.'?locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/guild/'.$RealmName.'/'.$GuildName.'?fields=achievements&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/guild/'.$RealmName.'/'.$GuildName.'?fields=challenge&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/guild/'.$RealmName.'/'.$GuildName.'?fields=members&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/guild/'.$RealmName.'/'.$GuildName.'?fields=news&locale='.$LocaleName.'&apikey='.$APIkey.'');

//-- Player APIs --//
$json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=achievements&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=appearance&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=audit&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=feed&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=guild&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=hunterPets&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=items&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=mounts&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=pets&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=petSlots&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=progression&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=pvp&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=quests&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=reputation&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=stats&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=talents&locale='.$LocaleName.'&apikey='.$APIkey.'');
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/character/'.$RealmName.'/'.$PlayerName.'?fields=titles&locale='.$LocaleName.'&apikey='.$APIkey.'');

//-- Realm APIs --//
//-- $json_wow_api_url = file_get_contents('https://'.$RegionName.'.api.battle.net/'.$GameName.'/realm/status?locale='.$LocaleName.'&apikey='.$APIkey.'');

//----------------------------------------------------------------//
//-- Output (to browser) whichever line you uncommented above. --//
//--------------------------------------------------------------//
 echo '<h3>World of Warcraft - Exported Data</h3><pre>';
 var_dump(json_decode($json_wow_api_url, true));
 echo '</pre>';
?> 