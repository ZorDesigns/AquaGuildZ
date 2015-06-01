<?php

class AuctionHouse {
	
	private $region;
	private $realm;
	private $auctionHouseData;
	private $cache;
	
	
   	function __construct($region, $realm) {
   		$this->region = strtolower($region);
   		$this->realm = $realm;
		$jsonConnect = new jsonConnect();
		$this->auctionHouseData = $jsonConnect->getAuctionHouse($this->realm, $this->region);
   	}
   	
   	
   	/**
   	 * Find auctions based on sellers name
   	 * @param Integer $sellername The name of the seller
   	 * @param Integer $faction Faction to search in - Can be alliance | horde | neutral
   	 * @return Return an array with actions if any, else returns FALSE
   	 */
   	public function getAuctionsBySeller($sellername,$faction){
   		$auctions = $this->filter($this->auctionHouseData[$faction]['auctions'],'owner',$sellername);
   		return $auctions;
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