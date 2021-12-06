<?php
// Initialize the session
session_start();
 include'dbconnection.php';
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Welcome</title>
     <link href="../admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href= "../admin/assets/css/style.css" rel="stylesheet">
	 <link href="../admin/assets/css/style-responsive.css" rel="stylesheet">
    <link href="../admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	
</head>
<body>
   
	
	 <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Intraconexxt Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
               
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="emp-logout.php">Logout</a></li>
					<li><a href="reset-password.php" class="logout">Reset Your Password</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="../admin/assets/img/wifi2.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION[''];?></h5>
              	  	
                   

                  <li class="sub-menu">
                      <a href="" >
                          <i class="fa fa-users"></i>
                          <span>Manage Plans</span>
                      </a>
                   
                  </li>
              
                 
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3> Manage Plans</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4> Current Plans </h4>
	                  	  
                              <thead>
                              <tr>
								  <th>No.</th>
                                  <th>Plan ID</th>
                                  <th class="hidden-phone">Plan Name</th>
                                  <th> Price</th>
                                	<th>Plan Info</th>
								  
                              
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from Plans");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr text-align="">
								  <td><?php echo $cnt;?></td>
								  <td><?php echo $row['PlanId'];?></td>
                                  <td><?php echo $row['PlanName'];?></td>
                                  <td>$<?php echo $row['PlanRate'];?></td>
								  <td><?php echo $row['PlanInfo'];?></td>
                                
                                  
                                  <td>
                                     
                                     <a href="update-profile.php?uid=<?php echo $row['PlanId'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="manage-employee.php?id=<?php echo $row['PlanId'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
		<a href= "add-plan.php">  <input  name="login" class="btn btn-theme btn-block" type="submit" value="Add Plan"> </a>
      </section
  >
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

	  
	 
	  
  </script>
	  
	   
	  </section>
</body>
</html>