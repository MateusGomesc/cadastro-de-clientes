<?php

$name = $_POST['name'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$date = $_POST['date'];
$sex = $_POST['sexo'];
$obs = $_POST['obs'];

include '../includes/connection.php';

// Insert data in database
$sql = "INSERT INTO clientes(name, email, cpf, date, sex, obs) VALUES ('$name', '$email', '$cpf', '$date', '$sex',' $obs')";
$result = $connection->query($sql);

header("locatin: ./ ");