<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
    <h1>Tarefa: <?= $tarefa["nome"];?></h1>
    <p><strong>Concluida:</strong> <?= traduz_concluida($tarefa["concluida"]);?></p>

    <p><strong>Descricao:</strong> <?= nl2br($tarefa["descricao"]);?></p>

    <p><strong>Prazo:</strong> <?= traduz_data_para_exibir($tarefa["prazo"]);?></p>

    <p><strong>Prioridade:</strong> <?= traduz_prioridade($tarefa["prioridade"]);?></p>

    <?php 

        if(count($anexos)>0):
    
    ?>

    <p><strong>Atencao!</strong> Esta tarefa contem anexos!</p>
    
    <?php endif;?>
</body>
</html>