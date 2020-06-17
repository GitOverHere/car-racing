<?php
   session_start();
   require_once("core/init.php");
 $user= new User();
   if(!Session::exists('logged_in')){
   	header('location: Login');
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Dashboard</title>
      <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	  <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
	  <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="style.css">
      <meta charset="utf-8">
   </head>
   <body>
      <div class="topcolor"></div>
      <div class="website-container">
         <div class="sidepanel">
            <div class="logo">
               <a href="/Dashboard">
               <img src="img/supportlabs.png" width="300" height="100" alt="Home">
               </a>
            </div>
            <nav class="v-nav" id="v-nav">
               <a class="link" id="analytics">Analytics</a>
               <a class="link" id="shared_access">Shared Access</a>
               <a class="link" id="dev_api">Developer API</a>
               <a class="link" id="live">Livestream tools</a>
               <a class="link" id="your_page">Your Page</a>
               <a class="link" id="forums">Forums</a>
               <a class="link" id="account_settings">Account Settings</a>
            </nav>
            <div class="profile">
               <h3 class="username">
                  <?php
						 echo $user->get('users','username');
		
                   ?>
               </h3>
               <a href="Login/logout.php">
               <img src="img/logoff.png" width="25" height= "25" alt="Log Off">
               </a>
               <a href="#account_settings">
               <img src="img/settings.png" width="25" height="25" alt="Settings">
               </a>
            </div>
         </div>
         <div class="content-container" id="content-container">
            <div class="analytics content">
               <h1>Analytics </h1>
               <nav class="s-nav">
                  <a class="analytics-page">Page</a>
                  <a class="analytics-youtube">Youtube</a>
                  <a class="analytics-twitter">Twitter</a>
                  <a class="ana;ytics-twitch">Twitch</a>
                  <a class="anaylitics-new">New Platform</a>
               </nav>
               <div class="daterange-select">
                  <h3> Show data from</h3>
                  <select id="time-range">
                     <option value ="30-days">Last 30 Days</option>
                     <option value ="60-days"> Last 60 Days</option>
                     <option value="90-days"> Last 90 Days </option>
                     <option value="last-year">Last Year </option>
                     <option value="this-year">This Year </option>
                     <option value="all-time">All Time </option>
                     <option value="custom">Custom Time Range </option>
                  </select>
               </div>

                  <div class="graph-container">
					<div class="page a">
                     <h3>Total Revenue</h3>
                     <canvas id="revenue-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Views</h3>
                     <canvas id="views-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Page Watch Time</h3>
                     <canvas id="average-time-graph" class="graph"  width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Custom Graph </h3>
                     <canvas id="custom-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <p> Not enough data? You can create a custom graph.</p>
                     <br>
                     <a class="standard-button">Create Custom Graph </a>
									 </div>
									 <div class="youtube a">
									 </div>
									 <div class="twitch a">
									 </div>
									 <div class="new a">
									 </div>
                  </div>
								</div>

                  <div class="shared_access content">
                     <h1>Add People</h1>
                  </div>
                  <div class="dev_api content">
                     <h1> Coming Soon... </h1>
                     <p> The developer API is currently not available.<br>
                        It will be available soon, but in the meantime, please feel free to explore the other tabs.
                     </p>
                  </div>
                  <div class="live content">
                     <h1> Livestream Tools</h1>
					 <p id="back-button">Go Back</p>
					 <div class="tool-menu" id="tool-menu">
					 <div class="livestream-tools" id="twitch-tools">
					 <div class="img-div">
						<img class="b-logo" id="twitch_logo"  src="img/Social_Media/twitch.png">
					</div>
						<div class="Description">
						<h1>Twitch Tools</h1>
						<p>Show your twitch chat who the BEASTS are by using out Twitch Livestreaming Tools.</p>
						 </div>
					 </div>
					 
					 <div class="livestream-tools" id="youtube-tools">
						<div class="img-div">
						 <img class="b-logo" id="youtube_logo" src="img/Social_Media/youtube.png">
						</div>
						 <div class="Description">
						<h1>Youtube Tools</h1>
						<p>Shows who subscribed to your channel and who baught membership.</p>
					 </div>
					 </div>
					 
					 <div class="livestream-tools" id="twitter-tools">
						<div class="img-div">
						  <img class="b-logo" id="twitter_logo" src="img/Social_Media/twitter.png">
						 </div>
					
						  <div class="Description">
						<h1>Twitter Tools</h1>
						<p>Check out your squad and see who has followed you.</p>
						 </div>
					 </div>
					 
					 <div class="livestream-tools" id="mixer-tools">
					 <div class="img-div">
					<img class="b-logo" id="mixer_logo" src="img/Social_Media/mixer.png">
					</div>
						<div class="Description">
						<h1>Mixer Tools</h1>
						<p>Show your twitch chat who the BEASTS are by using out Twitch Livestreaming Tools.</p>
						</div>
					 </div>
					 
					 
					 <div class="livestream-tools" id="discord-tools">
					 <div class="img-div">
					 <img class="b-logo" id="mixer_logo" src="img/Social_Media/discord.png">
					 </div>
						<div class="description">
						<h1>Discord Tools</h1>
						<p>Show your discord chat who the BEASTS are by using out Twitch Livestreaming Tools.</p>
					     </div>
				  </div>
				  <div class="livestream-tools" id="our-tools">
						<div class="img-div">
						<img class="b-logo" id="our-logo" src="img/Social_Media/twitch.png">
						</div>
						<div class="description">
						<h1>SupportLabs Tools</h1>
						<p> Show off your patrons and donators with these awesone plugins.</p>
						</div>	
				
				  </div>
				  

				  
				  </div>
				  
				  </div>
				  
				
                  <div class="your_page content">
                     <h1>Your Page</h1>
                     <br>
                     <a class="standard-button code">Open Visual Editor</a>

                    <div class="code" id="code">
                    <div class="html code">
                    <h3>HTML</h3>
                    <textarea rows="4" cols="50">

                    </textarea>

                    </div>

                    <div class="css code">
                    <h3>CSS3</h3>
                    <textarea rows="4" cols="50">

                    </textarea>

                    </div>

                    <div class="javascript code">
                    <h3>JS</h3>
                    <textarea rows="4" cols="50">

                    </textarea>

                    </div>
                  </div>

                     <?php
                     if($user->get('users','custom_url')==""){
                       echo '<div class="no-page">';
                         echo '<h5>You do not seem to have a page yet.</h5>';
                      echo '<h5>Select a template</h5>';
                      echo '<br>';
                      echo '</div>';

                      echo '<script>';

                        echo 'var elem = document.getElementsByClassName("code");';
                        echo 'while(elem.length > 0){';
                        echo 'elem[0].parentNode.removeChild(elem[0]);';
                        echo '}';

                      echo "</script>";
                     }


                     ?>




                     <div class="templates">
                       <div class="col-1">
						 <div id="blank">
						 <a class="blank template">Blank</a>
						 
						 </div>
						 
						 <div id="beach">
						 <a class="beach template">Beach</a>
						 </div>
						 
						 <div id="business">
						 
						 <a class="business template">Business</a>
						 
						 </div>
						 
                       </div>
                       <div class="col-2">
					   <div id="circuts">
					   
					   <a class="circuts template">Template </a>
					   
					   </div>
					   
					   <div id="dank">
					   
					   <a class="dank template">Dank</a>
					   
					   </div>
					   
					   <div id="ocean">
					   
					   <a class="ocean template"> Ocrean </a>
					   
					   </div>
					   

                       </div>
                       <div class="col-3">
					   
					   
					   
					   <div id="gaming">
					   
					   <a class="gaming template">Gaming</a>
					   
					   </div>
					   
					   
					   
					   <div id="org">
					   
					   <a class="org template">Organization</a>
					   
					   
					   </div>
					   
					   <div class="vaporwave">
					   
					   <a class="vaporwave template"> Vaporwave</a>
					   
					   </div>
					   
					   
	
                       </div>
                     </div>


                
				</div>
                  <div class="account_settings content" id="account_settings">
                     <h1>Account Settings</h1>
                     <div class="settings">
                        <nav class="s-nav">
                           <a class="s-link" id="info">Info</a>
                           <a class="s-link" id="payment-info">Payment</a>
                           <a class="s-link" id="notifications">Notifications</a>
                           <a class="s-link" id="password">Change Password</a>
                           <a class="s-link" id="delete_account">The Danger Zone</a>
                        </nav>
                        <div class="settings-form-container">
                           <div class="info setting">
                              <form name="info" class="info setting" method="POST">
                                 <h1> General Info</h1>
                                 <h3>Username</h3>
                                 <input type="text" name="username" value="<?php echo $user->get('users','username') ?>" id="username-f">
                                 <a class="update" id="username">✔</a>
								 <h3>Name</h3>
								 <input type="text" name="full_name" value="<?php echo $user->get('users','full_name') ?>" id="name-f">
                                 <a class="update" id="name">✔</a>
                                 <h3> Email Address </h3>
                                 <input type="text" name="email" value="<?php echo $user->get('users','email') ?>" id="email-f">
                                 <a class="update" id="email">✔</a>
                                 <h3>Change The Background</h3>
                                 <p>Click here to change the backgrounds you see in your Dashboard</p>
                                 <br>
                                 <a class="standard-button">Change Background</a>
                              </form>
                           </div>
                           <div class="payment-info setting">
                              <form name="payment-info" class="payment-info setting" method="POST">
                                 <h1>Payment Info </h1>
                                 <h3>Paypal address</h3>
                                 <input type="text" name="paypal" value="<?php echo $user->get('paypal','address') ?>" id="paypal-f">
                                 <a class="update" id="paypal">✔</a>
                                 <h3> Bitcoin Address </h3>
                                 <input type="text" name="btc" value="<?php echo $user->get('bitcoin','address') ?>" id="btc-f">
                                 <a class="update" id="btc">✔</a>
                              </form>
                           </div>
                           <div class="notifications setting">
                              <form name="notifications" class="notifications setting" method="POST">
                                 <h1>Notifications </h1>

                                 <input type="checkbox" name="news">Notify me about the latest news. </input>
																 	<br>


                                 <input type="checkbox" name="donate"> Tell me when someone donates. </input>
																 <br>

                                 <input type="checkbox" name="message">Tell me when someone sends me a message.</input>
																 <br>
                                 <br>
                              </form>
                              <br>
                              <br>
                              <a class="standard-button">Update Notification Settings </a>
                           </div>
                           <div class="password setting">
                              <h1>Change Password</h1>
                               <input type="password" name="old-password" placeholder="Existing Password">
                              <a class="update">✔</a>
                              <br>
                               <br>
                              <input type="password" name="new-password" placeholder="New Password">
                              <a class="update">✔</a>
                              <br>
                               <br>
                              <input type="password" name="confirm-password" placeholder="Confirm Password">
                              <a class="update">✔</a>
                              <br>
                               <br>
                           </div>
                           <div class="delete_account setting">
                              <h1>Delete Account </h1>
                              <p> You sure you wanna delete your account? If so, you may want to <a href="#">Create a Backup</a>. After that, you may delete your account. </p>
                              <br>
                              <a class="confirm_deletion">Delete My Account</a>
                              <script src="js/index.js"></script>
                              <script src="js/graph.js"></script>
							  
                           </div>
                        </div>
                     </div>
                  </div>
         </div>
   </body>
</html>
