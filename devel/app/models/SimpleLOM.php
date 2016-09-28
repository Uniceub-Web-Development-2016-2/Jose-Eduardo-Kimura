<?php
class SimpleLOM{
	
	private $idLom;
	private $strLomTitle;
	private $strURL;
	private $strCatalog;
	private $strCatalogEntry;
	private $intDifficultLevel;
	
	
	function __construct($strLomTitle, $strURL, $strCatalog, $strCatalogEntry, $intDifficultLevel){
		$this->strLomTitle = $strLomTitle;
		$this->strURL = $strURL;
		$this->strCatalog = $strCatalog;
		$this->strCatalogEntry = $strCatalogEntry;
		$this->intDifficultLevel = $intDifficultLevel;
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