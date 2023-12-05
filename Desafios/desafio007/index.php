<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h2>Calcular salário</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário: </label>
            <input type="number" name="salario" id="sal" value="<?=$salario?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado: </h2>
        <?php 
            $salario = $_GET["salario"] ?? 0;
            $minimo = 1380;
            $quociente = intdiv($salario, $minimo);
            $resto = $salario % $minimo;

            $formatacao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Quem recebe " .numfmt_format_currency($formatacao, $salario, "BRL").", ganha $quociente salarios minimos + ".numfmt_format_currency($formatacao, $resto, "BRL")
        ?>
    </section>
</body>
</html>