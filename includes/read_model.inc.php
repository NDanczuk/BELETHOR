<?php

function read_item(object $pdo, string $category)
{
    $query = "SELECT * FROM item WHERE category = :category";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":category", $category);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}