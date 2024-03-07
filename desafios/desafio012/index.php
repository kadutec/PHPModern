<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php   
    $tempo = $_GET['tempo'] ?? 0;
    
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" min="0" step="1">
            <input type="submit" value="Calcular">
        </form>
    </main>
        <?php 
            $sobra = $tempo;

            $semana = (int)($sobra / 604800);
            $sobra = $sobra % 604800;
        
            $dia = (int)($sobra / 84400);
            $sobra = $sobra % 84400;
        
            $hora = (int)($sobra / 3600);
            $sobra = $sobra % 3600;
        
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;
        
            $segundo = $sobra;
        ?>        
    <section>
        <h2>Resposta</h2>
        <p>Analisando o valor digitado, <?= $tempo?> segundos equivalem um total de: </p>
        <ul>
            <li><?= $semana?> semanas</li>
            <li><?= $dia?> dias</li>
            <li><?= $hora?> horas</li>
            <li><?= $minuto?> minutos</li>
            <li><?= $segundo?> segundos</li>
        </ul>

    </section>

</body>
</html>