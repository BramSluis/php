<?php
include_once 'conn.php';
///


$conn = dbconnect();
////
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        name <input type="text" id="petname" name="petname"> <br>
        soort <input type="text" id="species" name="species"> <br>
        geslacht <input type="text" id="gender" name="gender"> <br>
         geboortedatum<input type="date" name="birthdate" id="birthdate"><br>
         eigenaar <input type="text" name="owner" id="owner">
         <button type = "submit" id="verstuur" ></button>

    </form>
    <br>
    <?php include 'read.php'; ?>
</body>
</html>