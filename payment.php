<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["login_user"]) || $_SESSION["login_user"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Make Payment</title>
    
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
        <h5 style="font-size: 60px"><p><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></p></h5></div>
					</header>
					<div class="row">
                        <section class="feature 12u 12u$(small)">
                            <h3>Customer ID :<b><?php echo htmlspecialchars($_SESSION["CustomerId"]); ?></b></h3>
                            <h3>Phone Number :<b><?php echo htmlspecialchars($_SESSION["PhoneNumber"]); ?></b></h3>
                                <h3>Registered Date :<b><?php echo htmlspecialchars($_SESSION["RegisteredDate"]); ?></b></h3>
						</section>
                        </div>
                        </div>
                        </section>
                    
                    
                    
						<section>
							<h4 class="title"> 
								 <h2>Account Balance:</h2><h3> <?php echo "balance goes here"  ?></h3>
                              </h4>    
                                
    <form action="/action_page.php">
       <div class="">
            
              <div class="col-100">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
             </div>
          </div>

          <div class="col-50">
                <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
          
            

            <div class="row">
            
              <div class="col-50">
                    <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="September">
                <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Make Payment" class="btn">
    </form>   
                            
                        <section class="feature 12u 12u$(small)">
							<h4 class="title"> 
							<a href="logout.php" class="btn btn-danger">Sign Out</a></h4>
							<p></p>
						      </section>   
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