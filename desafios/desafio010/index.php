<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;

    $idade = $ano - $nasc;

    ?>
    <main>
        <h1>Idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Em que ano você nasceu? </label>
            <input type="number" name="nasc" id="nasc" min="1900" max="2024" value="<?= $nasc ?>">
            <label for="num">Quer saber sua idade em que ano? </label>
            <input type="number" name="ano" id="ano" min="<?= $nasc ?>" value="<?= $ano ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>        
    <section>
        <h2>Resposta</h2>
        <?php 
            echo "Quem nasceu em $nasc vai ter $idade anos em $ano"
        ?>
    </section>
</body>
</html>