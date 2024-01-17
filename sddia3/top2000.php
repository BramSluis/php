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

$sql = "SELECT id, name, country FROM artist";
$result = $conn->query($sql);


?>

<?php
if(isset($_POST['name']) && isset($_POST['country'])){ 

$sql = "INSERT INTO artist ( name, country) 
        VALUES ('". $_POST['name']. "', '". $_POST['country']."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
else{
    echo "jammerjoh";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
   <table> 
    <tr>

     <?php while($row = $result->fetch_assoc()) {
      ?>
      <td> <?php echo $row['id']?> </td>
      <td> <?php echo $row['name']?> </td>
      <td> <?php echo $row['country']?> </td>
</tr>
<?php 
     }
     ?>
</table>
<form method="post">
        <input type="text" name="name"> <br>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>
</body>
</html>
<?php  
$conn->close();
?>