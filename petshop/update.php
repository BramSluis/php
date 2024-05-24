<?php

include_once 'connect.php';
$conn = dbconnect();
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$select = $conn->query("SELECT * FROM pet WHERE id=$id");
$row = $select->fetch_assoc();
?>
<?php
if (isset($_POST['verstuur'])) {
    
    // Waardes van formulier ophalen en aan variabele geven
    $petname = $_POST['petname'];
    $species = $_POST['species'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $owner = $_POST['owner'];
    // UPDATE query maken om geüpdatete data van een rij te kunnen verwerken in database
    $query = "UPDATE pet SET `petname` = '".$petname."',
    species = '".$species."',
    gender = '".$gender."',
    birthdate = '".$birthdate."',
    owner= '".$owner."'
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
<input type="text" onkeyup="errorform()" name="petname" id="petname" value="<?php echo $row['pet_name']; ?>">
    <br>
    <input type="text" name="species"id="species" value="<?php echo $row['species'];?>"
    <br>
    <input type="date" name="birthdate" onkeyup="errorform()" id="birthdate" value="<?php echo $row['birthdate'];?>"> 
    <br>
   <!-- <button type="submit" id="verstuur" disabled>submit</button> <br> -->
   <input type="submit" value="submit" id="verstuur" name="verstuur" disabled>
</form>

<div id="results"></div> 
    
</body>
</html>

