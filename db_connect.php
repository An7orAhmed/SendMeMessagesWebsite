<?php
    // Prepare variables for database connection
    $username = "-------------";
    $password = "-------------";
    $server = "localhost";
    $database = "-------------";

    // Create connection
    $conn = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    } 
?>