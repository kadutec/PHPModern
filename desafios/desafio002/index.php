<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <main>
        <?php 
            echo "<h1>Trabalhando com número aleatórios</h1>";
            $num = mt_rand(0, 100);
            echo "<p>Gerando um valor aleatório de 0 a 100...<br>
                    O valor gerado foi <strong>$num</strong></p>";
        ?>
        <button type="button" onclick="javascript:document.location.reload()">&#x1F504;Gerar outro</button>
    </main>
</body>
</html>