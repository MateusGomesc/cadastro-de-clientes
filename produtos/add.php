<?php

$name = $_POST['name'];
$category = $_POST['category'];
$price = floatval(str_replace(',' ,'.' ,$_POST['price']));
echo $price;

include '../includes/connection.php';

// Insert data in database
$sql = "INSERT INTO produtos(name, category, price) VALUES ('$name', '$category', '$price')";
$result = $connection->query($sql);

header("location: ./");