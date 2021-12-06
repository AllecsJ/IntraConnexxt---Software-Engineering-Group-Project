<?php
// Include config file
require_once "dbconnection.php";
 
// Define variables and initialize with empty values


$PlanName = $PlanRate = $PlanId= $PlanInfo ="" ;
$PlanName_err = $PlanRate_err = $PlanId_err = $PlanInfo_err = "" ;



 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  
	 // Validate Firstname 
    if(empty(trim($_POST["PlanName"]))){
        $PlanName_err = "please enter a Plan name";     
    }else{
        $PlanName = trim($_POST["PlanName"]);
    }
    
	
	 $param_PlanName = trim($_POST["PlanName"]);
    
	 // Validate Lastname 
    if(empty(trim($_POST["PlanRate"]))){
        $PlanRate_err = "please enter a Plan Rate";     
    }else{
        $PlanName = trim($_POST["PlanRate"]);
    }
    
	
	 $param_PlanRate = trim($_POST["PlanRate"]);
    
	 // Validate Lastname 
    if(empty(trim($_POST["PlanInfo"]))){
        $PlanInfo_err = "please enter a Plan Info";     
    }else{
        $PlanInfo= trim($_POST["PlanInfo"]);
    }
    
	
	 $param_PlanInfo = trim($_POST["PlanInfo"]);
    
   

    
    // Check input errors before inserting in database
    if(empty($PlanName_err) && empty($PlanRate_err) && empty($PlanInfo_err)){
        


        $sql = "INSERT INTO Plans(PlanName, PlanRate, PlanInfo) VALUES (?, ?, ?)";
        

        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss",  $param_PlanName, $param_PlanRate, $param_PlanInfo);
            
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: welcome.php");
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
    <title>Add Plan</title>
	<link href="../admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href= "../admin/assets/css/style.css" rel="stylesheet">
	 <link href="../admin/assets/css/style-responsive.css" rel="stylesheet">
    <link href="../admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	

    
</head>
<body>
	
    <div id="login-page" >
		<div class="container">
        
        <form class="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2 class="form-login-heading">Create an Plan</h2>
        
			<div class="login-wrap">
			<!-- Plan Name -->
			<div class="form-group <?php echo (!empty($PlanName_err)) ? 'has-error' : ''; ?>">
                <label>Plan Name</label> 
                <input type="text" name="PlanName" class="form-control" value="<?php echo $PlanName; ?>">
                <span class="help-block"><?php echo $PlanName_err; ?></span>
            </div>  
			<!-- lastname -->
			<div class="form-group <?php echo (!empty($PlanRate_err)) ? 'has-error' : ''; ?>">
                <label>Plan Rate</label>
                <input type="number" name="PlanRate" class="form-control" value="<?php echo $PlanRate; ?>">
                <span class="help-block"><?php echo $PlanRate_err; ?></span>
            </div>  
			
				
			
			<!-- Plan Info -->
            <div class="form-group <?php echo (!empty($PlanInfo_err)) ? 'has-error' : ''; ?>">
                <label>Plan Info</label>
                <input type="text" name="PlanInfo" class="form-control" value="<?php echo $PlanInfo; ?>">
                <span class="help-block"><?php echo $PlanInfo_err; ?></span>
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