<?php

if(isset($_GET['id'])){
    $videoId = $_GET['id'];

    include '../includes/connection.php';

    // delete client with id
    $sql = 'DELETE FROM videos WHERE id=' . $videoId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    header('location: ../videos');
}