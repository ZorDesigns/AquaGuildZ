<?php

class Character {
	
	private $name;
	private $region;
	private $realm;
	private $characterData;
	private $fields = array('stats','talents','items','reputation','titles','professions','appearance','mounts','achievements','progression','pvp','quests','pets','guild','petSlots','audit','feed','hunterPets');
	private $cache;
	private $currentTitle;
	private $race;
	private $class;
	
	
	/**
	 * Enter description here ...
	 * @param String $region
	 * @param String $realm
	 * @param String $character
	 * @param Array $ignoreFields An array with all the fields that should not be loaded. Main consumers are quests and achievements - array('quests','achievements')
	 * @return Returns FALSE if the character is not valid.
	 */
   	function __construct($region, $realm, $character, $ignoreFields = FALSE) {
   		if ($ignoreFields != FALSE){
   			$this->excludeFields($ignoreFields);
   		}
   		$this->region = strtolower($region);
   		$this->realm = $realm;
   		$this->name = $character;
		$jsonConnect = new jsonConnect();
		$this->characterData = $jsonConnect->getCharacter($character, $realm, $region, implode(",",$this->fields));
		if ($this->characterData != FALSE){
			$this->name = $this->characterData['name'];
			$this->setTitles();
			$this->setTalentTreeSelected();
			$this->race = new Races($region);
			$this->class = new Classes($region);
		} else {
			return FALSE;
		}
		return TRUE;
   	}
   	
	/**
   	 * Returns the primary professions based on wowhead data. Can be slow.
   	 */
   	public function getPrimaryProfessions(){
   		$professions = $this->characterData['professions']['primary'];
   		$professions_out = $professions;
   		$wowhead = new WowHead();
   		foreach ($professions as $prof_id => $profession){
   			foreach ($profession['recipes'] as $key => $recipe_id) {
   				$url = "http://www.wowhead.com/spell=".$recipe_id;
   				$recipe_name = $wowhead->getData($url, 'name_enus');
   				$professions_out[$prof_id]['recipes'][$key] = array('spell_id'=>$recipe_id, 'spell_name'=> $recipe_name,'spell_link'=>'http://www.wowhead.com/spell='.$recipe_id);
   			}
   		}
   		return $professions_out;
   	}

   	/**
   	 * Check if there is anything in a slot, return TRUE or FALSE
   	 * @param String $slot Valid values are head|neck|shoulder|back|chest|shirt|tabard|wrist|hands|waist|legs|feet|finger1|finger2|trinket1|trinket2|mainHand|offHand|ranged
   	 * @return Returns TRUE or FALSE
   	 */
   	public function checkItemSlot($slot){
   		if(isset($this->characterData['items'][$slot])){
   			return TRUE;
   		}
   		return FALSE;
   	}
   	
   	
   	/**
   	 * Get the item in a slot
   	 * @param String $slot Valid values are head|neck|shoulder|back|chest|shirt|tabard|wrist|hands|waist|legs|feet|finger1|finger2|trinket1|trinket2|mainHand|offHand|ranged
   	 * @return Returns an array with basic item information or FALSE if the slot is empty
   	 */
   	public function getItemSlot($slot){
   		if ($this->checkItemSlot($slot)){
   			$this->characterData['items'][$slot]['wowhead'] = $GLOBALS['wowarmory']['urls']['item']."=".$this->characterData['items'][$slot]['id'];
   			return $this->characterData['items'][$slot];
   		}
   		return FALSE;
   	}
   	
   	/**
   	 * Get information on the character class
   	 * @return Returns a string.
   	 */
   	public function getClassName(){
   		return $this->class->getClass($this->characterData['class'],'name');
   	}
   	

   	/**
   	 * Get information on the character race
   	 * @return Returns a string.
   	 */
   	public function getRaceName(){
   		return $this->race->getRace($this->characterData['race'],'name');
   	}
   	
