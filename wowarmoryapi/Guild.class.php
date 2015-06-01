<?php

class Guild {
	
	private $name;
	private $region;
	private $realm;
	private $guildData;
	private $fields = array('members','achievements');
	private $cache;
	private $emblemAdd = FALSE;
	private $emblemHideRing = FALSE;
	private $perks;
	private $guildRankTitles;
	
   	function __construct($region, $realm, $name) {
   		$this->region = strtolower($region);
   		$this->realm = $realm;
   		$this->name = $name;
		$jsonConnect = new jsonConnect();
		$this->guildData = $jsonConnect->getGuild($name, $realm, $region, implode(",",$this->fields));
		if ($this->isValid()){
			$this->perks = new Perks($region,$this->guildData['level']);
			$this->setThumbnails();
		}
		#print_r($this->guildData);
   	}
   	
   	private function setThumbnails(){
   		$members = $this->guildData['members'];
   		foreach ($members as $key => $member){
   			$this->guildData['members'][$key]['character']['thumbnailURL'] = 'http://' .$this->region. '.battle.net/static-render/' .$this->region. '/' . $member['character']['thumbnail']; 
   		}
   	}

   	/**
   	 * Get the guild perks achieved
   	 * @return Returns an array with the next perk possible, returns FALSE if there are no more.
   	 */
   	public function getNextPerk(){
   		return $this->perks->getNextPerk();
   	}
   	
   	/**
   	 * Get the guild perks achieved
   	 * @return Returns an array with the perks achieved, returns FALSE if there are none.
   	 */
   	public function getPerks(){
   		return $this->perks->getPerks();
   	}
   	
   	public function setEmblemHideRing($value){
   		$this->emblemHideRing = $value;
   	}
   	
   	/**
   	 * Test if guild is valid and loaded.
   	 * @return Returns TRUE if valid, else FALSE
   	 */
   	public function isValid(){
   		return $this->testGuild();
   	}
   	
   	/**
   	 * Test if guild is valid and loaded.
   	 * @return Returns TRUE if valid, else FALSE
   	 */
   	public function testGuild(){
   		if (!$this->guildData){
   			return FALSE;
   		}
   		return TRUE;
   	}
   	
   	/**
   	 * Extract all guild data
   	 * @return A large array with all raw information
   	 */
	public function getData() {
   		return $this->guildData;
   	}
   	
