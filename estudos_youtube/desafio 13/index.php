<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 13</title>
    <style>
        .nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>

    <?php 
    
        $valor = $_REQUEST["valor"] ?? 0;
        $sobra = $valor;

        //Nota de 500mt
        $notaquinhentos = floor($sobra/500);
        $sobra = $sobra%500;

        //Nota de 200mt
        $notaduzentos = floor($sobra/200);
        $sobra = $sobra%200;

        //Nota de 100mt
        $notacem = floor($sobra/100);
        $sobra= $sobra%100;

        //Nota de 50mt
        $notacinquenta = floor($sobra/50);
        $sobra%=50;
    
    ?>
    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor">Qual valor voce deseja sacar? (MZN)</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>" step="50">
            <p><sup>*</sup>Notas disponiveis: 500MZN, 200MZN, 100MZN e 50MZN</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    

    <section>
        <h2>Saque de <?=number_format($valor,2,",",".")?>MZN realizado</h2>
        <?php 
        
            echo "<p>O caixa electronico vai te entregar as seguintes notas:</p>";

            echo "<ul>";
            echo "<li><img src='quinhentos.png' alt='' class='nota'>x$notaquinhentos</li>";
            echo "<li><img src='duzentos.png' alt='' class='nota'>x$notaduzentos</li>";
            echo "<li><img src='cem.png' alt='' class='nota'>x$notacem</li>";
            echo "<li><img src='cinquenta.png' alt='' class='nota'>x$notacinquenta</li>";
            echo "</ul>";
        
        ?>
    </section>
</body>
</html>