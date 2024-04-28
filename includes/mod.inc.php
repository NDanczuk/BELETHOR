<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

$id = $_POST["id"];
$itemName = $_POST["itemName"];
$category = $_POST["category"];
$value = $_POST["value"];

try{

    require_once 'dbh.inc.php';
    require_once 'mod_model.inc.php';
    require_once 'mod_contr.inc.php';


    mod_item($pdo, $id, $itemName, $category, $value);

   // header("Location: ../index.php?mod=success");

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