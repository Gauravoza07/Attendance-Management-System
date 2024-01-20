<?php
$servername = "localhost"; 
$username = "root"; 
$password = "Password123#@!"; 
$database = "PHP"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>