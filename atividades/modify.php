<?php

$activityId = (int) $_POST['id'];
$name = $_POST['name'];
$hour_start = $_POST['hour_start'];
$hour_stop = $_POST['hour_stop'];
$period = $_POST['period'];
$number = $_POST['number'];
$description = $_POST['description'];

include '../includes/connection.php';

// Insert data in database
$sql = "UPDATE `cadastro-de-clientes`.atividades SET name='$name', hour_start='$hour_start', hour_stop='$hour_stop', period='$period', number='$number', description='$description' WHERE id=$activityId";
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

header("location: ./ ");