<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de divisão</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
    $min = 1412;
    $sal = $_GET['s1'] ?? $min;
    
    $tot = intdiv($sal, $min);

    $dif = $sal % $min;
    ?>
    <main>
        <h1>Anatomia de divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="s1">Salário: </label>
            <input type="number" name="s1" id="s1" min="0" value="<?= $sal ?>" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </main>        
    <section>
        <h2>Resposta</h2>
        <?php 
            echo "Quem ganha <strong>R$" . number_format($sal, 2, ',', ''). ",</strong> ganha um total de $tot salários minimos + <strong>R$$dif</strong>";
        ?>
    </section>
</body>
</html>