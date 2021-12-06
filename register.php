<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values

$RegisteredDate = "" ;
$PhoneNumber = $password = $confirm_password = "";
$PhoneNumber_err = $password_err = $confirm_password_err = "";
$FirstName = $LastName = $username= "";
$FirstName_err = $LastName_err = $username_err= "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["PhoneNumber"]))){
        $PhoneNumber_err = "Please enter your phone number.";
    } else{
		
		
        // Prepare a select statement
        $sql = "SELECT CustomerId FROM Customers WHERE PhoneNumber = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_PhoneNumber);
           
			//checks if number is in current format
			if(preg_match( '/(876)(\d{3})(\d{4})$/', $PhoneNumber,  $matches))
		   {
    		$PhoneNumber = $matches[1].$matches[2] . $matches[3];
            } 
			// Set parameters
            $param_PhoneNumber = trim($_POST["PhoneNumber"]);
			
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $PhoneNumber_err = "This number is already registered.";
                } else{
                    $PhoneNumber = trim($_POST["PhoneNumber"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
			
  
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    
	}
	 // Validate Firstname 
    if(empty(trim($_POST["FirstName"]))){
        $FirstName_err = "please enter a firstname";     
    }else{
        $FirstName = trim($_POST["FirstName"]);
    }
    
	
	 $param_FirstName = trim($_POST["FirstName"]);
    
	 // Validate Lastname 
    if(empty(trim($_POST["LastName"]))){
        $LastName_err = "please enter a lastname";     
    }else{
        $LastName = trim($_POST["LastName"]);
    }
    
	
	 $param_LastName = trim($_POST["LastName"]);
    
	
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must have at least 8 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
	
	
	$username = $FirstName." ".$LastName;
	
	 $param_username = $username;
    
    // Check input errors before inserting in database
    if(empty($PhoneNumber_err) && empty($password_err) && empty($confirm_password_err) && empty($FirstName_err)&& empty($LastName_err)){
        
 $RegisteredDate = date("d-m-Y"); 
 $param_RegisteredDate = $RegisteredDate;

//date("d-m-Y")
        // Prepare an insert statement
        $sql = "INSERT INTO Customers(PhoneNumber,password,FirstName,LastName,username) VALUES (?, ?, ?, ?, ?)";
        
//        $sql = "INSERT INTO Customers(Regdate) VALUES (?, ?, ?, ?, ?)";
       
        // Prepare an insert statement
//        $sql1 = "INSERT INTO Customers(RegisteredDater) VALUES (?, ?, ?, ?, ?)"; 
        
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_PhoneNumber, $param_password, $param_FirstName, $param_LastName, $param_username);
            
            // Set parameters
            $param_PhoneNumber = $PhoneNumber;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
						<li><a href="adminLogin.php">Admin</a></li>
					</ul>
				</nav>
				</header>
	
	
	
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Create an Account </p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($PhoneNumber_err)) ? 'has-error' : ''; ?>">
                <label>Phone number</label>
                <input type="text" name="PhoneNumber" class="form-control" value="<?php echo $PhoneNumber; ?>">
                <span class="help-block"><?php echo $PhoneNumber_err; ?></span>
            </div>   
			
			<!-- Firstname -->
			<div class="form-group <?php echo (!empty($FirstName_err)) ? 'has-error' : ''; ?>">
                <label>Firstname</label>
                <input type="text" name="FirstName" class="form-control" value="<?php echo $FirstName; ?>">
                <span class="help-block"><?php echo $LastName_err; ?></span>
            </div>  
			<!-- lastname -->
			<div class="form-group <?php echo (!empty($LastName_err)) ? 'has-error' : ''; ?>">
                <label>Lastname</label>
                <input type="text" name="LastName" class="form-control" value="<?php echo $LastName; ?>">
                <span class="help-block"><?php echo $LastName_err; ?></span>
            </div>  
			
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>   
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