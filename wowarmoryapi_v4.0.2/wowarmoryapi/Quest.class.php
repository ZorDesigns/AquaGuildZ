<?php

class Quest {
	
	private $datas;

   	function __construct($region,$id) {
   		$jsonConnect = new jsonConnect();
   		$this->datas = $jsonConnect->getQuest($region,$id);
   		$jsonConnect = null;
   	}

   	public function getTitle(){
   		return $this->datas['title'];
   	}
   	
   	public function getData(){
   		return $this->datas;
	}
}
?>