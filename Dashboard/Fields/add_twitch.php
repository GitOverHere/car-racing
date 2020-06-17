<?php
session_start();
require "core/init.php";
ini_set('display_errors', 1); 

$token= $_POST['token'];

try{
$db= new DB("supportlabs_auth");
$query=$db->get("twitch",array("id","=",$_SESSION['id']));

if($query->_count == 1) {
	$token = print_r($query->_results[0]->token,true);
	$resp= shell_exec('curl -H "Authorization: OAuth $token" https://id.twitch.tv/oauth2/validate');
	$resp= json_decode($resp,true);
	if($resp['status']=="401"){
		echo 'Invalid Token!';
		$db->action("DELETE","twitch",array('id','=',$_SESSION['id']));
		$db->Update("twitch","token",$token,$_SESSION['id']);	
		http_response_code(100);
	}
	else {
	echo 'yay';
	$db->Update("twitch","token",$token,$_SESSION['id']);	
	http_response_code(100);
	}
}

else {
	$db->Add("twitch",array('id','token'),array($_SESSION['id'],$token));
	http_response_code(100);
}

}
catch(Exception $e) {
	echo $e ;

}

?>