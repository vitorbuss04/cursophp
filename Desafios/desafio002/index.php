<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
        <?php
        
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            echo "<p>Gerando um número aleatório entre $min e $max...</p>";
            echo "<p>O número gerado foi $num.</p>";
        ?>

        <button onclick="javascript:document.location.reload()" >Gerar novamente</button>
    </div>

</body>
</html>
