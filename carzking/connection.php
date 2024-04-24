<?php 
// This is To Avoid Undefined Index Error Message !!!!!!!
error_reporting (E_ALL ^ E_NOTICE);
 ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cars";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    
}
?>