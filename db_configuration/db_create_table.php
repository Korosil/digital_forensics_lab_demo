 <?php 
$servername = "localhost";

/*************************** PLEASE, FILL IN YOUR SERVER'S USERNAME AND PASSWORD *********************/
$username = ""; 
$password = ""; 
/*****************************************************************************************************/
$dbname = "ilias_korompilis_demo_db";  

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection 
if (!$conn) {     
	die("Connection failed: " . mysqli_connect_error()); 
}  
// sql to create table 
$sql = "CREATE TABLE persons ( 
			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			username VARCHAR(50) NOT NULL UNIQUE, 
			name VARCHAR(255) NOT NULL, 
			surname VARCHAR(255) NOT NULL, 
			password VARCHAR(255) NOT NULL, 
			created_at DATETIME DEFAULT CURRENT_TIMESTAMP)";  
if (mysqli_query($conn, $sql)) {     
	echo "Table persons created successfully"; 
} else {     
	echo "Error creating table: " . mysqli_error($conn); 
}  
mysqli_close($conn); 
?> 
