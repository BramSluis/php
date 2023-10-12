<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method ="post">
    gewicht in kg: <input type="text"  name= "gewicht">
    <input type="submit"> 
</form>
<br>
<form method="post">
 lengte in meters :   <input type="text" name="lengte">
    <input type="submit"> 
</form> 
</body>
</html>

<?php
if(isset($_POST['gewicht'])){

}

$gewicht = $_POST['gewicht'];

$lengte = $_POST['lengte'];

$bmi = $gewicht / pow($lengte,2);

echo "$bmi";


