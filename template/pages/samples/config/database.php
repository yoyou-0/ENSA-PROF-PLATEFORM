<?php

    $hostname = "remotemysql.com";
    $username = "1xUW9ATMAK";
    $password = "surCRgjxjN";

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=1xUW9ATMAK", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Database connected successfully";
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

?>