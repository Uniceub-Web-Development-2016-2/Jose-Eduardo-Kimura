<?php

class User{
	private $idUser;
	private $strName;
	private $strEmail;
	private $strLogin;
	private $strPass;
	private $boolCoordinator;
	private $boolAdmin;

	function __construct($idUser,$strName, $strEmail, $strLogin, $strPass, $boolCoordinator, $boolAdmin){
		$this->idUser = $idUser;
		$this->strName = $strName;
		$this->strEmail = $strEmail;
		$this->strLogin = $strLogin;
		$this->strPass = $strPass;
		$this->boolCoordinator = $boolCoordinator;
		$this->boolAdmin = $boolAdmin;
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