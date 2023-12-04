<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 003</title>
    <link rel="stylesheet" href="d003.css">
</head>
<body>

<div>

    <?php
        $cotação = 4.88;
        
        $real = $_POST["real"];
        
        $dolar = $real / $cotação;
        
        $padrao = numfmt_create("pb_BR", NumberFormatter::CURRENCY);
        
        echo "<p>Seus " .numfmt_format_currency($padrao, $real, "BRL"). " equivalem a " .numfmt_format_currency($padrao, $dolar, "USD"). ".</p>";
    ?>

</div>
</body>
</html>