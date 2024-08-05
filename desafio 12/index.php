<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 12</title>
</head>
<body>

    <?php 
    
        $time = $_REQUEST["seg"] ?? 0;

        $total = $time;
        $sobra = $total;

        //Total de semanas
        $semanas = (int) ($sobra/604800);
        $sobra=$sobra%604800;

        //Total de dias
        $dias = (int) ($sobra/86400);
        $sobra = $sobra%86400;

        //Total de horas
        $horas = (int) ($sobra/3600);
        $sobra = $sobra%3600;

        //Total de minutos
        $minutos = (int) ($sobra/60);
        $sobra = $sobra%60;

        //Total de segundos
        $segundos = $sobra;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="seg">Qual e o total de segundos?</label>
            <input type="number" name="seg" id="seg" value="<?=$time?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php 
        
            echo "<p>Analizando o valor que voce digitou, <strong>$time segundos</strong> equivalem a um total de:</p>";

            echo "<ul>";
            echo "<li>$semanas semanas</li>";
            echo "<li>$dias dias</li>";
            echo "<li>$horas horas</li>";
            echo "<li>$minutos minutos</li>";
            echo "<li>$segundos segundos</li>";
            echo "</ul>";
        
        ?>
    </section>
</body>
</html>