<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="d013.css">
    <title>Desafio 013</title>
</head>
<body>
    <div class="container">
        <?php 
            $saque = $_GET["saque"] ?? 0;
        ?>
        <main>
            <h1>Caixa eletrônico</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
                <input type="number" name="saque" id="saque" step="1" value="<?=$saque?>">

                <input type="submit" value="Sacar">
            </form>
            <p>*Notas disponíveis: R$100, R$20, R$50, R$10 e R$5</p>
        </main>
        <?php 
	 
            $resto = $saque;
            
            //saque 100
            $tot100 = floor($resto / 100);
            $resto %= 100;
            
            //saque 50
            $tot50 = floor($resto / 50);
            $resto %= 50;
            
            //saque 10
            $tot10 = floor($resto / 10);
            $resto %= 10;
            
            //saque 5
            $tot5 = floor($resto / 5);
            $resto %= 5;

            //saque 1
            $tot1 = floor($resto / 1);
            $resto %= 1;
        ?>
        <section>

            <h1>Saque de R$<?php echo number_format($saque, 2, ",", ".")?> Realizado</h1>

            <p>O caixa eletrônico vai te entregar as seguintes notas: </p>

            <ul>
                <li><img src="imagens/100-reais.jpg" height="50px" alt="">X<?=$tot100?></li>
                <li><img src="imagens/50-reais.jpg" height="50px" alt="">X<?=$tot50?></li>
                <li><img src="imagens/10-reais.jpg" height="50px" alt="">X<?=$tot10?></li>
                <li><img src="imagens/5-reais.jpg" height="50px" alt="">X<?=$tot5?></li>
                <li><img src="imagens/1-real.jpg" height="50px" alt="">X<?=$tot1?></li>
            </ul>
        </section>
    </div>
</body>
</html>