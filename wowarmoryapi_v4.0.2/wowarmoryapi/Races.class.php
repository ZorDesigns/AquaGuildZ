<?php
class Races {
	
	private $datas;

   	function __construct($region) {
   		$jsonConnect = new jsonConnect();
   		$data = $jsonConnect->getRaces($region);
   		$count = count($data['races']);
   		for ($i=0; $i < $count; $i++){
   			$this->datas[$data['races'][$i]['id']] = $data['races'][$i]; 
   		}
   		$data = null;
   	}

   	public function getRace($id,$field){
   		return $this->datas[$id][$field];
   	}
}
?>