<?php

class Student{

	private $idStudent;
	private $studentClass;
	private $strName;
	private $strStudentID;

	function __construct($idStudent, $studentClass, $strName, $strStudentID){
		$this->idStudent = $idStudent;
		$this->studentClass = $studentClass;
		$this->strName = $strName;
		$this->strStudentID = $strStudentID;
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