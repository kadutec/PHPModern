<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
    $num = $_GET['num'] ?? 1;
    $rq = $num ** (1/2);
    $rc = $num ** (1/3);
    ?>
    <main>
        <h1>Raizes</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Numero: </label>
            <input type="number" name="num" id="num" min="0" value="<?= $num ?>" step="0.1">
            <input type="submit" value="Calcular">
        </form>
    </main>        
    <section>
        <h2>Resposta</h2>
        <?php 
            echo "A raiz quadrade de <strong>$num</strong> é <strong>$rq</strong> e a raiz cúbica é <strong>$rc</strong>";
        ?>
    </section>
</body>
</html>