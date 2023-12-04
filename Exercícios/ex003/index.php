<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos priitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos em PHP</h1>

    <?php
        // 0x = hexadecimal
        // 0b = binario
        // 0 = octal
        
        // $num = 010;
        // echo "O valor da variável é $num";

    
        // $num = (int) 3e2;
        // echo "O valor é $num";
        // var_dump($num);

        // $num = (float) "950";
        // var_dump($num)

        // $casado = true;
        // var_dump($casado);
        // echo "O valor para casado é $casado";

        // $vet = [1, 2, 3, 4];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>