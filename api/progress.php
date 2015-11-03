<?php

include('config.php');

$armory = new BattlenetArmory(WOW_REGION,GUILD_SERVER); 
// Enable this is if toons with special characters break the API.
$armory->UTF8(TRUE);
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
 //HFC
 $instance_info[] = $stats[34];
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
	$output ='<div class="seperator_cont"><div class="top_voters home_container2"><div class="sub_header"><p>Progress: Hellfire Citadel Mythic</p><h2>Based on % of Core Group Kills</h2><span class="title_overlay"></span></div><div class="cont_container"><ul class="top_voters_list">';
	foreach($bosses as $name=>$info){
		if($info['raid'] == 'Hellfire Citadel'){
			if($info['mythic'] > MYTHIC_THRESHOLD){
				$output .= '<li><p>HFC</p><a href="#">' . $name . '</a><span><i>Killed</i></span></li></span>';
			}else{
				$output .= '<li><p>HFC</p><a href="#">' . $name . '</a><span><i>Unkilled</i></span></li></span>';
			}
		}
	}
	$output .= '</ul></div></div></div>';	
	$output .='<div class="seperator_cont"><div class="top_voters home_container2"><div class="sub_header"><p>Progress: Hellfire Citadel Heroic</p><h2>Based on % of Core Group Kills</h2><span class="title_overlay"></span></div><div class="cont_container"><ul class="top_voters_list">';
	foreach($bosses as $name=>$info){
		if($info['raid'] == 'Hellfire Citadel'){
			if($info['heroic'] > HEROIC_THRESHOLD){
				$output .= '<li><p>HFC</p><a href="#">' . $name . '</a><span><i>Killed</i></span></li></span>';
			}else{
				$output .= '<li><p>HFC</p><a href="#">' . $name . '</a><span><i>Unkilled</i></span></li></span>';
			}
		}
	}
	$output .= '</ul></div></div></div>';	
	$output .='<div class="seperator_cont"><div class="top_voters home_container2"><div class="sub_header"><p>Progress: Blackrock Foundry Mythic</p><h2>Based on % of Core Group Kills</h2><span class="title_overlay"></span></div><div class="cont_container"><ul class="top_voters_list">';
	foreach($bosses as $name=>$info){
		if($info['raid'] == 'Blackrock Foundry'){
			if($info['mythic'] > MYTHIC_THRESHOLD){
				$output .= '<li><p>BRF</p><a href="#">' . $name . '</a><span><i>Killed</i></span></li></span>';
			}else{
				$output .= '<li><p>BRF</p><a href="#">' . $name . '</a><span><i>Unkilled</i></span></li></span>';
			}
		}
	}
	$output .= '</ul></div></div></div>';	
	$output .='<div class="seperator_cont"><div class="top_voters home_container2"><div class="sub_header"><p>Progress: Blackrock Foundry Heroic</p><h2>Based on % of Core Group Kills</h2><span class="title_overlay"></span></div><div class="cont_container"><ul class="top_voters_list">';
	foreach($bosses as $name=>$info){
		if($info['raid'] == 'Blackrock Foundry'){
			if($info['heroic'] > HEROIC_THRESHOLD){
				$output .= '<li><p>BRF</p><a href="#">' . $name . '</a><span><i>Killed</i></span></li></span>';
			}else{
				$output .= '<li><p>BRF</p><a href="#">' . $name . '</a><span><i>Unkilled</i></span></li></span>';
			}
		}
	}
	$output .= '</ul></div></div></div>';
	$output .='<div class="seperator_cont"><div class="top_voters home_container2"><div class="sub_header"><p>Progress: Highmaul Mythic</p><h2>Based on % of Core Group Kills</h2><span class="title_overlay"></span></div><div class="cont_container"><ul class="top_voters_list">';
	foreach($bosses as $name=>$info){
		if($info['raid'] == 'Highmaul'){
			if($info['mythic'] > MYTHIC_THRESHOLD){
				$output .= '<li><p>HM</p><a href="#">' . $name . '</a><span><i>Killed</i></span></li></span>';
			}else{
				$output .= '<li><p>HM</p><a href="#">' . $name . '</a><span><i>Unkilled</i></span></li></span>';
			}
		}
	}
	$output .= '</ul></div></div></div>';
	$output .='<div class="seperator_cont"><div class="top_voters home_container2"><div class="sub_header"><p>Progress: Highmaul Heroic</p><h2>Based on % of Core Group Kills</h2><span class="title_overlay"></span></div><div class="cont_container"><ul class="top_voters_list">';
	foreach($bosses as $name=>$info){
		if($info['raid'] == 'Highmaul'){
			if($info['heroic'] > HEROIC_THRESHOLD){
				$output .= '<li><p>HM</p><a href="#">' . $name . '</a><span><i>Killed</i></span></li></span>';
			}else{
				$output .= '<li><p>HM</p><a href="#">' . $name . '</a><span><i>Unkilled</i></span></li></span>';
			}
		}
	}
	$output .= '</ul></div></div></div>';
	return $output;
}

$progress = getRawProgress($armory, $members);
$kill_counts = setKillCounts($progress, $bosses);
print formatKills($kill_counts);

?>