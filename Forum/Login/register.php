<?php
require_once 'core/init.php';


	$username = $_POST['username']
	$password = $hashed_password;
	$email = $_POST['email'];
	$full_name = $_POST['full_name'];
	$group_id=1;
	$password= Hash::make($_POST['password']);
	
	
	connect('supportlabs_accounts');
	
	$sql="INSERT INTO users(id,username,password,joined,group_id) VALUES('LEFT(UUID(),24)','Gamesational','$password','GETDATE()','3')";
	
	
	header('Location: ../");
?>