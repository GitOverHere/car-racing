<?php

class Token{

	public static function make($string){
		return Session::set(Config::get(session.session_name,hash('SHA-256',uniqid())));
	}

	public static function check($token){
		$tokenname= Config::get(session.token_name);
		if (Session::exists($tokenName) && $token === Session::get($tokenName))
			 {
					 Session::delete($tokenName);
					 return true;
			 }
			 return false;
	 }

}


?>
