<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "top2000";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT id, name, country, jaar FROM artist";
$result = $conn->query($sql);


?>