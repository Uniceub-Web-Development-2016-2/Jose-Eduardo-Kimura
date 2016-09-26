<?php

	class URLRequest{
		
		private $protocol;
		private $server_ip;
		private $resource_path;
		private $params_arr;
		private $method;

		public function __construct($protocol, $server_ip, $resource_path, $params_arr, $method){
			$this->protocol = $protocol;
			$this->server_ip = $server_ip;
			$this->resource_path = $resource_path;
			$this->params_arr = $params_arr;
			$this->method = $method;
		}

		public function toString(){
			$request = $this->protocol."://".$this->server_ip."/".$this->resource_path."/";
			foreach($this->params_arr as $key => $param){
				$request .= $key."=".$param;
				if($param != end($this->params_arr))
					$request .= "&amp";
			}
			return utf8_encode($request);
		}
		
		public function getProtocol(){
			return $this->protocol;
		}
		public function setProtocol($protocol){
			$this->protocol = $protocol;
		}
		public function getServerIP(){
			return $this->server_ip;
		}
		public function setServerIP($server_ip){
			$this->server_ip = $server_ip;
		}
		public function getResourcePath(){
			return $this->resource_path;
		}
		public function setResourcePath($resource_path){
			$this->resource_path = $resource_path;
		}
		public function getParamsArr(){
			return $this->params_arr;
		}
		public function setParamsArr($params_arr){
			$this->params_arr = $params_arr;
		}
		public function getMethod(){
			return $this->method;
		}
		public function setMethod($method){
			$this->method = $method;
		}

		
	}

$request = new URLRequest("http","127.0.0.1","resource/subresource",array("param1"=>123,"param2"=>456),"POST");
echo $request->toString();
