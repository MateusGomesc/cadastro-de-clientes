<?php

$participantId = (int) $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$complemento = $_POST['complemento'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];

// verify checkbox
if(isset($_POST['selecionado'])){
    $selecionado = 1;
}
else{
    $selecionado = 0;
}

include '../includes/connection.php';

// Insert data in database
$sql = "UPDATE `cadastro-de-clientes`.participantes SET nome='$nome', email='$email', cpf='$cpf', rua='$rua', bairro='$bairro', cidade='$cidade', complemento='$complemento', numero='$numero', cep='$cep', telefone='$telefone', selecionado='$selecionado' WHERE id=$participantId";
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

header("location: ./ ");