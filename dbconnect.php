<?php
$host = 'localhost';
$port = 5434;
$dbname = 'SpeedyTyper';
$username = 'postgres';
$password = 'goaway';

session_start();
try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
    }
catch(PDOException $pe) {
    die("Warning:" . $pe->getMessage());
}
?>