<?php

require_once 'core/init.php';

If(Input::exists()){
  $c= new Check();
    $user= new User();
  $login= $user->login(Input::get('email'),Input::get('password'),Input::get('remember'));
}

if($c->login()){

  if($login){
    $session = new Session();
    echo 'Succesfully logged in';
    $session->set('logged_in',true);
  $session->set('email',Input::get('email'));
  $session->set('id', $user->get_id(Input::get('email')));

    header("refresh:3; url=../");
  }

  else{
    echo 'The email or password is invalid.';
  }


}

?>


