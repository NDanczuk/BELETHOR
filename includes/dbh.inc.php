<?php

$dsn = "mysql:host=167.99.252.245;dbname=ESW2024_E7_NicolasDB";
$dbusername = "ESW2024_E7";
$dbpassword = "123mudar";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}