   	/**
   	 * Enter description here ...
   	 * @param Array $fields
   	 */
   	private function excludeFields($fields){
   		foreach ($fields as $field){
   			unset($this->fields[array_search($field,$this->fields)]);
   		}
   	}
   	
   	/**
   	 * Get all talent trees
   	 */
   	public function getTalents(){
   		return $this->characterData['talents'];
   	}
   	
   	/**
   	 * Get character feed
   	 * @return Array returns array with recent activities
   	 */
   	public function getFeed(){
   		return $this->characterData['feed'];
   	}

   	/**
   	 * Get character guild basics
   	 * @return Array returns array with basic guild information
   	 */
   	public function getGuild(){
   		return $this->characterData['guild'];
   	}

   	/**
   	 * Get character combat pets
   	 * @return Array|false returns array with combat pets, or false if not valid for character class
   	 */
   	public function getCombatPets(){
		if (isset($this->characterData['hunterPets'])) {
   			return $this->characterData['hunterPets'];
		} else {
			return FALSE;
		}
   	}

   	/**
   	 * Get character audit
   	 * @return Array returns array with audit information
   	 */
   	public function getAudit(){
   		return $this->characterData['audit'];
   	}

   	/**
   	 * Get character pet slots
   	 * @return Array returns array with pet slot information
   	 */
   	public function getPetSlots(){
   		return $this->characterData['petSlots'];
   	}

   	/**
   	 * Get the active talent tree
   	 * @return Array returns array with active talent tree
   	 */
   	public function getActiveTalents(){
   		return $this->characterData['talents'][$this->characterData['talents']['selectedSpec']];
   	}

   	/**
   	 * Get the inactive talent tree
   	 * @return Array returns array with inactive talent tree
   	 */
   	public function getInactiveTalents(){
   		return $this->characterData['talents'][$this->characterData['talents']['notSelectedSpec']];
   	}
   	
   	
   	private function setTalentTreeSelected(){
   		if (!isset($this->characterData['talents'][0]['selected'])){
   			$this->characterData['talents'][0]['selected'] = 0;
   			$this->characterData['talents']['selectedSpec'] = 1;
   			$this->characterData['talents']['notSelectedSpec'] = 0;
   		}
   		if (!isset($this->characterData['talents'][1]['selected'])){
   			$this->characterData['talents'][1]['selected'] = 0;
   			$this->characterData['talents']['selectedSpec'] = 0;
   			$this->characterData['talents']['notSelectedSpec'] = 1;
   		}
   	}

   	/**
   	 * Get the name of the faction.
   	 * @return Will return 'horde' or 'alliance' or locale name
   	 */
   	public function getFactionName(){
		return $this->race->getRace($this->characterData['race'],'side');
   	}
   	
   	/**
   	 * Get the faction of the character.
   	 * @return Returns 1 if alliance, 2 if horde.
   	 */
   	public function getFaction(){
   		$alliance = array(1,3,4,7,11,22);
   		$horde = array(2,5,6,8,9,10);
   		if (in_array($this->characterData['race'], $alliance)){
   			return 1;
   		}
   		if (in_array($this->characterData['race'], $horde)){
   			return 2;
   		}
   		return FALSE;
   	}
   	
   	/**
   	 * Get stats on all the character rated battlegrounds
   	 * @return Returns an array with all the battlegrounds
   	 */
   	public function getBattlegrounds(){
   		return $this->characterData['pvp']['ratedBattlegrounds']['battlegrounds'];
   	}
   	
   	/**
   	 * Get the rated battleground personal rating
   	 * @return Returns the personal rating
   	 */
   	public function getBattlegroundRating(){
   		return $this->characterData['pvp']['ratedBattlegrounds']['personalRating'];
   	}

   	/**
   	 * Get the amount of honor kills
   	 * @return Return the number of honor kills
   	 */
   	public function getHonorKills(){
   		return $this->characterData['pvp']['totalHonorableKills'];
   	}
   	
