<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $itemName = $_POST["itemName"];
    $category = $_POST["category"];
    $value = $_POST["value"];

    try{

        require_once 'dbh.inc.php';
        require_once 'add_model.inc.php';
        require_once 'add_contr.inc.php';


        $errors = []; 

        if (is_input_empty($itemName, $value)) {
            $errors["empty_input"] = "Preencha todos os campos!";
        }

        require_once 'config_session.inc.php';


        if ($errors) {
            $_SESSION["errors_add"] = $errors;

            $addData = [
                    "itemName" => $itemName,
                    "category" => $category,
                    "value" => $value,

            ];
            $_SESSION["add_data"] = $addData;

            header("Location: ../index.php");
            die();
        }


        create_item($pdo, $itemName, $category, $value);

        header("Location: ../index.php?add=success");

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