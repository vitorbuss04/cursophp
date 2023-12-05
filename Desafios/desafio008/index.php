<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="d008.css">
    <title>Desafio 008</title>
</head>
<body>
    <main>
        <h2>Raízes</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Digite um número: </label>
            <input type="number" name="numero" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $numero = $_GET["numero"] ?? 0;
            $raiz2 = sqrt($numero);
            $raiz3 = $numero ** (1/3);
        ?>

        <ul>
            <li><?="A raiz quadrada é: $raiz2"?></li>
            <li><?="A raiz cúbica é: $raiz3"?></li>
        </ul>
    </section>
</body>
</html>