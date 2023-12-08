<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="d010.css">
    <title>Desafio 010</title>
</head>
<body>
    <div class="container">
        <main>

            <?php 
                $atual = date('Y');
                $nasc = $_GET["nascimento"] ?? 2000;
                $ano = $_GET["ano"] ?? $atual;
            ?>

            <h1>Calculando a sua idade</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

                <label for="nasc">Em que ano você nasceu?</label>
                <input type="number" id="nasc" name="nascimento" min="1900" max="<?=$atual - 1?>" value="<?=$nasc?>">

                <label for="ano">Quer saber sua idade em qual ano? <strong>(atualmente estamos em <strong><?=$atual?></strong>)</strong></label>
                <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">

                <input type="submit" value="Qual será minha idade?">

            </form>
        </main>
        <section>
            <?php 
                $idade = $ano - $nasc
            ?>
            <h1>Resultado</h1>
            <p>Quem nasceu em <?=$nasc?> vai ter <strong> <?=$idade?> anos</strong> em <?=$ano?>!</p>

        </section>
    </div>
</body>
</html>