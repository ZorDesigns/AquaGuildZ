<?php

class Realms {
	
	private $region;
	private $realm;
	private $realmData;
	private $cache;
	
	
   	function __construct($region) {
   		$this->region = strtolower($region);
		$jsonConnect = new jsonConnect();
		$this->realmData = $jsonConnect->getRealms($this->region);
   	}
   	
   	/**
   	 * Get the realm status
   	 * @param String $realmname The realm you want an status on, eg 'Defias Brotherhood'
   	 * @return Return and array with one or all realms - else FALSE if the specified realm cannot be found 
   	 */
   	public function getRealm($realmname=FALSE){
   		$realms = $this->realmData['realms'];
   		if (strlen($realmname)>1){
   			foreach ($realms as $realm){
   				if (strtolower($realm['name']) === strtolower($realmname)){
   					return $realm;
   				}
   			}
   		} else {
   			return $realms;
   		}
   		
   		return false;
   	}
   	
   	private function filter($filterData,$filterField,$filterValue){
   		foreach ($filterData as $data){
   			if ($data[$filterField] === $filterValue){
   				$returndata[] = $data;
   			}
   		}
   		if (isset($returndata)){
   			return $returndata;
   		} else {
   			return FALSE;
   		}
   	}
   	
   	public function getData(){
   		return $this->auctionHouseData;
   	}
   	
   	
}

?>