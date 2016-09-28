<?php
	
class Tag{
	
	private $idTag;
	private $strValue;
	private $idParentTag;
	
	
	function __construct($strValue, $idParentTag){
		$this->strValue = $strValue;
		$this->idParentTag = $idParentTag;
	}
	
	public function __get($property){
		if (property_exists($this, $property)) {
	      return $this->$property;
	    }
	}

	public function __set($property, $value) {
	    if (property_exists($this, $property)) {
	      $this->$property = $value;
	    }
	}
	
}