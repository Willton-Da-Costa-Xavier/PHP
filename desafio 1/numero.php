<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <p>
            <?php
            
                $valor = $_GET["num"] ?? 0;
                $process = $valor +1;
                $antece = $valor -1;
                echo "O numero digitado: <strong>$valor</strong>";
                echo "<br>O seu sucessor e: <em>$process</em>";
                echo "<br>O seu antecessor e: <em>$antece</em>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>