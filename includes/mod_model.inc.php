<?php

declare(strict_types=1);

function item_mod(object $pdo, string $id, string $itemName, string $category, string $value) 
{
    try {
        $query = "UPDATE item SET itemName = :itemName, category = :category, val = :val WHERE id = :id;";
        $stmt = $pdo->prepare($query);

        if (!$stmt) {
            throw new Exception("Falha ao preparar a declaração.");
        }

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":itemName", $itemName);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":val", $value);

        if (!$stmt->execute()) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Erro ao executar a query: " . $errorInfo[2]);
        }

        echo "Query executada com sucesso!";
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
