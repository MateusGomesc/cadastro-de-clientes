<?php

if(isset($_GET['id'])){
    $participantId = $_GET['id'];

    include '../includes/connection.php';

    // delete client with id
    $sql = 'DELETE FROM participantes WHERE id=' . $participantId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    header('location: ../participantes');
}