<?php
  define('DB_SERVER', '198.71.225.55:3306');
   define('DB_USERNAME', '20161478');
   define('DB_PASSWORD', 'p1iSwI');
   define('DB_DATABASE', 'IA20161478');
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

