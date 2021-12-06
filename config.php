<?php
  
  define('DB_SERVER', '198.71.225.55:3306');
   define('DB_USERNAME', '20161478');
   define('DB_PASSWORD', 'p1iSwI');
   define('DB_DATABASE', 'IA20161478');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);




/*define('DB_SERVER', '127.0.0.1:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '1234');
   define('DB_DATABASE', 'db_test');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  */
 
//Create database table




 
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>