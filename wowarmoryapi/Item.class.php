<?php

class Item {
	
	private $itemData;
	private $statID;
	private $cache;
	private $iconbaseURL = '.media.blizzard.com/wow/icons/';
	private $region;
	private $name;
	private $icon_extension = '.jpg';
	private $icon;
	
   	function __construct($region, $itemID) {
   		$this->region = $region;
		$jsonConnect = new jsonConnect();
		$this->itemData = $jsonConnect->getItem($itemID, $region);
   		$this->name = $this->itemData['name'];
   		$this->icon = $this->itemData['icon'].$this->icon_extension;
   	}
   	
   	/**
   	 * Get all data
   	 */
   	public function getData(){
   		return $this->itemData;
   	}
   	
   	/**
   	 * Get the name of the item
   	 * @return the name of the item
   	 */
   	public function getName(){
   		return $this->name;
   	}
   	
   	/**
   	 * Get the icon URL for the current item.
   	 * @param Integer $size The size of the icon, valid values are 18 | 36 | 56
   	 * @return A string with the icon URL
   	 */
   	public function getIcon($size=56){
   		$url = strtolower('http://'.$this->region.$this->iconbaseURL.$size.'/'.$this->icon);
   		return $url;
   	}
   	
   	/**
   	 * Get the icon <img> tag, with nice blizz like frames
   	 * @param Integer $size The size of the icon, valid values are 18 | 36 | 56
   	 * @param String $browser The broser that the frame should be optimized for - can be 'ie' or 'moz' 
   	 * @return A string with the icon IMG tag
   	 */
   	public function getIconIMGtag($size=56,$browser='ie'){
   		$browser = strtolower($browser);
   		$url = $this->getIcon($size);
   		$style_moz = '-moz-border-bottom-colors: none;
				    -moz-border-image: none;
				    -moz-border-left-colors: none;
				    -moz-border-right-colors: none;
				    -moz-border-top-colors: none;
				    background-color: #000000;
				    background-position: 1px 1px;
				    background-repeat: no-repeat;
				    border-color: #B1B2B4 #434445 #2F3032;
				    border-radius: 3px 3px 3px 3px;
				    border-style: solid;
				    border-width: 1px;
				    display: inline-block;
				    overflow: hidden;
				    padding: 1px;';
   		
   		$style_ie = 'overflow: hidden;
					padding-top: 1px;
					padding-right: 1px;
					padding-bottom: 1px;
					padding-left: 1px;
					border-top-color: #b1b2b4;
					border-right-color: #434445;
					border-bottom-color: #2f3032;
					border-left-color: #434445;
					border-top-width: 1px;
					border-right-width: 1px;
					border-bottom-width: 1px;
					border-left-width: 1px;
					border-top-style: solid;
					border-right-style: solid;
					border-bottom-style: solid;
					border-left-style: solid;
					display: inline-block;
					border-top-left-radius: 3px;
					border-top-right-radius: 3px;
					border-bottom-right-radius: 3px;
					border-bottom-left-radius: 3px;
					background-repeat: no-repeat;
					background-position-x: 1px;
					background-position-y: 1px;
					background-color: rgb(0, 0, 0);
					outline-width: 0px;
					outline-style: none;
					outline-color: invert;';
   		
   		$html = '<span style="' . ${'style_'.$browser} . '"><img src="' . $url . '" /></span>';
   		return $html;
   	}

   	
}

?>