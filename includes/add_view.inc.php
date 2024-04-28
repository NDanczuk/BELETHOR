<?php

declare(strict_types=1);

function check_add_errors() 
{
    if (isset($_GET["add"]) && $_GET["add"] === "success") {
        echo '<br>';
        echo '<p class="form-success">Item adicionado!</p>';
    }
}


