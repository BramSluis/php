<?php
$in = "brambo";
$pw = "sluis";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> login scherm </h1>
    <form method="post">
   username: <input type="text" name="in">
    <br>
    password: <input type="password" name="pw">
    <input type="submit">
</form> 
</body>
</html>
<?php
$log = $_POST['in'];
$pass = $_POST['pw'];
if(isset($_POST['in'])&& (isset($_post['pw'])));
if ($log == $in && $pass == $pw) {
   header('Location:logincorrect.html');
   
}
else header('Location:foutinlog.html');