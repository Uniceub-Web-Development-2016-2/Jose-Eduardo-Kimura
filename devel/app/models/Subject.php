<?php

class Subject{
	
	private $idSubject;
	private $discipline;
	private $parent;

	function __construct($discipline, $parent){
		$this->discipline = $discipline;
		$this->parent = $parent;
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