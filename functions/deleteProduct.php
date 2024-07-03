<?php

if(isset($_GET['id'])){
    $productId = $_GET['id'];

    include '../includes/connection.php';
    $sql = 'DELETE FROM produtos WHERE id=' . $productId;

    $result = $connection->query($sql);
    header('location: ../produtos');
}