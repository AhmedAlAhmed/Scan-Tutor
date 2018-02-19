<?php

static $host = "localhost";
$user = "root";
$pass = "";
$conn = null;

try {

    $conn = new PDO("mysql:host=$host;dbname=scan_tutor_db;", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "error, " . $e->getMessage();
}

class DBConnection
{

    public static function getInstance()
    {

    }
}




?>