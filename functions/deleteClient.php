<?php

if(isset($_GET['id'])){
    $clientId = $_GET['id'];

    include '../includes/connection.php';

    // delete client with id
    $sql = 'DELETE FROM clientes WHERE id=' . $clientId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    header('location: ../clientes');
}