<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 003</title>
    <link rel="stylesheet" href="d004.css">
</head>
<body>

<div>

    <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        
        $cotação = $dados["value"][0]["cotacaoCompra"];

        $padrao = numfmt_create("pb_BR", NumberFormatter::CURRENCY);

        
        $real = $_POST["real"];
        
        $dolar = $real / $cotação;

        echo "<p>A cotação do dia é ". numfmt_format_currency($padrao, $cotação, "BRL");
        
        echo "<p>Seus " .numfmt_format_currency($padrao, $real, "BRL"). " equivalem a " .numfmt_format_currency($padrao, $dolar, "USD"). ".</p>";
    ?>

</div>
</body>
</html>