   	/**
   	 * Retrieve character arena teams
   	 * @return Returns array with teams, return FALSE if character is not member of any team
   	 */
   	public function getArenaTeams(){
   		$arena = $this->characterData['pvp']['arenaTeams'];
   		if (count($arena) == 0){
   			return FALSE;
   		} else {
   			return $arena;
   		}
   	}
   	
   	/**
   	 * Check if the character has been loaded correctly
   	 * @return FALSE or TRUE
   	 */
   	public function isValid(){
   		if ($this->characterData){
   			return TRUE;
   		} else {
   			return FALSE;
   		}
   	}
   	
   	/**
   	 * Get all the data there is on this character
   	 * @return A very large array with alot of data.
   	 */
   	public function getData() {
   		return $this->characterData;
   	}
   	
   	/**
   	 * Retrieve the characters mounts
   	 * @return An array with all the character mounts ID - Names currently unavailable.
   	 */
   	public function getMounts(){
   		$data = $this->characterData;
   		return $data['mounts'];
   	}
   	
   	/**
   	 * Return an array with equipped gear and itemlevel stats.
   	 * @return An array with gear
   	 */
   	public function getGear(){
   		return $this->characterData['items'];
   	}
   	
   	/**
   	 * Check if the character is male
   	 * @return Boolean Return TRUE if male, else FALSE
   	 */
   	public function isMale(){
   		if ($this->characterData['gender'] == 0){
   			return TRUE;
   		}
   		return FALSE;
   	}
   	
   	/**
   	 * Check if the character is female
   	 * @return Boolean Return TRUE if female, else FALSE
   	 */
   	public function isFemale(){
   		if ($this->characterData['gender'] == 1){
   			return TRUE;
   		}
   		return FALSE;
   	}
   	
   	/**
   	 * Get gender of character
   	 * @return Integer Return 1 if male, 2 if female, FALSE if character not loaded correctly
   	 */
   	public function getGender(){
   		if (isset($this->characterData['gender'])){
	   		if ($this->characterData['gender'] == 1){
	   			return 2;
	   		}
	   		if ($this->characterData['gender'] == 0){
	   			return 1;
	   		}
	   		return FALSE;
   		}
   		return FALSE;
   	}
   	
   	/**
   	 * Get the character achievement points
   	 * @return Numer of points
   	 */
   	public function getAchievementPoints() {
   		return $this->characterData['achievementPoints'];
   	}

   	/**
   	 * Get a list of the completed achievements by the guild
   	 * @param String $sort Define what the list should be sorted by: timestamp|id|name
   	 * @param String $sortFlag Can be asc|desc
   	 */
   	public function getAchievements($sort=FALSE,$sortFlag='asc'){
   		$achievements['achievementsCompleted'] = $this->characterData['achievements']['achievementsCompleted'];
   		$achievements['achievementsCompletedTimestamp'] = $this->characterData['achievements']['achievementsCompletedTimestamp'];
   		$id_list = '';
   		for ($i = 0; $i < count($achievements['achievementsCompleted']); $i++){
   			// Build the new array to return
   			$achievement[$i]['id']=$achievements['achievementsCompleted'][$i];
   			$achievement[$i]['timestamp']=$achievements['achievementsCompletedTimestamp'][$i];
   			$achievement[$i]['url'] = $GLOBALS['wowarmory']['urls']['achievement']."=".$achievements['achievementsCompleted'][$i];

   			$achievement[$i]['url'] .= "&who=".$this->name."&when=".$achievement[$i]['timestamp'];
   			$id_list .= $achievement[$i]['id'].',';
   		}
   		
   		$id_list = substr($id_list, 0,-1);
   		$achievementdata = new Achievements($id_list,'character',$this->region);
		$id_list = null;
   		
   		for ($i = 0; $i < count($achievements['achievementsCompleted']); $i++){
   			$achievement[$i]['name'] = $achievementdata->getAchievement($achievement[$i]['id'],'title');
   		}
   		
   		$achievements = null;
   		$achievementdata = null;
   		
   	   	if ($sort){
			return $this->sortAchievements($achievement, $sort, $sortFlag);
   		}
   		return $achievement;
   	}
   	
   	
   	/**
   	 * Get a list of the completed achievements by the guild
   	 * @param String $sort Define what the list should be sorted by: id|name
   	 * @param String $sortFlag Can be asc|desc
   	 */
   	public function getCompletedQuests($sort=FALSE,$sortFlag='asc'){
   		$wowhead = new WowHead();
   		$quests = $this->characterData['quests'];
   		for ($i = 0; $i < count($quests); $i++){
   			// Build the new array to return
   			$quest[$i]['id'] = $quests[$i];
   			$quest[$i]['url'] = $GLOBALS['wowarmory']['urls']['quest']."=".$quests[$i];

   			// Get name of achievement
   			$questdata = new Quest($this->region, $quests[$i]);
   			$quest[$i]['name'] = $questdata->getTitle();
   			#$quest[$i]['url'] .= "&who=".$this->name."&when=".$achievement[$i]['timestamp'];
   		}
   	   	if ($sort){
			return $this->sortAchievements($quest, $sort, $sortFlag);
   		}
   		return $quest;
   	}

