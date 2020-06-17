<?php
session_start();
require "core/init.php";
ini_set('display_errors', 1); 


try{
$field = new DB("supportlabs_auth"); 

$query=$field->get("twitch",array("id","=",$_SESSION['id']));

if($query->_count == 1){
	$q = print_r($query->_results[0]->token,true);
	$token= (string) $q;
	echo $token;
	$resp= shell_exec('curl -H "Authorization: OAuth $token" https://id.twitch.tv/oauth2/validate');
	echo $resp;
	$resp= json_decode($resp,true);

	if($resp['status']=="401"){
		echo 'Invalid Token!';
		$field->action("DELETE","twitch",array("id","=",$_SESSION['id']));
		http_response_code(304);
	}
	else {
		echo 'yay';
		http_response_code(100);
	}
}

else{
	echo 'No token!';
	http_response_code(304);
}

}

catch(Exception $e) {
	echo 'nope';

}

?>