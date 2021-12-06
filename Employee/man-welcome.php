<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["login_admin"]) || $_SESSION["login_admin"] !== true){
    header("location: adminLogin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    
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
            <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   <link href="css/bootStrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
		</noscript>
    
	<script src="js/my_js.js"></script>
	
	<!--Html WeLcome Page -->

<style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    
        * {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    
    
    
    
    </style>
</head>
<body>
	
	<header id="header">
				<h1><a href="index.php">Intraconnexxt</a></h1>
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
    
    				 

        
   		<!--		 Devices Section -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
					
				<div class="page-header" >
        <h3 style="font-size: 80px"><p>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> Welcome!</p></h3></div>
					</header>
					<div class="row">
                        <section class="feature 12u 12u$(small)">
                            <h3>Customer ID :<b><?php echo htmlspecialchars($_SESSION["CustomerId"]); ?></b></h3>
                            <h3>Phone Number :<b><?php echo htmlspecialchars($_SESSION["PhoneNumber"]); ?></b></h3>
                                <h3>Registered Date :<b><?php echo htmlspecialchars($_SESSION["RegisteredDate"]); ?></b></h3>
						</section>
                        
						<section class="feature 6u 12u$(small)">
							<h4 class="title"> 
								 <h2>Account Balance:</h2><h3> <?php echo "balance goes here"  ?></h3>
							<a href="payment.php" class="button big" id = "paymentForm" onclick="div_show()"  >Pay Bill</a></h4>
							<p></p>
						</section>
                        
						<section class="feature 6u 12u$(small)">
							<h4 class="title"> 
								<h2>Mobile Plan:</h2><h3> <?php echo "Plan goes here"  ?></h3>
							<a href="#" class="button big" id = "Button1">Manage Plans</a></h4>
							<p></p>
						</section>
					</div>
				</div>
                <section class="feature 12u 12u$(small)">
							<h4 class="title"> 
							<a href="logout.php" class="btn btn-danger">Sign Out</a></h4>
							<p></p>
						</section>
                <p>
        
    </p>
			</section>
      
    

    
    
  
<!--
    <script>
function openForm() {
  document.getElementById("paymentForm").style.display = "block";
}

function closeForm() {
  document.getElementById("PaymentForm").style.display = "none";
}

    <script>
 //Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
</script>
 -->
      
    
</body>
</html>