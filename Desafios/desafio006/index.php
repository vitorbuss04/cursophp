<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 006</title>
</head>
<body>
    <?php 
        $divisor = $_GET["divisor"] ?? 0;
        $dividendo = $_GET["dividendo"] ?? 1;
    ?>
    <main>
        <h2>Anatomina de uma divisão</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>" min="0">

            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>" min="1">

            <input type="submit" value="Calcular">

        </form>
    </main>

    <section id="resultado">
        <h3>Estrutura da divisão</h3>
        <?php 
            $quociente = intdiv($divisor, $dividendo) ?? 0;
            $resto = ($divisor % $dividendo) ?? 0;


            // echo 
            // "
            // <div class=\"container\">
            //     <div class=\"left\">
            //         <div class=\"d1 d\">$divisor</div>
            //         <div class=\"d2 d\">$resto</div>
            //     </div>
        
            //     <div class=\"right\">
            //         <div class=\"d3 d\">$dividendo</div>
            //         <div class=\"d4 d\">$quociente</div>
            //     </div>
            // </div>
            
            // ";

            
            ?>
            <table>
                <tr>
                    <td class="td1"><?=$divisor?></td>
                    <td class="td2"><?=$dividendo?></td>
                </tr>
                <tr>
                    <td class="td3"><?=$resto?></td>
                    <td class="td4"><?=$quociente?></td>
                </tr>
            </table>

    </section>
</body>
</html>