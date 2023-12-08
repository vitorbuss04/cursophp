<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="d009.css">
    <title>Desafio 009</title>
</head>
<body>
    <div class="container">
        <main>
            <?php 
                $valor1 = $_GET["valor1"] ?? 0;
                $peso1 = $_GET["peso1"] ?? 1;
                $valor2 = $_GET["valor2"] ?? 0;
                $peso2 = $_GET["peso2"] ?? 1;
            ?>
            <h1>Médias Aritméticas</h1>

            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            
                <label for="v1">1º Valor</label>
                <input type="number" name="valor1" id="v1" value="<?=$valor1?>">

                <label for="v2">1º Peso</label>
                <input type="number" name="peso1" id="p1" value="<?=$peso1?>">

                <label for="v2">2º Valor</label>
                <input type="number" name="valor2" id="v2" value="<?=$valor2?>">

                <label for="p2">2º Peso</label>
                <input type="number" name="peso2" id="p2" value="<?=$peso2?>">

                <input type="submit" value="Calcular Médias">
            </form>
        </main>
            <section>
                <?php 
                    $simples = ($valor1 + $valor2) / 2;
                    $ponderada = ($valor1*$peso1 + $valor2*$peso2) / ($peso1 + $peso2);
                ?>
                <h2>Cálculo das Médias</h2>
                <ul>
                    <li>
                        <p>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($simples, 2, ",", ".")?></p>
                    </li>
                    <li>
                        <p>A <strong>Média Aritmética Ponderada</strong> com pesos <?="$peso1 e $peso2"?> é igual a <?=number_format($ponderada, 2, ",", ".")?></p>
                    </li>
                </ul>
            </section>
        </div>
</body>
</html>