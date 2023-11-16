<?php

array(
    array("brambo" => "sluis", "jesper" => "rocksforbrains", "duncan" => "theflash", "olle" => "formule1", "sven" => "jonkoloog"),
    array("brambo" => "sluis", "jesper" => "rocksforbrains", "duncan" => "theflash", "olle" => "formule1", "sven" => "jonkoloog")
);

include "database/testdb.php";

if(isset($_POST['username']) && isset($_POST['password'])) {
    
    // SELECT * FROM `users` WHERE `username` = 'brambo' AND `password` = '1234';

    $sql = "SELECT * FROM `users` WHERE `username` = '" . $_POST['username'] . "' AND `password` = '" . $_POST['password'] . "';";
    
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    if ($row != null)
    {
      header('Location:logincorrect.html'); 
    } else {
      header('Location:foutinlog.html');
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="simplelogin.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> login scherm </h1>
    <form method="post">
        username: <input type="text" name="username"><br>
        password: <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>