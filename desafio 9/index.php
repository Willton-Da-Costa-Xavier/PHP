<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 9</title>
</head>
<body>

    <?php 
    
        $valor1 = $_GET["v1"] ?? 1;
        $peso1 = $_GET["p1"] ?? 1;
        $valor2 = $_GET["v2"] ?? 1;
        $peso2 = $_GET["p2"] ?? 1;

        $m = ($valor1+$valor2)/2;
        $mp = (($valor1*$peso1)+($valor2*$peso2))/($peso1+$peso2);

        $ma = number_format($m,2,",",".");

        $map = number_format($mp,2,",",".");

    ?>

    <main>
        <h1>Media Aritmeticas</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="v1"><strong>1º Valor</strong></label>
            <input type="number" name="v1" id="v1" step="0.001" min="0" max="20" value="<?=$valor1?>">
            <label for="p1"><strong>1º Peso</strong></label>
            <input type="number" name="p1" id="p1" step="0.001" min="0" value="<?=$peso1?>">
            <label for="v2"><strong>2º Valor</strong></label>
            <input type="number" name="v2" id="v2" step="0.001" min="0" max="20" value="<?=$valor2?>">
            <label for="p2"><strong>2º Peso</strong></label>
            <input type="number" name="p2" id="p2" step="0.001" min="0" value="<?=$peso2?>">
            <input type="submit" value="Calcular Medias">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
        
            echo "<p>Analisando os valores $valor1 e $valor2:</p>";
            echo "<ul>";
            echo "<li>A <strong>Media Aritimetrica Simples</strong> entre os valores e igual a $ma</li>";
            echo "<li>A <strong>Media Aritimetrica Ponderada</strong> com pesos $peso1 e $peso2 e igual a $map</li>";
            echo "</ul>"

        ?>
    </section>
</body>
</html>