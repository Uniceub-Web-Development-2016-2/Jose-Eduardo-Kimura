<?php

class StudentClass{

	private $idStudentClass;
	private $strDescription;
	private $intPeriod;

	function __construct($idStudentClass, $strDescription, $intPeriod){
		$this->idStudentClass = $idStudentClass;
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