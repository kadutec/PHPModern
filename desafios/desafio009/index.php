<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
    $n1 = $_GET['n1'] ?? 0;
    $n2 = $_GET['n2'] ?? 0;
    $p1 = $_GET['p1'] ?? 1;
    $p2 = $_GET['p2'] ?? 1;

    $media = ($n1 + $n2) / 2;
    $mediap = ($n1 * $p1 + $n2 * $p2) / ($p1 + $p2);
    ?>
    <main>
        <h1>Médias</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Nota 1: </label>
            <input type="number" name="n1" id="n1" min="0" value="<?= $n1 ?>" step="0.01">
            <label for="num">Peso 1: </label>
            <input type="number" name="p1" id="p1" min="0" value="<?= $p1 ?>" step="0.01">
            <label for="num">Nota 2: </label>
            <input type="number" name="n2" id="n2" min="0" value="<?= $n2 ?>" step="0.01">
            <label for="num">Peso 2: </label>
            <input type="number" name="p2" id="p2" min="0" value="<?= $p2 ?>" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </main>        
    <section>
        <h2>Resposta</h2>
        <?php 
            echo "<p>Sua média é = $media<br>
                <br> Média ponderada é = ".number_format($mediap, 2, ',', ".")."!</p>";
        ?>
    </section>
</body>
</html>