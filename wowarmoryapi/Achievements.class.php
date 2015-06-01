<?php

class Achievements {
	
	private $data;
	private $datas;

   	function __construct($id_list,$type,$region) {
   		$jsonConnect = new jsonConnect();
   		$this->data = $jsonConnect->getAchievements($region,$id_list,$type);
   		$count = count($this->data);
   		for ($i=0; $i < $count; $i++){
   			$this->datas[$this->data[$i]['id']] = $this->data[$i]; 
   		}
   		#print_r($this->datas);
   	}

   	public function getAchievement($id,$field){
   		return $this->datas[$id][$field];
   	}
}
?>