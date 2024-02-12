<?php

include 'connect.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$select = $conn->query("SELECT * FROM artist WHERE id=$id");
$row = $select->fetch_assoc();
?>
<?php
if (isset($_POST['verstuur'])) {
    
    // Waardes van formulier ophalen en aan variabele geven
    $name = $_POST['name'];
    $country = $_POST['country'];
    $jaar = $_POST['jaar'];
    // UPDATE query maken om geüpdatete data van een rij te kunnen verwerken in database
    $query = "UPDATE artist SET `name` = '".$name."',
    country = '".$country."',
    jaar = '".$jaar."'
    WHERE id=$id";
    // Statement voorbereiden
    $stmt = $conn->prepare($query);
    // Query uitvoeren
    $stmt->execute();
    // Weer teruggaan naar index.php
    header("location: index.php");
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="db.js"> </script>
</head>
<body>
<form method="post">
<input type="text" onkeyup="errorform()" name="name" id="name" value="<?php echo $row['name']; ?>">
    <br>
    <input type="text" name="country"id="country" value="<?php echo $row['country'];?>"
    <br>
    <input type="text" name="jaar" onkeyup="errorform()" id="jaar" value="<?php echo $row['jaar'];?>"> 
    <br>
   <!-- <button type="submit" id="verstuur" disabled>submit</button> <br> -->
   <input type="submit" value="submit" id="verstuur" name="verstuur" disabled>
</form>

<div id="results"></div> 
    
</body>
</html>

