<?php

declare(strict_types=1);

function sell_item(object $pdo, string $id) 
{
    delete_item($pdo, $id);
}

function sell_reg($pdo, $itemName)
{
    return reg_sell($pdo, $itemName);
}