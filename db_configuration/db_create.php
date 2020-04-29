<?php 
$servername = "localhost"; 

/******************** PLEASE, FILL IN YOUR CREDENTIALS ****************************************************/
$username = ""; 
$password = "";  
/**********************************************************************************************************/

// Create connection 
$conn = mysqli_connect($servername, $username, $password); 
// Check connection 
if (!$conn) {     
	die("Connection failed: " . mysqli_connect_error()); 
}  
// Create database 
$sql = "CREATE DATABASE IF NOT EXISTS ilias_korompilis_demo_db "; 
if (mysqli_query($conn, $sql)) {     
	echo "Database created successfully"; 
} else {     
	echo "Error creating database: " . mysqli_error($conn); 
}  
mysqli_close($conn); 
?> 
