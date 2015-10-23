<?php
class ArenaTeam {
	
	private $region, $realm, $teamsize, $teamname;
	private $data;
	private $fields = '';

	
   	function __construct($region, $realm, $teamsize, $teamname) {
   		$this->region = $region;
   		$this->realm = $realm;
   		$this->size = $teamsize;
   		$this->teamname = $teamname;
		$jsonConnect = new jsonConnect();
		$this->data = $jsonConnect->getArenaTeam($region, $realm, $teamsize, $teamname, $this->fields);
		$this->teamname = $this->data['name'];
   	}
   	
   	/**
   	 * Get the team creation date
   	 * @return Returns a date
   	 */
   	public function getCreated(){
   		return $this->data['created'];
   	}
   	
   	/**
   	 * Get the number of games won.
   	 * @return Returns an integer
   	 */
   	public function getGamesWon(){
   		return $this->data['gamesWon'];
   	}
   	
   	/**
   	 * Get the number of games lost.
   	 * @return Returns an integer
   	 */
   	public function getGamesLost(){
   		return $this->data['gamesLost'];
   	}
   	
   	/**
   	 * Get the number of games played.
   	 * @return Returns an integer
   	 */
   	public function getGamesPlayed(){
   		return $this->data['gamesPlayed'];
   	}
   	
   	/**
   	 * Returns the team name
   	 * @return Returns a string with team name
   	 */
   	public function getName(){
   		return $this->teamname;
   	}
   	
   	/**
   	 * Get what side the team is fighting for - Alliance or Horde.
   	 * @return Returns a string
   	 */
   	public function getSide(){
   		return $this->data['side'];
   	}
   	
   	/**
   	 * Get all team members
   	 * @return Returns an array with all team members
   	 */
   	public function getAllMembers(){
   		return $this->data['members'];
   	}
   	
   	/**
   	 * Get team stats on specific member searched by name
   	 * @param String $membername
   	 * @return Returns an array with team stats for that character, or FALSE if none found
   	 */
   	public function getMember($membername){
   		$members = $this->data['members'];
   		foreach ($members as $key => $member){
   			if (preg_match('/^'.$membername.'$/i',$member['character']['name'])){
   				return $members[$key];
   			}
   		}
   		return FALSE;
   	}
   	
   	public function getData(){
   		return $this->data;
   	}
}
?>