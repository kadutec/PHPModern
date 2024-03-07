<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preço</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
    $preco = $_GET['preco'] ?? 0;
    $porcento = $_GET['porcento'] ?? 0;


    ?>
    <main>
        <h1>Reajuste de preço</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Preço do produto (R$): </label>
            <input type="number" name="preco" id="preco" min="0" step="0.01" value="<?=$preco?>">
            <label for="porcento">Qual o percentual de reajuste? <strong><span id="p">?</span>%</strong> </label>
            <input type="range" name="porcento" id="porcento" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcento?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
        <?php 
            $aumento = $preco * $porcento / 100;
            $novo = $preco + $aumento;
        ?>        
    <section>
        <h2>Resposta</h2>
        <p>O produto R$<?=$preco?>, com o <?=$porcento?>% de aumento vai passar a custar R$<?=$novo?> a partir de agora</p>
    </section>
    <script>
        mudaValor();
        function mudaValor(){
            p.innerText = porcento.value;
        };
    </script>
</body>
</html>