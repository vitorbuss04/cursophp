<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 001</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <?php 
            $numero = $_POST["numero"];
            $ante = $numero - 1;
            $suce = $numero + 1;
            echo "<p>O número digitado foi <strong>$numero</strong>.";
            echo "<p>Seu antecessor é <strong>$ante</strong>.";
            echo "<p>Seu sucessor é <strong>$suce</strong>.";
        ?>
    </div>  
</body>
</html>



