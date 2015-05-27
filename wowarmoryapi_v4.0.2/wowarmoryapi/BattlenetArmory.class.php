<?php
/**
 * Master class for the battle.net WoW armory
 * @author Thomas Andersen <acoon@acoon.dk>
 * @copyright Copyright (c) 2011, Thomas Andersen, http://sourceforge.net/projects/wowarmoryapi
 * @version 3.5.1
 */
require_once('CacheControl.class.php');
require_once('SafePDO.class.php');
require_once('Guild.class.php');
require_once('Character.class.php');
require_once('Item.class.php');
require_once('jsonConnect.class.php');
require_once('AuctionHouse.class.php');
require_once('Realms.class.php');
require_once('Achievements.class.php');
require_once('ArenaTeam.class.php');
require_once('Races.class.php');
require_once('Classes.class.php');
require_once('Perks.class.php');
require_once('Quest.class.php');
require_once('WowHead.class.php');


class BattlenetArmory {
	
	private $region;
	private $realm;
	private $cacheEnabled = TRUE;
	private $characterExcludeFields = FALSE;

	/**
	 * This will load the main armory class but only the realm and region will be set and no connections will be made until a get function is called.
	 * @param String $region Region can be EU|US|RU|TW|CN etc.
	 * @param String $realm Name of the realm. E.g.: 'Defias Brotherhood'
	 */
   	function __construct($region, $realm=FALSE) {
   		$this->region = strtolower($region);
   		$this->realm  = $realm;
   		$GLOBALS['wowarmory']['cachestatus'] = TRUE;
   		$GLOBALS['wowarmory']['urls']['achievement'] = 'http://www.wowhead.com/achievement';
   		$GLOBALS['wowarmory']['urls']['quest'] = 'http://www.wowhead.com/quest';
   		$GLOBALS['wowarmory']['urls']['item'] = 'http://www.wowhead.com/item';
   		$GLOBALS['wowarmory']['urls']['perk'] = 'http://www.wowhead.com/spell';
   		$GLOBALS['wowarmory']['CharactersTTL'] = 6000;
   		$GLOBALS['wowarmory']['GuildsTTL'] = 10000;
   		$GLOBALS['wowarmory']['WowHeadTTL'] = 286600;
   		$GLOBALS['wowarmory']['AuctionHouseTTL'] = 2500;
   		$GLOBALS['wowarmory']['ItemsTTL'] = 86600;
   		$GLOBALS['wowarmory']['AchievementsTTL'] = 200600;
   		$GLOBALS['wowarmory']['QuestsTTL'] = 2006000;
   		$GLOBALS['wowarmory']['RacesTTL'] = 2006000;
   		$GLOBALS['wowarmory']['ClassesTTL'] = 2006000;
   		$GLOBALS['wowarmory']['PerksTTL'] = 2006000;
   		$GLOBALS['wowarmory']['ArenaTeamsTTL'] = 6000;
   		$GLOBALS['wowarmory']['UTF8'] = FALSE;
   		$GLOBALS['wowarmory']['debug']['emblem'] = FALSE;
   		$GLOBALS['wowarmory']['locale'] = FALSE;
   	}
   	
   	
   	/**
   	 * Enter description here ...
   	 * @param Integer $locale The locale you want to use. Set to FALSE to reset back to default
   	 */
   	public function setLocale($locale = FALSE){
   		$GLOBALS['wowarmory']['locale'] = $locale;
   	}
   	
   	/**
   	 * Retrieve the arena team from armory - Returns an ArenaTeam object
   	 * @param String $teamsize Can be 2v2 | 3v3 | 5v5
   	 * @param String $teamname The name of the team
   	 * @param String $realm Realm name is not if you have already defined it in the construct or with setRegion()
   	 * @return object $team The arena team object
   	 */
   	public function getArenaTeam($teamsize, $teamname,$realm = FALSE){
   		if (!$realm) {
   			$realm = $this->realm;
   		} 
   		$team = new ArenaTeam($this->region, $realm, $teamsize, $teamname);
   		return $team;
   	}
   	
   	/**
   	 * Load an item based on the item ID - not possible to use item names.
   	 * @param Integer $itemID The ID of the item requested
   	 * @return Returns the Item object.
   	 */
   	public function getItem($itemID){
   		$item = new Item($this->region, $itemID);
   		return $item;
   	}
   	
