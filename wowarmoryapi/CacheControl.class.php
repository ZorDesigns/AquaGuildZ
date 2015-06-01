<?php

class CacheControl {
	
	private $db;
	private $CharactersTTL = 600;
	private $GuildsTTL = 600;
	private $WowHeadTTL = 86000;
	private $AuctionHouseTTL = 6000;
	private $ItemsTTL = 86000;
	private $AchievementsTTL = 100600;
	private $ArenaTeamsTTL = 6000;
	private $tables = array('Characters','Guilds','WowHead','Items','AuctionHouse','Achievements','ArenaTeams','Races','Classes','Perks','Quests');
	private $tblpre = 'wa_';
	
	
   	function __construct() {
		$this->GuildsTTL 		= $GLOBALS['wowarmory']['GuildsTTL'];
		$this->CharactersTTL 	= $GLOBALS['wowarmory']['CharactersTTL'];
		$this->WowHeadTTL 		= $GLOBALS['wowarmory']['WowHeadTTL'];
		$this->AuctionHouseTTL 	= $GLOBALS['wowarmory']['AuctionHouseTTL'];
		$this->ItemsTTL 		= $GLOBALS['wowarmory']['ItemsTTL'];
		$this->AchievementsTTL	= $GLOBALS['wowarmory']['AchievementsTTL'];
		$this->ArenaTeamsTTL	= $GLOBALS['wowarmory']['ArenaTeamsTTL'];
		$this->RacesTTL			= $GLOBALS['wowarmory']['RacesTTL'];
		$this->ClassesTTL		= $GLOBALS['wowarmory']['ClassesTTL'];
		$this->PerksTTL			= $GLOBALS['wowarmory']['PerksTTL'];
		$this->QuestsTTL		= $GLOBALS['wowarmory']['QuestsTTL'];
		$this->openDatabase();
		$this->initTables();
   	}
   	
   	function __destruct() {
   		$this->db = null;
   	}
   	
   	private function achievementInsert($objectID,$dataarray,$table){
   		foreach ($dataarray as $key => $data){
   			if (isset($data['id']) AND isset($data['points'])){
	   			#$sql = "REPLACE INTO ".$this->tblpre.$table." (ObjectID, id, title, description, points,Timestamp)
	   			#VALUES ('$objectID',".$data['id'].",'".$data['title']."','".$data['description']."','".$data['points']."','".time()."')";
	   			$title = $data['title'];
	   			$description = $data['description'];
	   			$sql = "REPLACE INTO ".$this->tblpre.$table." (ObjectID, id, title, description, points,Timestamp)
	   			VALUES ('$objectID',".$data['id'].", :title, :description,'".$data['points']."','".time()."')";
	   			#print $sql."<br />";
	   			$sth = $this->db->prepare($sql);
		   		$sth->bindParam(':title', $title, PDO::PARAM_STR);
		   		$sth->bindParam(':description', $description, PDO::PARAM_STR);
		   		#print "Title: ".$data['title']." Description:".$data['description']."<br />";
		   		$sth->execute();
   			} else if (is_array($data)){
   				$this->achievementInsert($objectID,$data,$table); 
   			}
   		}
   	}
   	
   	public function genericInsert($objectID,$data, $table){
   		$sql = "DELETE FROM ".$this->tblpre.$table." WHERE ObjectID = '".$objectID."'";
   		#print $sql;
   		$this->db->prepare($sql)->execute();
   		
	   	if (preg_match('/^Achievements$/',$table)){
	   		$dataarray = json_decode($data,TRUE);
	   		#var_dump($dataarray);
	   		$this->achievementInsert($objectID,$dataarray,$table);
	   	} else {
	   		$splitdata = $this->dataBreak($data);
	   		foreach ($splitdata as $part => $datapart){
	   			$sql = "REPLACE INTO ".$this->tblpre.$table." (ObjectID,Part,Timestamp,Data) VALUES ('$objectID',".$part.",'".time()."',:data)";
		   		$sth = $this->db->prepare($sql);
		   		$sth->bindParam(':data', $datapart, PDO::PARAM_STR);
		   		$sth->execute();
	   		}
	   	}
   		unset($splitdata);
   	}
   	
