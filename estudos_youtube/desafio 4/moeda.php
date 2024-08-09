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
        <h1>Conversor de Moedas v2.0</h1>

        <?php 
        
            $inicio= date("m-d-Y", strtotime("-7 days"));
            $fim= date("m-d-Y");

            $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''. $fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            // var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $moeda = $_REQUEST["valor"]?? 0;
            $conversor = $moeda/$cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $moeda, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conversor, "USD") . " <br>`<strong>Cotacao fixa de $cotacao</strong> informada diretamente no codigo</p>";
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>