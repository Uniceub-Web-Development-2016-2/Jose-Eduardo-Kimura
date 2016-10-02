<?php

include_once ('../models/request.php');
include_once ('../models/PDOMysql.php');

class ResourceController
{
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];

	public function treat_request($request) {
		return $this->{$this->METHODMAP[$request->getMethod()]}($request);

	}

	private function search($request) {

    if(!empty($request->getParameters())){
		  $query = 'SELECT * FROM '.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
    } else {
      $query = 'SELECT * FROM '.$request->getResource();
    }

    $pdo = new PDOMysql();

    $result = $pdo->query($query);

    if(is_null($result) or $result == false){
      echo 'Result is null';
      die();
    }

		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	private function queryParams($params) {
		$query = "";
		foreach($params as $key => $value) {
			$query .= $key.' = '.$value.' AND ';
		}
		$query = substr($query,0,-5);
		return $query;
	}


}
