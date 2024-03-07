<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino de php moderno :)</title>
</head>
<body>
    <?php 
        $n1 = $_GET['n1'] ?? 0;
        $n2 = $_GET['n2'] ?? 0;
        $media = ($n1 + $n2) / 2;
    ?>
    <section>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n1">Nota 1:</label>
            <input type="number" name="n1" id="n1" min="0" max="10" value="<?=$n1?>">
            <label for="n2">Nota 2:</label>
            <input type="number" name="n2" id="n2" min="0" max="10" value="<?=$n2?>">
            <input type="submit" value="Média">
        </form>     
    </section>
        <h2>Resposta</h2>
        <?php 
            echo "A média das suas notas é: $media"
        ?>
</body>
</html>