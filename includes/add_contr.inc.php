<?php

declare(strict_types=1);

function is_input_empty(string $itemName, string $value) 
{
    if (empty($itemName) || empty($value)){
        return true;
    } else{
        return false;
    }
}


function create_item(object $pdo, string $itemName, string $category, string $value) 
{
    set_item($pdo, $itemName, $category, $value);
}