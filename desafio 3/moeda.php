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
        <h1>Conversor de Moedas v1.0</h1>

        <?php 
        
            $moeda = $_REQUEST["valor"]?? 0;
            $conversor = $moeda/63.27;
            $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $moeda, "MZN") . " equivalem a " . numfmt_format_currency($padrao, $conversor, "USD") . " <br>`<strong>Cotacao fixa de 63,27MZN</strong> informada diretamente no codigo</p>";
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>