<?php
$dsn = 'mysql:dbname=bank;host=localhost';
$user = 'root';
$password = '';

try {
    $con = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}