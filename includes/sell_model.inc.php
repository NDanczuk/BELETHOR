<?php

declare(strict_types=1);

function delete_item(object $pdo, string $id) 
{
    $query = "DELETE FROM item WHERE id=:id;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":id", $id);
    $stmt->execute();
}

function reg_sell(object $pdo, string $itemName) 
{
    $query = "INSERT INTO registro (soldItem) VALUES (:soldItem);";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":soldItem", $itemName);
    $stmt->execute();
}