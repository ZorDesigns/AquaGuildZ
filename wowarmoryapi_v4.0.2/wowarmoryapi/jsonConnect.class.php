<?php

class jsonConnect {
	
	private $regions				= array('us'=>'us.api.battle.net',
											'eu'=>'eu.api.battle.net',
											'kr'=>'kr.api.battle.net',
											'tw'=>'tw.api.battle.net',
											'cn'=>'battlenet.com.cn');
	private $characterbaseURL 		= '/wow/character/';
	private $guildbaseURL 			= '/wow/guild/';
	private $auctionhousebaseURL 	= '/api/wow/auction/data/';
	private $itembaseURL 			= '/wow/item/';
	private $realmbaseURL 			= '/wow/realm/status';
	private $databaseURL			= '/wow/data/';
	private $arenabaseURL			= '/wow/arena/';
	private $questbaseURL			= '/wow/quest/';
	private $cacheEnabled 			= TRUE;
   	private $useKeys				= FALSE;
   	private $utf8					= '';
   	private $cache;
	
	private $rawdata;
	
	function __construct() {
		$this->cacheEnabled = $GLOBALS['wowarmory']['cachestatus'];
		if ($this->cacheEnabled){
	   		$this->cache = new CacheControl();
		}
		if (isset($GLOBALS['wowarmory']['keys']['api'])){
		#if (isset($GLOBALS['wowarmory']['keys']['api']) AND isset($GLOBALS['wowarmory']['keys']['shared'])){
			#if (strlen($GLOBALS['wowarmory']['keys']['api']) > 1 AND strlen($GLOBALS['wowarmory']['keys']['shared'] > 1)){
			if (strlen($GLOBALS['wowarmory']['keys']['api']) > 1){
				$this->useKeys = TRUE;
			} else {
				print "wowarmory API ERROR: API key is required. Please see documentation<br />\n";
				exit;
			}
		} else {
			print "wowarmory API ERROR: API key is required. Please see documentation<br />\n";
			exit;
		}
		$this->utf8 = $GLOBALS['wowarmory']['UTF8'];
   	}
   
   	
   	public function getAchievements($region,$id_list,$type){
   		$url = 'https://'.$this->regions[$region].$this->databaseURL.$type.'/achievements';
   		$data = $this->getData($url, FALSE, $region,'Achievements',$id_list);
   		#print_r($data);
   		return $data;
   	}

   	public function getQuest($region,$id){
   		$url = 'https://'.$this->regions[$region].$this->questbaseURL.$id;
   		$data = $this->getData($url, FALSE, $region,'Quests');
   		return $data;
   	}
   	
   	
   	public function getRaces($region){
   		$url = 'https://'.$this->regions[$region].$this->databaseURL.'/character/races';
   		$data = $this->getData($url, FALSE, $region,'Races');
   		return $data;
   	}
   	
   	public function getPerks($region){
   		$url = 'https://'.$this->regions[$region].$this->databaseURL.'/guild/perks';
   		$data = $this->getData($url, FALSE, $region,'Perks');
   		return $data;
   	}
   	
   	public function getClasses($region){
   		$url = 'https://'.$this->regions[$region].$this->databaseURL.'/character/classes';
   		$data = $this->getData($url, FALSE, $region,'Classes');
   		return $data;
   	}
   	
   	
   	/**
   	 * Get the character object data
   	 * @param unknown_type $character
   	 * @param unknown_type $realm
   	 * @param unknown_type $region
   	 * @param unknown_type $fields
   	 * @return FALSE if unable to load
   	 */
	public function getCharacter($character,$realm,$region,$fields) {
		if ($this->utf8){
			$realm = utf8_encode($realm);
		}
		$realm = rawurlencode($realm);
		if ($this->utf8){
			$character = utf8_encode($character);
		}
		$character = rawurlencode($character);
		$url = 'https://'.$this->regions[$region].$this->characterbaseURL.$realm.'/'.$character;
		return $this->getData($url,$fields,$region,'Characters');
	}

