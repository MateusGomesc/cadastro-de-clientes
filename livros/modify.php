<?php

$bookId = (int) $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$data_lancamento = $_POST['data_lancamento'];
$numero_paginas = $_POST['numero_paginas'];
$sintese = $_POST['sintese'];

include '../includes/connection.php';

// Insert data in database
$sql = "UPDATE `cadastro-de-clientes`.livros SET titulo='$titulo', autor='$autor', data_lancamento='$data_lancamento', numero_paginas='$numero_paginas', sintese='$sintese' WHERE id=$bookId";
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

header("location: ./ ");