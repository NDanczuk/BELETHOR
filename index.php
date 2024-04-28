<?php
require_once 'includes/add_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belethor's</title>
    </head>
    <body>
        <img src="img/belethor.jpg" alt="Belethor" width="150" height="150">
        <h1>Bem vindo a loja geral de Belethor, o que deseja fazer?</h1>
        <h3>Adicionar item ao estoque</h3>
        <form action="includes/add.inc.php" method="post">
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
            <button>Adicionar</button>
        </form>
        
        <?php
            check_add_errors();
        ?>
        
        <h3>Ver itens do estoque</h3>
        <form action="includes/read.inc.php" method="post">
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
        <button>Buscar</button>
        </form>
    </body>
</html>  