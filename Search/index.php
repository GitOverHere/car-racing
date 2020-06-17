<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
        <title>SupportLabs</title>
        <link rel="stylesheet" type="text/css"  href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script> 
		<script src="js/index.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<meta charset="UTF-8">
  <meta name="description" content="SupportLabs is a website which allows users to donate money to their favorite content creators, even when they are short in cash. This works by providing the user with surveys and advertisments.">
  <meta name="keywords" content="Demonetization,Youtube,Twitch,Twitter,Instagram">
	
</head>
<body>


          <div class="header" id="header">
		  <div id="color-bar">
		  </div>
		  <div class="header-container">
		  <img src="Images/supportlabs.png" height="50" width="200">
		  <a href="localhost"></a></img>
		  <div class="Search">
		  <form>
		  <input type="text" name="searchUsername" placeholder="Search Creators" required="true">
		  <button>Search</button>
		  </form>
		  </div>
		  <div class="header_links">
			<a> Forum </a>
		  <a href="/Dashboard">Go to Dashboard</a>
		  </div>
		  </div>
		  <div id="alert" class="alert">
			<p class="message" id="message">Deja Vu- I've just seen this message before.</p>
			</div>
          </div>
</body>

</html>