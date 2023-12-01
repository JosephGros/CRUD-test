<?php

$servername = "db";
$username = "mariadb";
$password = "mariadb";
$dbname = "mariadb";

try {
//mariadb eller my sql så:
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}






?>