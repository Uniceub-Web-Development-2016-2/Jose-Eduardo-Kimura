<?php

class Discipline{

	private $idDiscipline;
	private $strDescription;
	private $intPeriod;

	function __construct($strDescription, $intPeriod){
		$this->strDescription = $strDescription;
		$this->intPeriod = $intPeriod;
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