   	/**
   	 * Get a list of the completed achievements by the guild
   	 * @param String $sort Define what the list should be sorted by: timestamp|id|name
   	 * @param String $sortFlag Can be asc|desc
   	 */
   	public function getAchievements($sort=FALSE,$sortFlag='asc'){
   		$achievements['achievementsCompleted'] = $this->guildData['achievements']['achievementsCompleted'];
   		$achievements['achievementsCompletedTimestamp'] = $this->guildData['achievements']['achievementsCompletedTimestamp'];
   		$id_list = '';
   		for ($i = 0; $i < count($achievements['achievementsCompleted']); $i++){
   			// Build the new array to return
   			$achievement[$i]['id']=$achievements['achievementsCompleted'][$i];
   			$achievement[$i]['timestamp']=$achievements['achievementsCompletedTimestamp'][$i];
   			$achievement[$i]['url'] = $GLOBALS['wowarmory']['urls']['achievement']."=".$achievements['achievementsCompleted'][$i];

   			// Get name of achievement
   			#$achievement[$i]['name'] = $wowhead->getData($achievement[$i]['url'], 'name');
   			$achievement[$i]['url'] .= "&who=".$this->name."&when=".$achievement[$i]['timestamp'];
   			$id_list .= $achievement[$i]['id'].',';
   		}
   		$id_list = substr($id_list, 0,-1);
   		$achievementdata = new Achievements($id_list,'guild',$this->region);
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
   	 * Retrieve all members of the guild with some basic information - Achievement points are currently broken from battle net, so use getCharacter() if you need achievement points
   	 * @param $sort String Define what the list should be sorted by: name|class|race|gender|level|rank
   	 * @param $sortFlag String Can be asc|desc
   	 */
   	public function getMembers($sort=FALSE,$sortFlag='asc'){
   		$members = $this->guildData['members'];
   		if ($sort){
			$members = $this->sort($this->guildData['members'], $sort, $sortFlag);
   		}
   		if (isset($this->guildRankTitles)){
   			foreach ($members as $key=>$member){
   				$members[$key]['rankname'] = $this->guildRankTitles[$member['rank']];
   			}
   		}
   		return $members;
   	}
   	
	/**
	 * Set the mapping of guild rank (numeric) to guild rank title (string)
	 * @param Array $guildRankTitles An array containing the textual description of each guild rank using array key as rank id and value as rank name, and it will add a rankname when you get guild members.
	 * @return void
	 */
	public function setGuildRankTitles($guildRankTitles){
	    if(is_array($guildRankTitles))
	    $this->guildRankTitles = $guildRankTitles;
	}
   	
   	private function sort($array,$sortkey,$sortFlag){
   		$arraysize = count($array);
   		foreach(array_keys($array) as $key){
   			if ($sortkey == 'rank'){
   				$temp_array[$key] = $array[$key][$sortkey];
   			}else{
   				$temp_array[$key] = $array[$key]['character'][$sortkey];
   			}
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
   	
   	/**
   	 * Generated and display an guild emblem image/png
   	 * @param Integer $width Width of the emblem - max size is 215
   	 */
   	public function showEmblem($showlevel=TRUE, $width=215){
		$finalimg = $this->createEmblem($showlevel,$width);
   		if (!$GLOBALS['wowarmory']['debug']['emblem']){
			header('Content-Type: image/png');
			imagepng($finalimg);
   		}		
		imagedestroy($finalimg);
   	}
   	
  	public function deleteEmblem(){
  	       if (!$this->emblemAdd) {
            $imgfile = dirname(__FILE__) . "/cache/" . $this->region . '_' . $this->realm . '_' . $this->name . ".png";
        } else {
            $imgfile = dirname(__FILE__) . "/cache/" . $this->region . '_' . $this->realm . '_' . $this->name . '_' . $this->emblemAdd . ".png";
        }
        if (is_file($imgfile)) {
            unlink($imgfile);
            return TRUE;
        }
        return FALSE;
    }
   	
    /**
     * Trows exception.
     * Copy the cache file to the destination.
     * @author magic-mouse
     * @param String $dest The destination folder of the file.
     */
    public function saveEmblem($dest) {
        if (!$this->emblemAdd) {
            $imgfile = dirname(__FILE__) . "/cache/" . $this->region . '_' . $this->realm . '_' . $this->name . ".png";
        } else {
            $imgfile = dirname(__FILE__) . "/cache/" . $this->region . '_' . $this->realm . '_' . $this->name . '_' . $this->emblemAdd . ".png";
        }
        if (!copy($imgfile, $dest)) {
            throw new Exception("Could Not be copied");
        }
    }
   	
    
    /**
     * Used for adding a string in the guild emblem file name. Useless for most people except me ;)
     * @param String $text Value you eant added to file name
     */
   	public function setEmblemFileAdd($text){
   		$this->emblemAdd = $text;
   	}
   	
   	private function createEmblem($showlevel=TRUE, $width=215){
   		if (!$this->emblemAdd){
   			$imgfile = dirname(__FILE__)."/cache/".$this->region.'_'.$this->realm.'_'.$this->name.".png";
   		} else {
   			$imgfile = dirname(__FILE__)."/cache/".$this->region.'_'.$this->realm.'_'.$this->name.'_'.$this->emblemAdd.".png";
   		}
   		#$imgfile = dirname(__FILE__)."/cache/".$this->region.$this->realm.$this->name.".png";
   		#print $imgfile;
   		if (file_exists($imgfile) AND $width==(imagesx(imagecreatefrompng($imgfile))) AND (filemtime($imgfile)+86000) > time()) {
   			$finalimg = imagecreatefrompng($imgfile);
			imagesavealpha($finalimg,true);
			imagealphablending($finalimg, true);
   		} else {
	   		if ($width > 1 AND $width < 215){
				$height = ($width/215)*230;
				$finalimg = imagecreatetruecolor($width, $height);
				$trans_colour = imagecolorallocatealpha($finalimg, 0, 0, 0, 127);
				imagefill($finalimg, 0, 0, $trans_colour);
				imagesavealpha($finalimg,true);
				imagealphablending($finalimg, true);
	   		}
			
	   		if ($this->guildData['side'] == 0){
	   			$ring = 'alliance';
	   		} else {
	   			$ring = 'horde';
	   		}
	   		
			$imgOut = imagecreatetruecolor(215, 230);
			
			$emblemURL = dirname(__FILE__)."/img/emblems/emblem_".sprintf("%02s",$this->guildData['emblem']['icon']).".png";
			$borderURL = dirname(__FILE__)."/img/borders/border_".sprintf("%02s",$this->guildData['emblem']['border']).".png";
			$ringURL = dirname(__FILE__)."/img/static/ring-".$ring.".png";
			$shadowURL = dirname(__FILE__)."/img/static/shadow_00.png";
			$bgURL = dirname(__FILE__)."/img/static/bg_00.png";
			$overlayURL = dirname(__FILE__)."/img/static/overlay_00.png";
			$hooksURL = dirname(__FILE__)."/img/static/hooks.png";
			$levelURL = dirname(__FILE__)."/img/static/";
			
			imagesavealpha($imgOut,true);
			imagealphablending($imgOut, true);
			$trans_colour = imagecolorallocatealpha($imgOut, 0, 0, 0, 127);
			imagefill($imgOut, 0, 0, $trans_colour);
			
			$ring = imagecreatefrompng($ringURL);
			$ring_size = getimagesize($ringURL);
			
			$emblem = imagecreatefrompng($emblemURL);
			$emblem_size = getimagesize($emblemURL);
			imagelayereffect($emblem, IMG_EFFECT_OVERLAY);
			$emblemcolor = preg_replace('/^ff/i','',$this->guildData['emblem']['iconColor']);
			$color_r = hexdec(substr($emblemcolor,0,2));
			$color_g = hexdec(substr($emblemcolor,2,2));
			$color_b = hexdec(substr($emblemcolor,4,2));
			imagefilledrectangle($emblem,0,0,$emblem_size[0],$emblem_size[1],imagecolorallocatealpha($emblem, $color_r, $color_g, $color_b,0));
			
			
			$border = imagecreatefrompng($borderURL);
			$border_size = getimagesize($borderURL);
			imagelayereffect($border, IMG_EFFECT_OVERLAY);
			$bordercolor = preg_replace('/^ff/i','',$this->guildData['emblem']['borderColor']);
			$color_r = hexdec(substr($bordercolor,0,2));
			$color_g = hexdec(substr($bordercolor,2,2));
			$color_b = hexdec(substr($bordercolor,4,2));
			imagefilledrectangle($border,0,0,$border_size[0]+100,$border_size[0]+100,imagecolorallocatealpha($border, $color_r, $color_g, $color_b,0));
			
			$shadow = imagecreatefrompng($shadowURL);
			
			$bg = imagecreatefrompng($bgURL);
			$bg_size = getimagesize($bgURL);
			imagelayereffect($bg, IMG_EFFECT_OVERLAY);
			$bgcolor = preg_replace('/^ff/i','',$this->guildData['emblem']['backgroundColor']);
			$color_r = hexdec(substr($bgcolor,0,2));
			$color_g = hexdec(substr($bgcolor,2,2));
			$color_b = hexdec(substr($bgcolor,4,2));
			imagefilledrectangle($bg,0,0,$bg_size[0]+100,$bg_size[0]+100,imagecolorallocatealpha($bg, $color_r, $color_g, $color_b,0));
			
			
			$overlay = imagecreatefrompng($overlayURL);
			$hooks = imagecreatefrompng($hooksURL);
			
			$x = 20;
			$y = 23;
			
			if (!$this->emblemHideRing){
				imagecopy($imgOut,$ring,0,0,0,0, $ring_size[0],$ring_size[1]);
			}
			$size = getimagesize($shadowURL);
			imagecopy($imgOut,$shadow,$x,$y,0,0, $size[0],$size[1]);
			imagecopy($imgOut,$bg,$x,$y,0,0, $bg_size[0],$bg_size[1]);
			imagecopy($imgOut,$emblem,$x+17,$y+30,0,0, $emblem_size[0],$emblem_size[1]);
			imagecopy($imgOut,$border,$x+13,$y+15,0,0, $border_size[0],$border_size[1]);
			$size = getimagesize($overlayURL);
			imagecopy($imgOut,$overlay,$x,$y+2,0,0, $size[0],$size[1]);
			$size = getimagesize($hooksURL);
			imagecopy($imgOut,$hooks,$x-2,$y,0,0, $size[0],$size[1]);
			
			if ($showlevel){
				$level = $this->guildData['level'];
				if ($level < 10){
					$levelIMG = imagecreatefrompng($levelURL.$level.".png");
				} else {
					$digit[1] = substr($level,0,1);
					$digit[2] = substr($level,1,1);
					$digit1 = imagecreatefrompng($levelURL.$digit[1].".png");
					$digit2 = imagecreatefrompng($levelURL.$digit[2].".png");
					$digitwidth = imagesx($digit1);
					$digitheight = imagesy($digit1);
					$levelIMG = imagecreatetruecolor($digitwidth*2,$digitheight);
					$trans_colour = imagecolorallocatealpha($levelIMG, 0, 0, 0, 127);
					imagefill($levelIMG, 0, 0, $trans_colour);
					imagesavealpha($levelIMG,true);
					imagealphablending($levelIMG, true);
					// Last image added first because of the shadow need to be behind first digit
					imagecopy($levelIMG,$digit2,$digitwidth-12,0,0,0, $digitwidth, $digitheight);
					imagecopy($levelIMG,$digit1,12,0,0,0, $digitwidth, $digitheight);
				}
				$size[0] = imagesx($levelIMG);
				$size[1] = imagesy($levelIMG);
				$levelemblem = imagecreatefrompng($ringURL);
				imagesavealpha($levelemblem,true);
				imagealphablending($levelemblem, true);
				imagecopy($levelemblem,$levelIMG,(215/2)-($size[0]/2),(215/2)-($size[1]/2),0,0,$size[0],$size[1]);
				imagecopyresampled($imgOut, $levelemblem, 143, 150,0,0, 215/3, 215/3, 215, 215);
			}
			
			if ($width > 1 AND $width < 215){
				imagecopyresampled($finalimg, $imgOut, 0, 0, 0, 0, $width, $height, 215, 230);
			} else {
				$finalimg = $imgOut;
			}
			imagepng($finalimg,$imgfile);
   		}
   		return $finalimg;
   	}
}


?>
