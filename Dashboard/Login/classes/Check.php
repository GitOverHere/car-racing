<?php
class Check {

private	$errors= array(),
	$db= null;


	public static $special_chars = array('!','@','#','$','5','6','&','*','(',')',')');
	public static $numbers = array(1,2,3,4,5,6,7,8,9,0,'1','2','3','4','5','6','7','8','9','0');


	public function addError($error){
		echo $error;

		$this->errors[]=$error;


	}

	public function passed(){
		if(count($this->errors)==0){
		return true;
	}
		else{
			return false;
		}

		}

	public function email($string){
		 $v = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
    if(!preg_match($v, $string)){
			$this->addError("Email is invalid!");
		}
		else{
			return true;
		}
	}

	public function field($name,$string,$bad_chars=array(),$min,$max) {
		if(strlen($string)>$min && strlen($string)<$max ){

			for($x=0;$x<strlen($string);$x++){
				if(in_array(substr($string,$x),$bad_chars)){
					addError("$name cannot have characters $bad_chars");
					break;
				}

			}
			return true;
		}

		else{
			$this->addError("$name must be between $min and $max "."there are ".strlen($string));
			return false;

		}
}

public function login(){
Check::email(Input::get('email'));
Check::field('password',Input::get('password'),array(),1,500);
return Check::passed() ? true : false;
}

public function register(){


return Check::passed() ? true : false;
}

public static function Cookie(){



}

}

?>