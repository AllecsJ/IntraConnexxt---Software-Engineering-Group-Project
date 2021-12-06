<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["login_user"]) && $_SESSION["login_user"] === true){
  header("location: welcome.php");
  exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values

$username = "";
$PhoneNumber = $password = "";
$PhoneNumber_err = $password_err = "";
$RegisteredDate = "";
//changed
$AccountBalance=" ";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["PhoneNumber"]))){
        $PhoneNumber_err = "Please enter Phone Number.";
    } else{
        $PhoneNumber = trim($_POST["PhoneNumber"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($PhoneNumber_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT CustomerId, PhoneNumber, password, username,RegisteredDate FROM Customers WHERE PhoneNumber = ?";
        
        //changed
         //$sql = "SELECT PlanId, PlanName, password, PlanRate,PlanInfo FROM Plans WHERE PhoneNumber = ?";
        
    //  $query =  "SELECT Customers.PhoneNumber, Plan.PlanId FROM Customers INNER JOIN Plan ON Customers.PlanId = Plan.PlanId";
        
        
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_PhoneNumber);
            
            // Set parameters
            $param_PhoneNumber = $PhoneNumber;
			$param_username = $username;
            $param_RegisteredDate = $RegisteredDate;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $CustomerId, $PhoneNumber, $hashed_password, $username, $RegisteredDate);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["login_user"] = true;
                            $_SESSION["CustomerId"] = $CustomerId;
                            $_SESSION["PhoneNumber"] = $PhoneNumber;   
                            $_SESSION["username"] = $username; 
                            $_SESSION["RegisteredDate"] = $RegisteredDate;
                            //changed
                            $_SESSION["PlanName"] = $PlanName;
                            $_SESSION["AccountBalance"] = $AccountBalance;
                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $PhoneNumber_err = "No account found with that phoneNumber.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($db);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
	
	

    
</head>
<body>
	

		<header id="header" >	
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


	
    <div class="wrapper" >
		
        <h2 style="text-align: center">Login</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($PhoneNumber_err)) ? 'has-error' : ''; ?>">
                <label>PhoneNumber</label>
                <input type="text" name="PhoneNumber" class="form-control" value="<?php echo $PhoneNumber; ?>">
                <span class="help-block"><?php echo $PhoneNumber_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Click here to register <a href="register.php">Sign up </a>.</p>
        </form>
    </div>
		
	
	
	
	
	
	
	
	
	
	
	
	
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
					</ul>
				</div>
	</footer>
						
</body>
</html>