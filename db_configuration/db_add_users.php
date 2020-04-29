<?php
$servername = "localhost";

/************************************************* PLEASE FILL IN YOUR CREDENTIALS ***************************************/
$username = ""; 
$password = "";
/*************************************************************************************************************************/ 
$dbname = "ilias_korompilis_demo_db";  

$conn = mysqli_connect($servername, $username, $password, $dbname); 
if (!$conn) {     
	die("Connection failed: " . mysqli_connect_error()); 
}  

$michaels_pass = password_hash('Michael123!@#', PASSWORD_DEFAULT);
$sql = "INSERT INTO persons (username, name, surname, password) VALUES ('mjordan', 'Michael', 'Jordan', '$michaels_pass')";  
if (mysqli_query($conn, $sql)) {     
	echo "New record created successfully"; 
} else {     
	echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
}

$scotties_pass = password_hash('Scottie123!@#' PASSWORD_DEFAULT);
$sql = "INSERT INTO persons (username, name, surname, password) VALUES ('spippen', 'Scottie', 'Pippen', '$scotties_pass')";  

if (mysqli_query($conn, $sql)) {     
	echo "New record created successfully"; 
} else {     
	echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
}

$denniss_pass = password_hash('Dennis123!@#', PASSWORD_DEFAULT);
$sql = "INSERT INTO persons (username, name, surname, password) VALUES ('drodman', 'Dennis', 'Rodman', '$deniss_pass')";
if mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); 
?> 

