<?php


require_once("core/init.php");
session_start();


   ?>
<html>
   <head>
      <title> Login or Sign Up</title>
      <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/index.js"></script>
   </head>
   <body>
      <div class="form-container">
	  <div class="error">
	  <?php
	  

	  if($_SESSION["logged_in"]="true"){
	header('../');
}
	
	  ?>
	  </div>
	  
         <div class="login">
            <form method="POST">
               <h1>Log In</h1>
               <div class="field">
                  <h3> Username<span class="req">*</span></h3>
                  <input type="text" name="username" placeholder="Username">
               </div>
               <div class="field">
                  <h3>Password<span class="req">*</span></h3>
                  <input type="password"  name="password" placeholder="Password">
               </div>
               <br>
               <br>
               <label class="remember">
               <input type="checkbox" name="remember" id="check">Remember me </input>
               </label>
               <br>
               <br>
			   
			   <div class="alt-login">
			   <h2>Or Use</h2>
			   <div class="social-icons">
			   <a>
			   <img src="img/Social_Media/google.png">
			   </a>
			   <a>
			   <img src="img/Social_Media/twitter.png">
			   </a>
			   <a>
			   <img src="img/Social_Media/twitch.png">
			   </a>
			   </div>
			   </div>
              <input type="submit" value="LOG IN" class="login"></input>
            </form>
		
			</div>
			<div class="menu">
            <a class="forgot">Forgot Password?</a> <a class="sign_up">Register</a>
			</div>

         <div class="register">
            <form method="POST" name="register">
               <h1>Sign Up</h1>
               <div class="field">
                  <h3>Full Name</h3>
                  <input type="text" name="full_name" placeholder="Your Name">
               </div>
               <div class="field">
                  <h3>Email<span class="req">*</span></h3>
                  <input type="text" name="email" placeholder="Email" required>
               </div>
               <div class="field">
                  <h3>Username<span class="req">*</span></h3>
                  <input type="text" name="username" placeholder="Username" required>
               </div>
               <div class="field">
                  <h3>Password<span class="req">*</span></h3>
                  <input type="password" name="password" placeholder="Password" required>
               </div>
				<br>
				<br>
				<br>
               <input type="submit" value="SIGN UP"></input>

            </form>
            <h3> Got an account?</h3>
            <a class="sign_in">Login</a>
         </div>
         <div class="reset">
		 <div class="prompt">
            <h3> Type in your Email Address to reset your password</h3>
			</div>
            <form name="reset" method="POST">
               <input type="text" name="email" placeholder="Email">
               <br>
               <br>
               <br>
               <input type="submit" value="RESET"></input>
            </form>
            <a class="back">Go Back</a>
         </div>
   </body>
</html>
