<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 7</title>
</head>
<body>

    <?php
    
        $sal = $_GET["sal"] ?? 5000;

        $salario = 5000;

        $padrao = numfmt_create("pt-PT",NumberFormatter::CURRENCY);

        $salminimo = numfmt_format_currency($padrao,$salario,"MZN");


        $valor = numfmt_format_currency($padrao,$sal,"MZN");

        
    
    ?>

    <main>
        <h1>Informe seu salario</h1>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="sal">Salario (MZN)</label>
            <input type="number" name="sal" id="sal" step="0.001" value="<?=$sal?>" min=5000>
            <p>Considerando o salario minimo de <strong><?=$salminimo?></strong></p>
            <input type="submit" value="Calcular">
        </form>

    </main>

    <section id="resultado">

    <h2>Resultado Final</h2>

        <?php 
        
            $quantsalminimo = ($sal/$salario);

            $int = (int) $quantsalminimo;

            $frac = $quantsalminimo - $int;

            $resto = $frac*$salario;

            $resultado = numfmt_format_currency($padrao,$resto,"MZN");

            echo "<p>Quem recebe um salario de $valor ganha <strong>$int salarios minimos + $resultado</strong></p>"
        
        ?>

    </section>
</body>
</html>