<?php

if(isset($_GET['id'])){
    $productId = $_GET['id'];

    include '../includes/connection.php';

    // delete product with id
    $sql = 'DELETE FROM produtos WHERE id=' . $productId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    header('location: ../produtos');
}