<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <?php 
            echo "<h1>Resultado Final</h1>";
            $num = $_GET["num"] ?? "sem numero";
            echo "<p>O número escolhido foi <strong>$num</strong>!<br>
                O seu <em>antecessor</em> é <strong>" . ($num - 1) . "</strong>!<br>
                O seu <em>sucessor</em> é <strong>" . ($num + 1) . "</strong>!</p>";
        ?>
        <button type="button" onclick="javascript:history.go(-1)">&#x2190; Voltar</button>
    </main>
</body>
</html>