<?php

include 'sddia4con.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$select = $conn->query("SELECT * FROM artist WHERE id=$id");
$row = $select->fetch_assoc();

if (isset($_POST['submit'])) {
    
    // Get values from the form
    $name = $_POST['name'];
    $country = $_POST['country'];
    $jaar = $_POST['jaar'];
    
    // Construct the UPDATE query
    $query = "UPDATE artist SET name = ?, country = ? WHERE id = ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($query);
    
    // Bind parameters
    $stmt->bind_param("ssi", $name, $country, $id);
    
    // Execute the statement
    $stmt->execute();
    
    // Redirect back to index.php
    header("location: sddia4.php");
    exit(); // Ensure script execution stops after redirection
}
?>

<form method="post"> 
    <input type="text" name="name" value="<?php echo $row['name']; ?>">
    <br>
    <input type="text" name="country" value="<?php echo $row['country']; ?>">
    <br>
    <input type="text" name="jaar" value="<?php echo $row['jaar']; ?>"> 
    <br>
    <input type="submit" name="submit" value="Updaten"> <br>
</form>
