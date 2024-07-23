<?php

if(isset($_GET['id'])){
    $bookId = $_GET['id'];

    include '../includes/connection.php';

    // delete client with id
    $sql = 'DELETE FROM livros WHERE id=' . $bookId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    header('location: ../livros');
}