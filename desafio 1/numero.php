<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <main>
        <?php 
        
            $valor = $_GET["num"];
            $process = $valor +1;
            $antece = $valor -1;

            echo "<p>O numero digitado: <strong>$valor</strong></p>";
            echo "<p>O seu sucessor e: <strong>$process</strong></p>";
            echo "<p>O seu antecessor e: <strong>$antece</strong></p>";

        ?>
    </main>
</body>
</html>