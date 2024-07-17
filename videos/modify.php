<?php

$videoId = (int) $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$data = $_POST['data'];
$video = $_POST['video'];
$duracao = $_POST['duracao'];
$descricao = $_POST['descricao'];

include '../includes/connection.php';

// Insert data in database
$sql = "UPDATE `cadastro-de-clientes`.videos SET titulo='$titulo', autor='$autor', data='$data', video='$video', duracao='$duracao', descricao='$descricao' WHERE id=$videoId";
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

header("location: ./ ");