<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 10</title>
</head>
<body>

    <?php 
    
        $nasc = $_POST["nasc"] ?? 2024;
        $ano = $_POST["idade"] ?? 2024;

        $idade = $ano-$nasc;


    ?>
    <main>
        <h1>Calculando a sua idade</h1>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="nasc"><strong>Em que ano voce nasceu?</strong></label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>">
            <label for="idade">Quer saber a sua idade em que ano? (Atualmente estamos em <strong><?=date("Y")?></strong>)</label>
            <input type="number" name="idade" id="idade" value="<?=$ano?>">
            <input type="submit" value="Qual sera minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
        
            echo "<p>Quem nascceu em $nasc vai ter <strong>$idade anos</strong> em $ano</p>";
        
        ?>
    </section>
</body>
</html>