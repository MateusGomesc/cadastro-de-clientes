<?php

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$data_lancamento = $_POST['data_lancamento'];
$numero_paginas = $_POST['numero_paginas'];
$sintese = $_POST['sintese'];

include '../includes/connection.php';

// Insert data in database
$sql = "INSERT INTO livros(titulo, autor, data_lancamento, numero_paginas, sintese) VALUES ('$titulo', '$autor', '$data_lancamento', '$numero_paginas', '$sintese')";
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

header("location: ./ ");