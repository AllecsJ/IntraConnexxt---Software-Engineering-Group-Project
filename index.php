
<!DOCTYPE html>
<!--
	Intracontexxt website 
0 -->

<?php

	
	//session_start();
 	

?>



<html lang="en">
		<head>
		<meta charset="UTF-8">
		<title>Intraconnexxt</title>
		<link rel="icon" type="image/jpg" href="images/wifi2.png">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">
 
		<!-- Header -->

		<!-- Nav -->
			
		<div >
		<header id="header" >	
			<h1><a href="index.html"> IntraConnexxt Ja</a></h1>

					<nav id="nav">
					<ul>
						<li><a href="index.php" >Home</a></li>
						<li><a href="aboutUs.php">About Us</a></li>
						<li><a href="elements.html">Store</a></li>
						<li><a href="elements.html">Contact Us</a></li>
						<li><a href="login.php">My Account</a></li>
                        <li><a href="adminLogin.php">Admin</a></li>
					</ul>
				</nav>
				</header>
<!--			<br>-->
			
<!--
		<header id="header">
				<h1><a href="index.html"> Intraconnexxt</a></h1>

				<nav id="nav">
					<ul>
						<li><a href="index.html" >Home</a></li>
						<li><a href="generic.html">About Us</a></li>
						<li><a href="elements.html">Shop phones</a></li>
						<li><a href="elements.html">Online Top Up</a></li>
						<li><a href="elements.html">Support</a></li>
						<li><a href="elements.html">My Mobile</a></li>
						<li><a href="elements.html">Home Internet</a></li>
						<li><a href="elements.html">My Account</a></li>
						<li><a href="elements.html">Plans</a></li>
					</ul>
				</nav>
			</header>
-->
		</div>
			
		<!-- Banner -->
			<section id="banner">
				<h2>IntraConnexxt </h2>
				<p>Connecṱ & Optimizέ</p>
<!--				<p><i>With Us</i></p>-->
				<ul class="actions">
					<li>
<!--						<br>-->
						<a href="#" class="button big" id = "Button1">Offers</a>
					</li>
				</ul>
			</section>
		
		
<!--		LOWER nAV-->
		<div id="header2">
			<nav id=lowerNav>
					<ul>
							<ul class="actions">
								<li><a href="login.php" class="button big" id = "Button1">Login</a></li>
                                
								<li><a href="register.php" class="button big" id = "Button1">Register</a></li>
                                
								<li><a href="welcome.php"  id = "Button1">Top up</a></li>
                                
								<li><a href="welcome.php"  id = "Button1">Manage Plans</a></li>
							
						
								
						</ul>
							
						<li><?php //echo htmlspecialchars($_SESSION["username"]); ?></li>
<!--						<li><a href="index.html" >Login</a></li>-->
<!--						<li><a href="generic.html">Sign up</a></li>-->
					</ul>
				</nav>
		</div>



		<!-- Two -->
			<section id="two" class="wrapper style2 align-center" >
				<div class="container" >
					<header style="color:#00ff85 ">
						<h2 style="color:deeppink" >Get on board with Jamaica's best network</h2>
						<p>Well unfortunately you don't have any other choices </p>
					</header>
					<div class="row">
						<section class="feature 6u 12u$(small)">
							<img class="image fit" src="images/americanwoman.jpg" alt="" />
							<h3 class="title">Connect to the one and only network of Jamaica </h3>
							<p> Talk, Text unlimited for only J$200 a month.</p>
						</section>
						<section class="feature 6u$ 12u$(small)">
							<img class="image fit" src="images/Gadgets.jpg" alt="" />
							<h3 class="title">Fastest Wi-Fi Speeds</h3>
							<p>Be able to stream your favourite movies in full HD and do want you adore for as low as J$999 a month !!</p>
						</section>
						<section class="feature 6u 12u$(small)">
							<img class="image fit" src="images/latestphones.jpg" alt="" />
							<h3 class="title">Latest Phones</h3>
							<p>Get the Latest phones on market and keep up with techology.</p>
						</section>
						<section class="feature 6u$ 12u$(small)">
							<img class="image fit" src="images/Businesswoman.jpg" alt="" />
							<h3 class="title">Cloud Services </h3>
							<p>Unlimited Storage in the cloud access all your files anywhere any time from any device. </p>
						</section>
					</div>
					
					<footer>
						<ul class="actions">
							<li>
								<a href="services.php" class="button alt big">Learn More</a>
							</li>
						</ul>
					</footer>
				</div>
			</section>
