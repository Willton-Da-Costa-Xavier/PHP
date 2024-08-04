<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 8</title>
</head>
<body>

    <?php 
    
        $n = $_GET["num"] ?? 1;

        $quadrado = sqrt($n);
        $cubico = $n ** (1/3);

        $quad = number_format($quadrado,3,",",".");

        $cubic = number_format($cubico,3,",",".");
    
    ?>

    <main>
        <h1>Informe o numero</h1>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">Numero:</label>
            <input type="number" name="num" id="num" value="<?=$n?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section id="resultado">

        <h2>Resultado final</h2>

        <?php 
        
            echo "<p>Analisando o <strong>numero $n</strong>, temos:</p>";

            echo "<ul>";
            echo "<li>A sua raiz quadrada e <strong>$quad</strong></li>";
            echo "<li>A sua raiz cubica e <strong>$cubic</strong></li>";
            echo "</ul>";
        
        ?>
    </section>
</body>
</html>