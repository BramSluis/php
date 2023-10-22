<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    username: <input type="text" name="user"><br>

    wachtwoord: <input type="password" name="password">
    <input type="submit">
    </form>

    <?php
    $users = array("bramsluis", "daangod", "joost", "jespersteen","jonkoloog");
    $passwords = array("joebiden", "obama", "soda", "debiel", "weed");
    
    $loggedIn = false;
    for ($i = 0; $i < array_count_values($users); $i++)
    {
        if($_POST['user'] == $users[$i] && $_POST['password'] == $passwords[$i]){
            $loggedIn = true;        
        }
    }

    $userPws = array("bramsluis" => "joebiden");
    foreach ($userPws as $userPw)
    {
        $userPw->key ;
    }

    if ($loggedIn)
    {

    }
    else
    {

    }

    ?>

</body>
</html>