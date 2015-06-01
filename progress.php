<?php

include('config.php');

$armory = new BattlenetArmory(WOW_REGION,GUILD_SERVER); 
// Enable this is if toons with special characters break the API.
// $armory->UTF8(TRUE);
$armory->setLocale(WOW_LOCALE);
// Exclude everything except progression
$armory->characterExcludeFields(array('titles','stats','talents','items','reputation','professions','appearance','mounts','achievements','pvp','quests','pets','guild','petSlots','audit','feed','hunterPets')); 
$guild = $armory->getGuild(GUILD_NAME); 
$members = $guild->getMembers('rank','asc');

//Query the armory to get progression data from a number of characters.
function getRawProgress($armory, $members){
	$progress = array();
	$count = 0;
	foreach($members as $id=>$char){
		if($char['character']['level'] < MAX_LEVEL){
			unset($members[$id]);
		}else{
			if($count < CHARACTERS_TO_CHECK){
				//$info[] = $char['character']['name'];
				$progress[] = $armory->getCharacter($char['character']['name'], GUILD_SERVER);
				$count++;
			}
		}
	}
	return $progress;
}

//Set the boss kill counts in the main boss array
function setKillCounts($progress, $bosses){
	foreach($progress as $id=>$checkmember){
		$stats = $checkmember->getRaidStats();
		//Highmaul
		$instance_info[] = $stats[32];
		//BRF
		$instance_info[] = $stats[33];
	}
	foreach($instance_info as $instance_stats){
		foreach($instance_stats as $ikey=>$idata){
			if($ikey == 'bosses'){
				foreach($idata as $boss_info){
					$bosses[$boss_info['name']]['normal'] += $boss_info['normalKills'];
					$bosses[$boss_info['name']]['heroic'] += $boss_info['heroicKills'];
					$bosses[$boss_info['name']]['mythic'] += $boss_info['mythicKills'];
				}
			}
		}
	}
	return $bosses;
}

//Check kill counts and make the output widget
function formatKills($bosses){
	$output = '<div id="progression-widget">';
	$output .= '<h3 class="first">Blackrock Foundry</h3>';
	$output .= '<p>Coming soon!</p>';
	$output .= '<h3>Highmaul Mythic</h3>';
	foreach($bosses as $name=>$info){
		if($info['raid'] == 'Highmaul'){
			if($info['mythic'] > MYTHIC_THRESHOLD){
				$output .= '<span class="boss boss-name-killed mythic">' . $name . '</span>';
			}else{
				$output .= '<span class="boss boss-name-unkilled mythic">' . $name . '</span>';
			}
		}
	}
	$output .= '<h3>Highmaul Heroic</h3>';
	foreach($bosses as $name=>$info){
		if($info['raid'] == 'Highmaul'){
			if($info['heroic'] > HEROIC_THRESHOLD){
				$output .= '<span class="boss boss-name-killed heroic">' . $name . '</span>';
			}else{
				$output .= '<span class="boss boss-name-unkilled heroic">' . $name . '</span>';
			}
		}
	}
	$output .= '</div>';
	return $output;
}

$progress = getRawProgress($armory, $members);
$kill_counts = setKillCounts($progress, $bosses);
print formatKills($kill_counts);

?>