<!--
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h2>Consectetur adipisicing elit</h2>
						<p>Lorem ipsum dolor sit amet adipisicing elit. Delectus consequatur sed tempus.</p>
					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-clock-o"></i>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam consequatur repellat debitis maxime molestiae.</p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque eveniet, nesciunt molestias. Ipsam, voluptate vero.</p>
						</section>
					</div>
				</div>
			</section>
-->
		
		<!--		 Devices Section -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h1 style="font-size: 70px">Phones and Devices</h1>
						<p class="top-p">keep current with newest tech</p>
						<ul class="actions">
					<li>

						<a href="#" class="button big" id = "Button1">Shop Devices</a>
					</li>
				</ul>
					</header>
					<div class="row">
						<section class="feature 6u 12u$(small)">
							<h4 class="title"> 
								<img class="image fit" src="images/new-iphone-xs-and-xs-max-smartphone-model-by-apple-1188265438.jpg" alt="" />
							<a href="#" class="button big" id = "Button1">SHOP NOW</a></h4>
							<p></p>
						</section>
						<section class="feature 6u 12u$(small)">
							<h4 class="title"> 
								<img class="image fit" src="images/stock-photo-bangkok-thailand-june-samsung-galaxy-s-with-galaxy-wallpaper-on-hand-on-june-in-664066798.jpg" alt="" />
							<a href="#" class="button big" id = "Button1">SHOP NOW</a></h4>
							<p></p>
						</section>
						<section class="feature 6u 12u$(small)">
							<h4 class="title"> 
								<img class="image fit" src="images/xs-max-smartphone-model-by-apple-computers-close-up-1188334558.jpg" alt="" />
							<a href="#" class="button big" id = "Button1">SHOP NOW</a></h4>
							<p></p>
						</section>
						<section class="feature 6u 12u$(small)">
							<h4 class="title"> 
								<img class="image fit" src="images/stock-photo-bangkok-thailand-sep-new-smartwatch-samsung-galaxy-watch-mm-midnight-black-with-onyx-1194138889.jpg" alt="" />
							<a href="#" class="button big" id = "Button1">SHOP NOW</a></h4>
							<p></p>
						</section>
					</div>
				</div>
			</section>
		
		
		
		
		
		<!-- Two -->
			<section id="two" class="wrapper style2 align-center">
				<div class="container">
					<header>
						
					<div  class="6" style="text-align: center"><h2>Looking for more?
						<p>----------------------------------------------------------------------------------</p></h2></div>
						</header>
					<div class="container">
					<div class="row">
						<section class="4u 4u(medium) 12u$(small)">
							<h3>I want to...</h3>
							<p></p>
							<ul class="alt">
								<li><a href="login.php">Create an account</a></li>
								<li><a href="login.php">Select a plan</a></li>
								<li><a href="login.php">View & Pay bill</a></li>
							</ul>
						</section>
						<section class="4u 4u$(medium) 12u$(small)">
							<h3>Cell Phones & Home Services</h3>
							<p></p>
							<ul class="alt">
								<li><a href="services.php">Internet Services</a></li>
								<li><a href="services.php">Home Telephone Services</a></li>
								<li><a href="services.php">Cloud storage services </a></li>
								<li><a href="services.php">Phone & Computer Repairs</a></li>
							</ul>
						</section>
						<section class="4u 12u$(medium) 12u$(small)">
							<h3>Business</h3>
							<p></p>
							<ul class="alt">
								<li><a href="services.php">Wifi Upgrades</a></li>
								<li><a href="services.php">Voip Phones</a></li>
								<li><a href="services.php">Audio & Video Conferencing</a></li>
								<li><a href="services.php">Server security maintenance</a></li>
							</ul>
						</section>
					</div>
				</div>
					
					<div class="row">

					</div>
				</div>
		</section>
					
							<!-- Footer -->
			<footer id="footer" style="text-align: center">
				<div class="container" >
					<div class="row">
						<section class="12u$ 12u$(medium) 12u$(small)">
							<h3 style="font-size: 80px">Contact Us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									1 Mandeville Road<br>
									WestPoint, JM 
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">Contact@IntraConnexxtja.com</a>
								</li>
								<li>
									<h3>Phone</h3>
								(876) 468-7252<!--	intaja -->
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li> IntraConnextJA &copy; All rights reserved.</li>
						<li>Created by: Alex Jackson and Keneil Smith </li>
		
						
						
						
						
						<!--<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li> -->
					</ul>
				</div>
			</footer>

				
<!--			</footer>-->
	</body>
</html>