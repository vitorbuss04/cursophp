<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 005</title>
    <link rel="stylesheet" href="d005.css">
</head>
<body>
    <div>
        <h1>Analisador de número real</h1>

        <?php 
            
            $num = $_GET["numero"] ?? 0;

            echo "<p>Analisando o número <strong>".number_format($num, 3, ",", ".")."</strong></p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo 
            "<ul>
                <li>A parte inteira é: <strong>".number_format($int, 0, ",", ".")."</strong></li>
                <li>A parte decimal é: <strong>".number_format($fra, 3, ",", ".")."</strong></li>
            </ul>"
            


            
        ?>

        <button onclick="javascript:history.go(-1)" >Voltar</button>

    </div>
</body>
</html>