   	/**
   	 * Since there is a limit in MySQL on how much data there can be in one row its being split up a bit.
   	 * @param String $data
   	 * @return An array with the data
   	 */
   	private function dataBreak($data){
   		$maxsize = 100000;
   		for ($position = 0; $position < strlen($data); $position += $maxsize){
   			$sub = substr($data, $position, $maxsize);
   			$returndata[] = $sub;
   		}
   		return $returndata; 
   	}
   	
   	public function checkCache($objectID,$table,$fields){
   		$sql = "SELECT Timestamp FROM ".$this->tblpre.$table." WHERE ObjectID = '".$objectID."' LIMIT 1";
		#print $sql."\n";
   		$timestamp = $this->{$table.'TTL'};
   		$sth = $this->db->query($sql);
   		if ($row = $sth->fetch()){
			if ($row['Timestamp']+$timestamp > time()){
				$return = TRUE;
				if (!preg_match('/Achievements/i',$table) AND !preg_match('/Classes/i',$table) AND !preg_match('/Races/i',$table) AND !preg_match('/Perks/i',$table) AND !preg_match('/Quests/i',$table) AND !preg_match('/wowhead/i',$table)){
					$data = $this->getData($objectID, $table);
					$data = json_decode($data,TRUE);
					$fieldsData = explode(',', $fields);
					#print_r($fieldsData);
					foreach ($fieldsData as $field){
						#print "field: $field\n";
						if (!isset($data[$field]) AND !preg_match('/^hunterPets$/',$field) AND !preg_match('/^pets$/',$field) AND !preg_match('/^guild$/',$field)){
							$return = FALSE;
						}
					}
				}
				return $return;
			}
   		}
		return false;
   	}

   	
   	/**
   	 * Get the data from cache.
   	 * @param String $objectID
   	 * @param String $table
   	 */
   	public function getData($objectID,$table,$id_list=FALSE){
   		if (preg_match('/^Achievements$/i', $table)){
   			$data = $this->getAchievementData($id_list);
   			return $data;
   		}
   		$sql = "SELECT Data FROM ".$this->tblpre.$table." WHERE ObjectID = '".$objectID."' ORDER BY Part";
   		if($sth = $this->db->query($sql)) {
   			$returndata = '';
			while ($row = $sth->fetch()){
   				$returndata .= $row['Data'];
			}
   			return $returndata;
		} else {
		  die("Error:" . $sql);
		}
		return false;
   	}

   	/**
   	 * Get the data from cache.
   	 * @param String $objectID
   	 * @param String $table
   	 */
   	public function getAchievementData($id_list){
   		$query = "SELECT * FROM ".$this->tblpre."Achievements WHERE id in ($id_list)";
   		if($sth = $this->db->query($query)) {
   			$row = $sth->fetchAll(PDO::FETCH_ASSOC);
   			return $row;
		} else {
		  die("Error:" . $query);
		}
		return false;
   	}
   	
   	
   	private function openDatabase(){
   		$this->db = new SafePDO();
   	}
   	
   	private function initTables(){
   		foreach ($this->tables as $tablename){
	   		$this->createTable($tablename);
   		}
   	}
   	
   	private function createTable($tablename){
   		if (preg_match('/^Achievements$/',$tablename)){
   			$tablename = $this->tblpre.$tablename;
   			$statement = "CREATE TABLE IF NOT EXISTS $tablename (
					  `id` int(11) NOT NULL,
					  `ObjectID` varchar(50) NOT NULL,
					  `description` varchar(250) NOT NULL,
					  `title` varchar(75) NOT NULL,
					  `points` int(11) NOT NULL,
					  `Timestamp` varchar(75) NOT NULL,
					  PRIMARY KEY (`id`)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
   		} else {
   			$tablename = $this->tblpre.$tablename;
   			$statement = "CREATE TABLE IF NOT EXISTS $tablename (
					  `ObjectID` varchar(50) NOT NULL,
					  `Data` longblob NOT NULL,
					  `Part` int(11) NOT NULL,
					  `Timestamp` varchar(75) NOT NULL,
					  PRIMARY KEY (`ObjectID`,`Part`)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
   		}
   		$sth = $this->db->prepare($statement);
   		$sth->execute();
   	}
}



?>
