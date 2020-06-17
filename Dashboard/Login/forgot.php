<?php
include 'core/init.php';
if(Input::Exists()){
$user = new User();
$email = $_POST['email'];
echo "If $email is a valid email, you will recieve a password reset email.";
if($user->email_valid($email)){
	
	$hash = Hasher::random(12); 
	$user->reset_password($email,$hash);
	
	
	$content="<html>
		<style>
			html body {
				margin: 0;
				padding: 0;
				background-color: orange;
			}
			.content {
				margin: 0 auto;
				background-color: white;
				color: black;
			}
			
		</style>
	<body>
	<div class='content'>
	<h1>Did you forget your password?</h1>
	<h4> Don't worry! It happens to all of us </h4>
	
	<p>If you requested a password reset recently, click the link below. If you did not, someone else may be trying to get into your account.</p>
	<p>To reset your password, simply click the link below</p>
	<a>http://www.sahu.me/Websites/SupportLabs/Dashboard/Login/Reset?hash=$hash </a>
	
	</div>
	
	
	</body>
	
	
	 </html>";
	mail($email,"SuppportLabs Password Reset",$content,"from: reset@sahu.me");
}



}

?>