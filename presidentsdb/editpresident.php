<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "randombs";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $db);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
//echo "Connected successfully";
var_dump($_POST);
if(isset($_POST['name']) && isset($_POST['periodofruling']) && isset($_POST['redorblue'])){ 

$sql = "INSERT INTO presidents (name, periodofruling, redorblue) 
        VALUES ('". $_POST['name']. "', '". $_POST['periodofruling']."', '". $_POST['redorblue']."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
else{
    echo "jammerjoh";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <header> PRESIDENT PRODUCER AKA PP </header> 
  <main> 
    <form method="post">
        <input type="text" name="name"> <br>
        <input type="text" name="periodofruling"><br>
        <input type="text" name="redorblue"> 
        <input type="submit">
    </form>
    </main>
</body>
</html>


