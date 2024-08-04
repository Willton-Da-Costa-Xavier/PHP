<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 6</title>
</head>
<body>

    <?php 
    
        $dividendo = $_GET["divid"] ?? 0;

        $divisor = $_GET["divis"] ?? 1;
    
    ?>

    <main>
        <h1>Anatomia de uma divisao</h1>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="divid">Dividendo:</label>
            <input type="number" name="divid" id="divid" value="<?=$dividendo?>">
            <label for="divis">Divisor:</label>
            <input type="number" name="divis" id="divis" value="<?=$divisor?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section id="resultado">

        <h2>Estrutura da divisao</h2>
        <?php
        
         $div = ($dividendo/$divisor);

         $res=number_format($div,0);

         $resto = ($dividendo%$divisor); 
            
        
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>

            <tr>
                <td><?=$resto?></td>
                <td><?=$res?></td>
            </tr>
        </table>

    

    </section>
</body>
</html>