   	/**
   	 * Load a quest based on the quest ID.
   	 * @param Integer $quest_id The ID of the quest requested
   	 * @return Returns the Quest object.
   	 */
   	public function getQuest($quest_id){
   		$quest = new Quest($this->region, $quest_id);
   		return $quest;
   	}
   	
   	
   	/**
   	 * Retrieve the character from armory - Returns a character object
   	 * @param String $name Name of the character
   	 * @param String $realm Realmname is not needed if you have already defined it in the construct or with setRegion()
   	 * @return object $character The character object from the character class.
   	 */
   	public function getCharacter($name,$realm = ''){
   		if (strlen($realm) == 0) {
   			$realm = $this->realm;
   		} 
   		$character = new Character($this->region, $realm , $name, $this->characterExcludeFields);
   		return $character;
   	}

   	/**
   	 * Enter description here ...
   	 * @param Array $fieldsArray An array with all the fields that should not be loaded or FALSE to reset to dafeult - Main consumers are quests and achievements - array('quests','achievements')
   	 */
   	public function characterExcludeFields($fieldsArray){
   		$this->characterExcludeFields = $fieldsArray;
   	}
   	
   	/**
   	 * Retrieve the guild from armory.
   	 * @param String $name Name of the guild
   	 * @param String $realm Realmname is not needed if you have already defined it in the construct or with setRegion()
   	 * @return object $guild The guild object from the guild class.
   	 */
   	public function getGuild($name,$realm = ''){
   		if (strlen($realm) == 0) {
   			$realm = $this->realm;
   		} 
   		$guild = new Guild($this->region, $realm , $name);
   		return $guild;
   	}
   	
   	
   	/**
   	 * Switch the region.
   	 * @param String $newRegion Can be EU/US/CH etc.
   	 * @return void
   	 */
   	public function setRegion($newRegion){
   		$this->region = strtolower($newRegion);
   	}
   	
   	public function getAuctionHouse($realm = ''){
   		if (strlen($realm) == 0) {
   			$realm = $this->realm;
   		} 
   		$auctionhouse = new AuctionHouse($this->region, $realm);
   		return $auctionhouse;
   	}

   	public function getRealms(){
   		$realmO = new Realms($this->region);
   		return $realmO;
   	}
   	
   	
   	/**
   	 * Turn the cache on/off
   	 * @param Boolean $boolean Can be TRUE or FALSE
   	 */
   	public function useCache($boolean){
		$this->cacheEnabled = $boolean;
		$GLOBALS['wowarmory']['cachestatus'] = $boolean;
   	}
   	
   	/**
   	 * Enter description here ...
   	 * @param $enabled
   	 */
   	public function UTF8($enabled=TRUE){
   		$GLOBALS['wowarmory']['UTF8'] = $enabled;
   	}

   	/**
   	 * Enable debug for a specific element. 
   	 * @param String $element Valid elements is: emblem
   	 * @param Boolean $value Can be set to TRUE/FALSE 
   	 */
   	public function debug($element,$value=TRUE){
   		$GLOBALS['wowarmory']['debug'][$element] = $value;
   	}
   	
   	/**
   	 * Give cache a new time to live
   	 * @param Integer $seconds The amount of seconds the cache should be considered valid
   	 */
   	public function setCharactersCacheTTL($seconds){
   		$GLOBALS['wowarmory']['CharactersTTL'] = $seconds;
   	}
   	
   	/**
   	 * Give cache a new time to live
   	 * @param Integer $seconds The amount of seconds the cache should be considered valid
   	 */
   	public function setGuildsCacheTTL($seconds){
   		$GLOBALS['wowarmory']['GuildsTTL'] = $seconds;
   	}
   	
   	/**
   	 * Give cache a new time to live
   	 * @param Integer $seconds The amount of seconds the cache should be considered valid
   	 */
   	public function setAuctionHouseCacheTTL($seconds){
   		$GLOBALS['wowarmory']['AuctionHouseTTL'] = $seconds;
   	}
   	
   	/**
   	 * Give cache a new time to live
   	 * @param Integer $seconds The amount of seconds the cache should be considered valid
   	 */
   	public function setItemsCacheTTL($seconds){
   		$GLOBALS['wowarmory']['ItemsTTL'] = $seconds;
   	}
   	
   	/**
   	 * Give cache a new time to live
   	 * @param Integer $seconds The amount of seconds the cache should be considered valid
   	 */
   	public function setAchievementsCacheTTL($seconds){
   		$GLOBALS['wowarmory']['AchievementsTTL'] = $seconds;
   	}
   	
   	/**
   	 * Give cache a new time to live
   	 * @param Integer $seconds The amount of seconds the cache should be considered valid
   	 */
   	public function setArenaTeamsCacheTTL($seconds){
   		$GLOBALS['wowarmory']['ArenaTeamsTTL'] = $seconds;
   	}
   	
   	
}

?>
