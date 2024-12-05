<?php
$host = 'localhost'; // atau nama host server
$dbname = 'portofolio_db'; // nama database
$username = 'root'; // username database
$password = ''; // password database

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error connecting to database: " . $e->getMessage());
}
?>