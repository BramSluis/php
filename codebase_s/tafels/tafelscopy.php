<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht x</title>
</head>
<body>
    
<form method="post" >
    tafel: <input type="text" name="tafel"><br>
    <input type="submit">
</form>

<?php
if(isset($_POST['tafel'])){
    $t = $_POST['tafel'];
    for($b = 1; $b <= 1000; $b++) {
        echo $b. "x".$t."=". ($b*$t). "<br>"; 
    //  echo $b. " x ". $t. " = ". ($b*$t). "<br>"; 

    }
}

?>
</body>
</html>

