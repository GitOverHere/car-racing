<?php

class Session {
	
	public function __construct() {
		
		
	}



	public function set($name,$value){
		return $_SESSION[$name]=$value;
	}

	public static function exists($name){
		return isset($_SESSION[$name]) ? true : false;

	}

	public static function get($name){

		return $_SESSION[$name];
	}

	public function remove($name){
		unset($_SESSION[$name]);
	}

	public function flash($name, $string = ''){
		if(self::exists($name)){
			$var= $_SESSION[$name];
			self::remove($name);
			return $var;
		}
		else
		{
			echo 'ERROR: Session Variable does not exist.';
		}
	}

public static function destroy(){
	session_destroy();
}




}

?>
