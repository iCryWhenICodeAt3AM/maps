<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $schema = "mapdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $schema);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    
?>