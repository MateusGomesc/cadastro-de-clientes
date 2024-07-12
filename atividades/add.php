<?php

$name = $_POST['name'];
$hour_start = $_POST['hour_start'];
$hour_stop = $_POST['hour_stop'];
$period = $_POST['period'];
$number = $_POST['number'];
$description = $_POST['description'];

include '../includes/connection.php';

// Insert data in database
$sql = "INSERT INTO atividades(name, hour_start, hour_stop, period, number, description) VALUES ('$name', '$hour_start', '$hour_stop', '$period', '$number',' $description')";
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

header("location: ./ ");