<?php

declare(strict_types=1);

function mod_item(object $pdo, string $id, string $itemName, string $category, string $value) 
{
    item_mod($pdo, $id, $itemName, $category, $value);
}