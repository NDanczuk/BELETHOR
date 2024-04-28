<?php

declare(strict_types=1);


function set_item(object $pdo, string $itemName, string $category, string $value) 
{
    $query = "INSERT INTO item (itemName, category, val) VALUES (:itemName, :category, :val);";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":itemName", $itemName);
    $stmt->bindParam(":category", $category);
    $stmt->bindParam(":val", $value);
    $stmt->execute();
}