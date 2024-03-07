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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
        
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            // var_dump($dados);
        
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            $real = $_REQUEST["num"] ?? 0;
            $dolar = $real / $cotacao;
            echo "<h1>Conversor de moedas</h1>";
            // echo "<p>Seus <strong>R$" . number_format($real, 2, ',', ''). "</strong> equivalem a <strong>US$" . number_format($dolar, 2, '.', ','). "</strong></p>";

            //pode se usar tbm uma biblioteca do php

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD "). "</p>" 
        ?>
        <button type="button" onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>