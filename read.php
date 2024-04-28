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
    <?php
        if(isset($_GET['category'])) 
        {
        $category = $_GET['category'];

        require_once 'includes/dbh.inc.php'; 
        require_once 'includes/read_model.inc.php'; 

        $items = read_item($pdo, $category);
    ?>

    <h2>Itens da Categoria "<?php echo htmlspecialchars($category); ?>"</h2>
    <?php if (!empty($items)): ?>
        <table>
            <tr>
                <th>Nome</th>
                <th>Valor (Moedas)</th>
            </tr>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td><?php echo isset($item['itemName']) ? htmlspecialchars($item['itemName']) : 'Nome não disponível'; ?></td>
                    <td><?php echo isset($item['val']) ? htmlspecialchars($item['val']) : 'Valor não disponível'; ?></td>
                    <td><a href="includes/sell.inc.php?id=<?php echo $item['id']; ?>&itemName=<?php echo urlencode($item['itemName']); ?>"><button type="button">Vender</button></a></td>
                    <!-- <td><a href="mod.php?id=<?php echo $item['id']; ?>"><button type="button">Modificar</button></a></td> -->
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum item encontrado para esta categoria.</p>
    <?php endif;
        } else {
        echo "<p>Categoria não especificada.</p>";
        }
    ?>

</body>
</html>
    </body>
</html> 