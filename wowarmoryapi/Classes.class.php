<?php

class Classes {
	
	private $datas;

   	function __construct($region) {
   		$jsonConnect = new jsonConnect();
   		$data = $jsonConnect->getClasses($region);
   		$count = count($data['classes']);
   		for ($i=0; $i < $count; $i++){
   			$this->datas[$data['classes'][$i]['id']] = $data['classes'][$i]; 
   		}
   		$data = null;
   		$jsonConnect = null;
   	}

   	public function getClass($id,$field){
   		return $this->datas[$id][$field];
   	}
}
?>