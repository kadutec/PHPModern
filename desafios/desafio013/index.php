<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
    $saque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Qual o valor do saque? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: .7em;"><sup>*</sup>Notas disponíveis: 100R$, 50R$, 10R$ e 5R$</p>
            <input type="submit" value="Sacar">
        </form>
    </main>    
    <?php 
        $resto = $saque;

        $tot100 = (int)($resto / 100);
        $resto %= 100;
    
        $tot50 = (int)($resto / 50);
        $resto %= 50;
    
        $tot10 = (int)($resto / 10);
        $resto %= 10;
    
        $tot5 = (int)($resto / 5);
        $resto %= 5;
    ?>    
    <section>
        <h2>Resposta</h2>
        <p>O caixa eletronico vai te entregar as seguintes notas</p>
        <ul>
            <li><img src="imgs/100-reais.jpg" alt="nota de 100">x<?=$tot100?></li>
            <li><img src="imgs/50-reais.jpg" alt="nota de 50">x<?=$tot50?></li>
            <li><img src="imgs/10-reais.jpg" alt="nota de 10">x<?=$tot10?></li>
            <li><img src="imgs/5-reais.jpg" alt="nota de 5">x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>