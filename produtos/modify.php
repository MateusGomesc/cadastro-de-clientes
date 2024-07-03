<?php

$productId = (int) $_GET['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];

include '../includes/connection.php';

// Insert data in database
$sql = "UPDATE `cadastro-de-clientes`.produtos SET name='$name', category='$category', price='$price' WHERE id=$productId";
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

header("location: ./ ");