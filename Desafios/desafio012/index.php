<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="d012.css">
    <title>Desafio 012</title>
</head>
<body>
    <div class="container">
        <?php 
            $total = $_GET["total"] ?? 0;
                    ?>
        <main>
            <h1>Calculadora de tempo</h1>

            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

                <label for="total">Qual é o total de segundos?</label>
                <input type="number" name="total" id="total" value="<?=$total?>">

                <input type="submit" value="Calcular">
            </form>
        </main>
        <section>

            <h1>Totalizando tudo</h1>
        <?php
            $sobra = $total;
            //semanas
            $semana = intdiv($sobra, 604800);
            $sobra = $sobra % 604800;
            //dias
            $dia = intdiv($sobra , 86400);
            $sobra = $sobra % 86400;
            //horas
            $hora = intdiv($sobra , 3600);
            $sobra = $sobra % 3600;
            //minutos
            $minuto = intdiv($sobra , 60);
            $sobra = $sobra % 60;
            //segundos
            $segundo = $sobra;
            
            echo "<p>Analisando o valor que você digitou, <strong>".number_format($total, 0, ",", ".")." segundos</strong> equivalem a um total de: </p>";
        ?>

            <ul>
                <li><?=$semana?> semanas</li>
                <li><?=$dia?> dias</li>
                <li><?=$hora?> horas</li>
                <li><?=$minuto?> minutos</li>
                <li><?=$segundo?> segundos</li>
            </ul>
        </section>
    </div>
</body>
</html>