	public function getArenaTeam($region, $realm, $teamsize, $teamname, $fields) {
		if ($this->utf8){
			$realm = utf8_encode($realm);
		}
		$realm = rawurlencode($realm);
		if ($this->utf8){
			$teamname = utf8_encode($teamname);
		}
		$teamname= rawurlencode($teamname);
		$url = 'https://'.$this->regions[$region].$this->arenabaseURL.$realm.'/'.$teamsize.'/'.$teamname;
		return $this->getData($url, $fields, $region,'ArenaTeams');
	}
	
	
	public function getGuild($guild,$realm,$region,$fields) {
		if ($this->utf8){
			$realm = utf8_encode($realm);
		}
		$realm = rawurlencode($realm);
		if ($this->utf8){
			$guild = utf8_encode($guild);
		}
		$guild = rawurlencode($guild);
		$url = 'https://'.$this->regions[$region].$this->guildbaseURL.$realm.'/'.$guild;
		return $this->getData($url, $fields, $region,'Guilds');
	}
	
	public function getAuctionHouse($realm,$region){
		if ($this->utf8){
			$realm = utf8_encode($realm);
		}
		$realm = rawurlencode($realm);
		$url = 'https://'.$this->regions[$region].$this->auctionhousebaseURL.$realm;
		return $this->getData($url,FALSE, $region,'AuctionHouse');
	}

	public function getRealms($region){
		$url = 'https://'.$this->regions[$region].$this->realmbaseURL;
		return $this->getData($url,FALSE, $region);
	}
	
	
	public function getItem($itemID,$region){
		$url = 'https://'.$this->regions[$region].$this->itembaseURL.$itemID;
		return $this->getData($url, FALSE, $region, 'Items');
	}

	private function getData($url, $fields, $region, $type = FALSE, $id_list = FALSE) {
		if ($GLOBALS['wowarmory']['locale'] != FALSE){
			$url .= '?locale='.$GLOBALS['wowarmory']['locale'];
	   		$objectID = md5($url);
	   		$url .= '&';
		} else {
	   		$objectID = md5($url);
	   		$url .= '?';
		}
		if ($fields != FALSE AND strlen($fields)>1){
			$url .= 'fields='.$fields;
		}
		if ($type AND $this->cacheEnabled AND $this->cache->checkCache($objectID,$type,$fields)){
			$objectJSON = $this->cache->getData($objectID, $type, $id_list);
			if (is_array($objectJSON)){
				return $objectJSON;
			}
   		} else {
   			if ($this->useKeys){
   				$GLOBALS['wowarmory']['debug']['global'] ? print "GETTING NEW DATA! $url\n": '';
   				#$objectJSON = $this->getByKeys($url,$region);
				$objectJSON = @file_get_contents($url."&apikey=".$GLOBALS['wowarmory']['keys']['api']);
   			} else {
				$objectJSON = @file_get_contents($url);
   			}
			if (!$objectJSON){
				return FALSE;
			}
			if ($this->cacheEnabled AND $type){
 				$this->cache->genericInsert($objectID, $objectJSON, $type);
			}
   		}
 		$this->rawdata = $objectJSON;
		$returndata = json_decode($objectJSON,TRUE);
		if ($type === 'Achievements'){
			return $this->cache->getData($objectID, $type, $id_list);
		}
		if ($type === 'AuctionHouse' AND isset($returndata['files'][0]['url'])){
			return $this->getData($returndata['files'][0]['url'], FALSE, $type);
		}
		return $returndata;
	}
	
	public function getRaw(){
		return $this->rawdata;
	}
	
	private function getByKeys($url,$region){
		print "GETTING NEW DATA!\n";
		$pubkey = $GLOBALS['wowarmory']['keys']['shared'];
		$privkey = $GLOBALS['wowarmory']['keys']['api'];
		$url = preg_replace('/^http/', 'https', $url);
		$date = date('D, d M Y G:i:s T',time());
		$stringtosign = "GET\n".$date."\n".$url."\n";
		$signature = base64_encode(hash_hmac('sha1', $stringtosign, $privkey,true));
		$header = array("Host: ".$this->regions[$region],"Date: ". $date,"\nAuthorization: BNET ". $pubkey.":". base64_encode(hash_hmac('sha1', "GET\n".$date."\n".$url."\n", $privkey, true))."\n");
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_VERBOSE, true);
		
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		$response = curl_exec($ch);
		$headers = curl_getinfo($ch);
		return $response;
	}
	
	private function buildURL(){
		
	}
}

?>
