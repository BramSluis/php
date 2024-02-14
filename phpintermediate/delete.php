<?php

include_once ("connect.php");
$conn = dbconnect();

if(isset($_GET["id"])){
        $id = $_GET['id'];
}

$query = "DELETE FROM artist WHERE id=$id";

$stmt = $conn->prepare($query);

$stmt->execute();

header("location: index.php");

?>