   	/**
   	 * Get the number of quests completed by the character
   	 * @return Get the number of quests completed by the character
   	 */
   	public function getCompletedQuestsAmount(){
   		return count($this->characterData['quests']);
   	}
   	
	/**
	* Retrieve the characters companions
	* @return An array with all the character companions ID - Names currently unavailable.
	*/
	public function getCompanions(){
		$data = $this->characterData;
		return $data['companions'];
	}
   	
   	/**
   	 * Get the character level
   	 * @return Retuns the character level
   	 */
   	public function getLevel() {
   		return $this->characterData['level'];
   	}

   	/**
   	 * Retrieve stats such as HP,mana,AP,AGIhit,parry etc.
   	 * @return Return an array
   	 */
   	public function getStats() {
   		return $this->characterData['stats'];
   	}
   	
   	/**
   	 * Get the character professions
   	 * @return Array with professions
   	 */
   	public function getProfessions(){
   		return $this->characterData['professions'];
   	}
   	
   	/**
   	 * Get character reputations
   	 * @param Boolean $sort Use to enable sorting
   	 * @param String $sortfield Define the field you want to sort by - Values are: id | name | standing
   	 * @param String $order Define the order of the sorting - Values are: desc | asc
   	 * @return Returns an array with all the reputations
   	 */
   	public function getReputation($sort=FALSE,$sortfield='standing',$order='desc'){
   		$reputations = $this->characterData['reputation'];
   		foreach ($reputations as $key => $reputation){
   			$reputation['standing'] == 0 ? $reputations[$key]['standingName'] = 'Hated':FALSE;
   			$reputation['standing'] == 1 ? $reputations[$key]['standingName'] = 'At war':FALSE;
   			$reputation['standing'] == 2 ? $reputations[$key]['standingName'] = 'Unfriendly':FALSE;
   			$reputation['standing'] == 3 ? $reputations[$key]['standingName'] = 'Neutral':FALSE;
   			$reputation['standing'] == 4 ? $reputations[$key]['standingName'] = 'Friendly':FALSE;
   			$reputation['standing'] == 5 ? $reputations[$key]['standingName'] = 'Honored':FALSE;
   			$reputation['standing'] == 6 ? $reputations[$key]['standingName'] = 'Revered':FALSE;
   			$reputation['standing'] == 7 ? $reputations[$key]['standingName'] = 'Exalted':FALSE;
   		} 
   		if ($sort){
   			$reputations = $this->sortReputation($reputations, $sortfield, $order);
   		}
   		return $reputations;
   	}
   	
