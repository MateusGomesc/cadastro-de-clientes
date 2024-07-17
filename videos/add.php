<?php

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$data = $_POST['data'];
$video = $_POST['video'];
$duracao = $_POST['duracao'];
$descricao = $_POST['descricao'];

include '../includes/connection.php';

// Insert data in database
$sql = "INSERT INTO videos(titulo, autor, data, video, duracao, descricao) VALUES ('$titulo', '$autor', '$data', '$video', '$duracao',' $descricao')";
$result = $connection->query($sql);
echo $sql;

// close connection
mysqli_close($connection);

header("location: ./ ");