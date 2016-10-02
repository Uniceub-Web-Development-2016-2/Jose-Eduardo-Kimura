<?php

class PDOMysql extends PDO{

	private $engine;
	private $host;
	private $db;
	private $user;
	private $pass;
	private $conn;

	public function __construct(){
		$ini = parse_ini_file('../../config/db_config.ini');

		$this->engine = 'mysql';
		$this->host = $ini['db_host'];
		$this->db = $ini['db_name'];
		$this->user = $ini['db_user'];
		$this->pass = $ini['db_pass'];

		$dns = $this->engine.':dbname='.$this->db.";host=".$this->host;

		parent::__construct($dns, $this->user, $this->pass);

	}

}
