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
        $num = $_POST["num"] ?? 0;
            echo "<h1>Analisador de real</h1>";
            echo "<p>Analisando o numero passado: <strong>".number_format($num, 3, ",", ".")."</strong></p>";

            $int  = (int)$num;
            $fra = $num - $int;
            
            echo "<ul><li>A parte inteira do número é: ".number_format($int, 0, ",", ".")." </li><li>A parte fracionária do número é: ".number_format($fra, 3, ",", ".")." </li></ul>"
        ?>
        <button type="button" onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>