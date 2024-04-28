<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Item</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "GET") 
        {
            $id_2 = $_GET['id'];
        }
    ?>

        <h3>Modificar item</h3>
        <form action="includes/mod.inc.php" method="post">
            <input type="hidden" name="id" value="<?php $id_2; ?>">
            <input type="text" name="itemName" placeholder="Nome do item">
            <br>
            <br>
            <select name="category">
                <option value="Armas">Armas</option>
                <option value="Armaduras">Armaduras</option>
                <option value="Poções">Poções</option>
                <option value="Pergaminhos">Pergaminhos</option>
                <option value="Comida">Comida</option>
                <option value="Ingredientes">Ingredientes</option>
                <option value="Livros">Livros</option>
                <option value="Diversos">Diversos</option>
            </select>
            <br>
            <br>
            <input type="text" name="value" placeholder="Valor (Moedas)">
            <br>
            <br>
            <button>Modificar</button>
        </form>
        
</body>
</html>