<?php

$clientId = (int) $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$date = $_POST['date'];
$sex = $_POST['sexo'];
$obs = $_POST['obs'];

include '../includes/connection.php';

// Insert data in database
$sql = "UPDATE `cadastro-de-clientes`.clientes SET name='$name', email='$email', cpf='$cpf', date='$date', sex='$sex', obs='$obs' WHERE id=$clientId";
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

header("location: ./ ");