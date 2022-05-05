<?php
include("config.php");
  
// Create connection
$con=mysqli_connect($db_host,$username,$password,$db_name);

// Check connection
if (mysqli_connect_errno($con))
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

