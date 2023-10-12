<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boottocht</title>
    <form method="get">
age: <input type="text" name="age"><br>
<input type="submit">
</form>
</head>
<body>
<?php 
$prijs = 12;

$age = $_GET['age'];


    
if($age <= 2) { 

    $prijs = 0;

}

elseif($age >=3 && $age <=16) {

    $prijs= $prijs *0.5;

}

elseif($age >= 65){

    $prijs= $prijs *0.75;

}


if($prijs == 0 ){ 

    echo "Je ticket is gratis";

}

else{

    echo "je ticket is $prijs euro";

} 
?>

</body>
</html>





