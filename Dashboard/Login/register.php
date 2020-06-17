<?php
require_once 'core/init.php';

$query= new User();

$c= new Check();

	$username= Input::get('username');
	$password= Hasher::make(Input::get('password'));
	$email= Input::get('email');
	$full_name = Input::get('full_name');
	
if($c->register()){
	try{
	$query->makeUser(array('username','password','email','full_name'),array("{$username}","{$password}","{$email}","{$full_name}"));
	 $session = new Session();
    $session->set('logged_in',true);
  $session->set('email',Input::get('email'));
	$session= new Session();
	$session->set('logged_in',true);
	$session->set('email',$email);
	$session->set('username',$username);
	$session->set('id',$query->get_id($email));

	header( "url=../../" );
	}
	catch(\PDOException $e){
		echo 'There was a problem creating your account';
		switch($e){
		case '23000':
		 echo 'A person with that email already exists.';
		
	}
		 
	}
}

?>
