<?php

class Connection{
	
		private $hote;
		private $bd;
		private $charset;
		private $user;
		private $password;

		
	public function __construct($hote, $bd, $charset, $user, $password){
		$this->hote=$hote;
		$this->bd= $bd;
		$this->charset=$charset;
		$this->user=$user;
		$this->password=$password;
	}
	
	public function dbconnect(){
	  try{
			return new PDO('mysql:host='.$this->hote.';dbname='.$this->bd.';charset='.$this->charset, $this->user, $this->password);
		} catch(Exception $e){
			print_r($e);
		}
		
	}
	

	
}

?>