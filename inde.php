<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $n1 = $_GET['n1'] ?? 1;
        $p1 = $_GET['p1'] ?? 1;
        $n2 = $_GET['n2'] ?? 1;
        $p2 = $_GET['p2'] ?? 1;

        $media = ($n1 + $n2) / 2;
        $mediap = ($n1 * $p1 + $n2 * $p2) / ($n1 + $n2);
    ?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Nota 1: </label>
            <input type="number" name="n1" id="n1" min="1" max="10" value="<?= $n1 ?>" step="0.01">
            <label for="p1">Peso 1: </label>
            <input type="number" name="p1" id="p1" min="1" max="10" value="<?= $p1 ?>" step="0.01">
            <label for="n2">Nota 2: </label>
            <input type="number" name="n2" id="n2" min="1" max="10" value="<?= $n2 ?>" step="0.01">
            <label for="p2">Peso 2: </label>
            <input type="number" name="p2" id="p2" min="1" max="10" value="<?= $p2 ?>" step="0.01">
            <input type="submit" value="Média ponderada">
        </form>
    </section>
    <section>
        <h2>Resposta</h2>
        <?php 
            echo "A média de suas notas é: " . "$media <br>" . " e a sua média ponderada é: " . "$mediap";
        ?>
    </section>
</body>
</html>