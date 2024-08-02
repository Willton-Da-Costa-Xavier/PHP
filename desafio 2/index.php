<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Randomizer</title>
</head>
<body>

    <main>
        <h1>Trabalhando com numeros aleatorios:</h1>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            echo "<p>Gerando um numero aleatorio entre $min e $max<br>O valor aleatorio gerado foi <strong>$num</strong></p>";
        ?>

        <button onclick="javascript:window.location.reload()">&#x1f504; Gerar outro</button>
    </main>
</body>
</html>