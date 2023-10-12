<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

   getal: <input type="text" name="getal"><br> 
    <input type="submit" name="btn">


    </form>
</body>
</html>

<?php

    // if ($_POST)
    // if (isset($_POST['btn']))
    if(isset($_POST['getal'])){
        $getal = $_POST['getal'];
        $uitkomst = $getal / 2;
        
        if (is_int($uitkomst))
        {
            echo "even";
        }
        else
        {
            echo "oneven";
        }
    }



?>