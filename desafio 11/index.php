<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 11</title>
</head>
<body>

    <?php 
    
        $preco = $_POST["preco"] ?? 0;
        $percentagem = $_POST["reaj"] ?? "0";

        $reajuste = ($preco*$percentagem)/100;

        $pt = $preco+$reajuste;

    
    ?>


    <main>
        <h1>Reajustador de Precos</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="preco">Preco do Produto (MZN)</label>
            <input type="number" name="preco" id="preco" step="0.001" value="<?=$preco?>">
            <label for="reaj">Qual sera o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudavalor()" value="<?=$percentagem?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">

        <h2>Resultado do reajuste</h2>
        <p>O produto que custava <?=number_format($preco,2,",",".")?>MZN, com <strong><?=$percentagem?>% de aumento</strong> vai passar a custar <strong><?=number_format($pt,2,",",".")?>MZN</strong> a partir de agora</p>
    </section>

    <script>
        mudavalor()
        function mudavalor(){
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>