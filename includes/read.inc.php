<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $category = $_POST["category"];

    try {
        require_once 'dbh.inc.php'; 
        require_once 'read_model.inc.php'; 
        require_once 'read_contr.inc.php'; 


        $items = see_item($pdo, $category);

        header("Location: ../read.php?category=$category");


        $pdo = null;
        $stmt = null;
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}
