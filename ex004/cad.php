<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Desconhecido";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            
            echo "<p>E um prazer te conhecer, <strong>$nome</strong> <strong>$sobrenome</strong>! Este e o meu site </p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
</body>
</html>