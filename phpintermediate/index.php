<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>todolist</title>
</head>
<body>
    <form method="post" action="create.php">
    <input type="text" placeholder ="Naam" name="name" id="name"> <br>
    <input type="text" placeholder="Country" name="country" id="country"> <br>
    <input type="text" name="jaar" id="jaar"> <br>
    <input type="submit" name="submit" value="verzenden"> <br>    
    </form> <br>
    <?php include 'read.php'; ?>
   <script src="db.js"></script> 

    <div id="results">

    </div>
</body>
</html>