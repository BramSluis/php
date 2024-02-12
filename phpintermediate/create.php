<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $country = $_POST['country'];
    $jaar = $_POST['jaar'];

    $query = "INSERT INTO artist (`name`, country, jaar)
    VALUES('$name', '$country', '$jaar')";

    $conn->execute_query($query);
    header("location: index.php");
 



}