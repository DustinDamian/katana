<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="azure";$this->pass="6#vWHD_$";$this->host="127.0.0.1";$this->ddbb="localdb";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
