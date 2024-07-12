<?php

if(isset($_GET['id'])){
    $activityId = (int) $_GET['id'];

    include '../includes/connection.php';

    // delete client with id
    $sql = 'DELETE FROM atividades WHERE id=' . $activityId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    header('location: ./');
}