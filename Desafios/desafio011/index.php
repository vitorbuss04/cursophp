<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="d011.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php 
            $preço = $_GET["preço"] ?? 0;
            $porcentagem = $_GET["porcentagem"] ?? 0;
        ?>
        <main>
            <h1>Reajustador de Preços</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

                <label for="preço">Preço do produto <strong>(R$)</strong></label>
                <input type="number" name="preço" id="preço" value="<?=$preço?>" step="0.01">

                <label for="porcentagem">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
                
                <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcentagem?>">

                <input type="submit" value="Reajustar">
            </form>
        </main>
        <?php 
            $aumento = ($preço  *$porcentagem) / 100;
            $novo = $preço + $aumento;
        ?>
        <section>
            <h1>Resultado do reajuste</h1>

            <?php 
                echo "<p>O produto que custava " .number_format($preço, 2, ",", "."). ", com $porcentagem% de aumento vai passar a custar R\$". number_format($novo, 2, ",", ".")." a partir de agora</p>";
            ?>
        </section>
    </div>

    <script>
        //declarações automáticas
        mudaValor()

        function mudaValor() {
            p.innerText = porcentagem.value
        }
    </script>
</body>
</html>