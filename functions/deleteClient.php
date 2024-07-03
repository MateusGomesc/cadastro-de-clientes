<?php

if(isset($_GET['id'])){
    $clientId = $_GET['id'];

    include '../includes/connection.php';
    $sql = 'DELETE FROM clientes WHERE id=' . $clientId;

    $result = $connection->query($sql);
    header('location: ../clientes');
}