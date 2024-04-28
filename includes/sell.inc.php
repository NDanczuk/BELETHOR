<?php

if ($_SERVER["REQUEST_METHOD"] === "GET") 
{
    $id = $_GET["id"];
    
    try{

        require_once 'dbh.inc.php';
        require_once 'sell_model.inc.php';
        require_once 'sell_contr.inc.php';

        sell_item($pdo, $id);

        $itemName = isset($_GET["itemName"]) ? urldecode($_GET["itemName"]) : "";

        sell_reg($pdo, $itemName);

        header("Location: ../index.php?sell=success");

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