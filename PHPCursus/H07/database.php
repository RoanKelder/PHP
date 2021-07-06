<?php
try {

    $port = "3308";
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=school" . ';port=' . $port, $username, $password);
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . '<br>';
}
