<?php
// Include config file
require_once "dbconnection.php";
 
// Define variables and initialize with empty values

$EmployeeType = "" ;
$PhoneNumber = $password = $confirm_password = "";
$PhoneNumber_err = $password_err = $confirm_password_err = "";
$FirstName = $LastName = $username= "";
$FirstName_err = $LastName_err = $username_err= "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   
  
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
	
	// Username
	$username = $FirstName.".".$LastName;
	
	 $param_username = $username;
	
	// Validate confirm password
	$EmployeeType = $_POST['EmployeeType'];
	
	$param_EmployeeType = $EmployeeType;

    
    // Check input errors before inserting in database
    if(empty($password_err) && empty($confirm_password_err) && empty($FirstName_err)&& empty($LastName_err)){
        


        $sql = "INSERT INTO Employees(password,FirstName,LastName,username,EmployeeType) VALUES (?, ?, ?, ?,?)";
        

        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss",  $param_password, $param_FirstName, $param_LastName, $param_username,$param_EmployeeType);
            
            // Set parameters
            $param_PhoneNumber = $PhoneNumber;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: manage-employee.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	

    
</head>
<body>

	
	
	
    <div id="login-page" >
		<div class="container">
        
        <form class="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2 class="form-login-heading">Create an Employee</h2>
        
			<div class="login-wrap">
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
			
				
			<div class="form-group ">
				 <label >Employee Type</label><br>
  				<select  name="EmployeeType">
					<option value="Manager" selected="selected">Manager</option>
					<option value="Regular">Regular</option>

  				</select>
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
                <input type="submit" class="btn btn-theme btn-block"  value="Submit">
                <input type="reset" class="btn btn-theme btn-block"  value="Reset">
            </div>
			</div>
        </form>
    </div>   
	</div>
    


</body>
</html>