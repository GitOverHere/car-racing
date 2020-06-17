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


		 <div id="alert" class="alert">
			<p class="message" id="message">Deja Vu- I've just seen this message before.</p>
			</div>

          <section class="header" id="header">
		  <div id="color-bar">
		  </div>
		  <div class="header-container">
		  <img src="Images/supportlabs.png" height="50" width="200">
		  <a href="localhost"></a></img>
		  <div class="Search">
		  <form action="Search" method="GET">
		  <input type="text" name="searchUsername" placeholder="Search Creators" required="true">
		  <button>Search</button>
		  </form>
		  </div>
		  <div class="header_links">
			<a> Forum </a>
		  <a href="/Dashboard">Go to Dashboard</a>
		  </div>
		  </div>
          </section>
		 
            <section class="intro" id="intro">
              <div class="inner" id="inner">

                  <div class="content" id="content">
                    <h1>Support Your Favorite Content Creators For Free!</h1>
					
                    <a class="orange-btn" href="Dashboard">I'M A CREATOR</a>
                    <a class="white-btn" href="#">VIEW CREATORS</a>
					</div>
                  </section>
                  <section class="about" id="about">
				 
				 <h1>About</h1>
<div class="description">
  <p> Supportlabs is an alternative revenue system designed to generate extra revenue for content creators.
    Patrons can donate to content creators not only with money, but also by completing surveys and
    watching ads.</p>

  <p>  With the youtube ad crisis in full swing. People are scrambling to find ways to support themselves.
. Some of them are forced to get a "real" job. I was extremly worried,
  so i created this website that wouldd allow people to make a link by which people that click on the link
  can be supported. Some say this is reveutionary, others say to go back to the drawing board. There is only
  one way to find out if this works.With the youtube ad crisis in full swing. People are scrambling to find ways to support themselves.
. Some of them are forced to get a "real" job. I was extremly worried,
  so i created this website that wouldd allow people to make a link by which people that click on the link
  can be supported. Some say this is reveutionary, others say to go back to the drawing board. There is only
  one way to find out if this works.<p>
 </div>
  </section>

<section class="steps" id="steps">
<br>
<h1 class="title"> How It Works<h1>
  <div class="steps-container">
<div class="step-panel">
<div class="step_img">
<img src="Images/chain.png">
</div>
<div class="step_text">  
<h1> Step 1<h1>
<p> Users may create an account and link their favorite platforms.</p>
</div>
</div>
<div class="step-panel">
<div class="step_img">
<img src="Images/page.png">
</div>
<div class="step_text">
<h1> Step 2<h1>
  <p>A page is created and the user gives a link to that page.</p>
 </div> 
 </div> 
<div class="step-panel">
<div class="step_img">
<img src="Images/paid.png">
</div>
<div class="step_text">
<h1> Step 3 <h1>
  <p> People click on the link, do a series of tasks and the content creator gets paid!</p>
</div> 
</div> 
</div>
</section>


<section class="benefits-container" id="benefits-container">
<div id="whyus">
<h1> Why Us? </h1>
</div>
<div class="benefit-list">
<div class="benefit1">
<div class="benefit-img">
<img src="Images/cut.png" alt="cut">
</div>
<div class="benefit-content">
<h1> 90/10 revenue split</h1>
<p> We only keep 10 percent of your revenue. The rest is yours</P>
</div>
</div>
<div class="benefit2">
<div class="benefit-img">
<img src="Images/multiple-platforms.png" alt="multiple-platforms">
</div>
<div class="benefit-content">
<h1> Earn money on any platform </h1>
<p> No more dips in profit due to demonetization. We do not censor you. We are a bastion of free speech and our Terms of Service allign closely with the United Staes constitution and Bill of Rights</p>
</div>
</div>

<div class="benefit3">
<div class="benefit-img">
<img src="Images/no-money.png" alt="broke">
</div>
<div class="benefit-content">
<h1> No money to spare?</h1>
<p> You may donate by using real cash, watching ads, and completing surveys. We are also developing a program that will allow you to use your cpu or graphics card to donate to content creators. This technology is known as block chain technology.</p>
</div>
</div>

</section>


<section class="our-users">
<h1 class="title">Supportlabs is for Everyone! </h1>

<div class="users-panel">
<div class="user Youtubers">

<img href="Images/youtubers.png" class="user-img" alt="Youtubers" width="100px" height="200px">
<h4>Youtubers</h4>
</div>

<div class="user Streamers">
<img href="Images/livestreamers.png" class="user-img" alt="Livestreamers">
<h4>Streamers</h4>
</div>

<div class="user Webmasters">
<img href="Images/webmasters.png" class="user-img" alt="Webmasters">
<h4>Streamers</h4>

</div>

<div class="user Charities">
<img href="Images/charities.png" class="user-img" alt="Charities">
<h4>Streamers</h4>

</div>

<div class="user Orgs">
<img href="Images/charities.png" class="user-img" alt="Organizations">
<h4>Organizations</h4>
</div>
</div>
<h2> And so many more...</h2>
</section>
<section class="cmon" id="cmon">
<br>
<div class="inner">
<h4> What are you waiting for? <h4>
<h1> Sign Up Today! </h1>
<a class="btn" href="/Dashboard/Login">Sign Up</a>
</div> 
</section>
<section class="footer" id="footer">
<div class="foot">
<div class="col1">
<img src="Images/supportlabs.png" id="footer-logo">
<div class="social_media">
<img src="Images/Social Media/facebook.png" alt="Facebook Logo">
<img src="Images/Social Media/twitter.png" alt="Twitter Logo">
<img src="Images/Social Media/youtube.png" alt="Youtube Logo">
<img src="Images/Social Media/discord.png" alt="Discord Logo">
</div>
<p>©2019 Supportlabs Corporation</p>
</div>
<div class="col2" id="col2">

<ol><a href="">About</a></ol>
<ol><a href="">Jobs</a></ol>
<ol><a href="">Legal</a></ol>
<ol><a href="">Sitemap</a></ol>
<ol><a href=""> Contact Us!</a></ol>

</div>
<div class="col3" id="col3">

<ol><a href="">FAQ</a></ol>
<ol><a href="">Developer API</a></ol>
<ol><a href="">Blog</a></ol>
<ol><a href="">Terms of Service</a></ol>
<ol><a href="">Privacy Policy</a></ol>

</div>
</div>
</section>





       </body>

</html>
