<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cijfer</title>
  <form method="get">
cijfer: <input type="text" name="cijfer"><br>
<input type="submit">
</form>

</head>
<body>
<?php 

$cijfer = $_GET['cijfer'];


if($cijfer >= 5.5)
{
    echo " gefeliciteerd u heeft een voldoende";
}

else 
{
  echo "jammer joh dikke vette onvoldoende maat!";
}

?> 
</body>
</html>