   	/**
   	 * Retrieve the raid kills from the character
   	 * @param String $sort Can be asc | desc. Default is asc
   	 * @return Array with information on all raid instances.
   	 */
   	public function getRaidStats($sort='asc'){
   		$raids = $this->characterData['progression']['raids'];
   		foreach (array_keys($raids) as $key){
   			$raid = $raids[$key];
   			$bosses = $raid['bosses'];
   			$numberofbosses = count($bosses);
   			$numberofbosseskilled = 0;
   			foreach ($bosses as $boss){
   				if ($boss['normalKills']>0 OR $boss['heroicKills']>0){
   					$numberofbosseskilled++;
   				}
   			}
   			$t['totalbosses'] = $numberofbosses;
   			$raids[$key]['totalbosses'] = $numberofbosses;
   			$raids[$key]['bosseskilled'] = $numberofbosseskilled;
   		} 
   		if ($sort == 'desc'){
   			$raids = array_reverse($raids);
   		}
   		return $raids;
   	}
   	
   	/**
   	 * Returns the complete URL for a character thumbnail
   	 */
   	public function getThumbnailURL(){
   		$thumb = $this->characterData['thumbnail'];
   		return 'http://' .$this->region. '.battle.net/static-render/' .$this->region. '/' . $thumb;
   	}
   	
	/**
	* Returns the complete URL for a character profile pic
	*/
	public function getProfilePicURL(){
		$thumb = $this->characterData['thumbnail'];
		$thumb = str_replace("avatar",'profilemain',$thumb);
		return 'http://' .$this->region. '.battle.net/static-render/' .$this->region. '/' . $thumb;
	}

	/**
	* Returns the complete URL for a character profile pic
	*/
	public function getProfileInsetURL(){
		$thumb = $this->characterData['thumbnail'];
		$thumb = str_replace("avatar",'inset',$thumb);
		return 'http://' .$this->region. '.battle.net/static-render/' .$this->region. '/' . $thumb;
	}
	
	
   	/**
   	 * Get the full currently used title
   	 * @param Boolean $withName Set to FALSE if you want to use the %s instead of name
   	 * @return A string with the title and name
   	 */
   	public function getCurrentTitle($withName = TRUE){
   		if ($withName){
	   		return $this->currentTitle['name_with_name'];
   		} else {
   			return $this->currentTitle['name'];
   		}
   	}
   	
   	
   	/**
   	 * Get all the titles held by the character
   	 * @return An array with all the titles
   	 */
   	public function getTitles(){
   		return $this->characterData['titles'];
   	}
   	
   	private function setTitles(){
   		$titles = $this->characterData['titles'];
   		foreach ($titles as $key => $title){
   			$this->characterData['titles'][$key]['name_with_name'] = preg_replace('/\%s/',$this->name,$title['name']);
   			if (isset($title['selected']) and $title['selected']){
   				$this->currentTitle['name_with_name'] = $this->characterData['titles'][$key]['name_with_name'];
   				$this->currentTitle['name'] = $this->characterData['titles'][$key]['name'];
   			}
   		}
   	}
   	
   	private function sortAchievements($array,$sortkey,$sortFlag){
   		$arraysize = count($array);
   		foreach(array_keys($array) as $key){
  			$temp_array[$key] = $array[$key][$sortkey];
  		}
   		natsort($temp_array);
   		if ($sortFlag == 'desc'){
   			$temp_array = array_reverse($temp_array,TRUE);
   		}
   		foreach(array_keys($temp_array) as $key){
   			$return_array[] = $array[$key]; 
   		}
   		return $return_array;
   	}

   	private function sortReputation($array,$sortkey,$sortFlag){
   		$arraysize = count($array);
   		foreach(array_keys($array) as $key){
  			$temp_array[$key] = $array[$key][$sortkey];
  		}
   		natsort($temp_array);
   		if ($sortFlag == 'desc'){
   			$temp_array = array_reverse($temp_array,TRUE);
   		}
   		foreach(array_keys($temp_array) as $key){
   			$return_array[] = $array[$key]; 
   		}
   		return $return_array;
   	}
   	
   	
}

?>
