<?php 
/* Database credentials. */ 
define('DB_SERVER', 'localhost'); 

/******************************************PLEASE FILL IN YOUR CREDENTIALS ******************************/
define('DB_USERNAME', ''); 
define('DB_PASSWORD', ''); 
/********************************************************************************************************/
define('DB_NAME', 'ilias_korompilis_demo_db');

/* Attempt to connect to MySQL database */ 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);   
/* Check connection */
if($link === false){     
	die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
?>
