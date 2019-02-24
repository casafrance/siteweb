<?php

class Connection{
	
		private $hote;
		private $bd;
		private $charset;
		private $user;
		private $password;
		private static $connection = null;
		
	private function __construct($hote, $bd, $charset, $user, $password){
		$this->hote=$hote;
		$this->bd= $bd;
		$this->charset=$charset;
		$this->user=$user;
		$this->password=$password;
	}
	
// 	public function dbconnect(){
// 		return new PDO('mysql:host='.$this->hote.';dbname='.$this->bd.';charset='.$this->charset, $this->user, $this->password);
// 	}
	
	
	public static function getInstance($hote, $bd, $charset, $user, $password) {
	
		if(is_null(self::$connection)) {
			self::$connection =  new PDO('mysql:host='.$hote.';dbname='.$bd.';charset='.$charset, $user, $password);
		}
	
		return self::$connection;
	}
	
}

?>