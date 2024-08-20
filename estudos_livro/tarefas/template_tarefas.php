<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Tarefa: <?= $tarefa["nome"];?></h1>

    <p><a href="tarefas.php">Voltar para a lista de tarefas</a></p>

    <p><strong>Concluida:</strong> <?= traduz_concluida($tarefa["concluida"]);?></p>

    <p><strong>Descricao:</strong> <?= nl2br($tarefa["descricao"]);?></p>

    <p><strong>Prazo:</strong> <?= traduz_data_para_exibir($tarefa["prazo"]);?></p>

    <p><strong>Prioridade:</strong> <?= traduz_prioridade($tarefa["prioridade"]);?></p>

    <h2>Anexos</h2>

    <!-- Lista de anexos -->
    <?php 
    
        if((count($anexos)>0)):

    ?>

    <table>
        <tr>
            <th>Arquivos</th>
            <th>Opcoes</th>
        </tr>

        <?php 
            foreach ($anexos as $anexo):
        
        ?>
        
        <tr>
            <td><?= $anexo["nome"];?></td>
            <td><a href="anexos/<?= $anexo["arquivo"];?>">Download</a></td>
        </tr>

        <?php endforeach;?>

    </table>
    
    <?php else: ?>

    <p>Nao ha anexos para esta tarefa</p>
    
    <?php endif;?>
    <!-- Formulario para um novo arquivo -->
     <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Novo Anexo</legend>
            <input type="hidden" name="tarefa_id" value="<?= $tarefa['id'];?>">
            <label><?php if($tem_erros && isset($erros_validacao["anexo"])):?> <span class="erro"> <?= $erros_validacao['anexo'];?></span> <?php endif;?> <input type="file" name="anexo"></label>
                <input type="submit" value="Cadastrar">
        </fieldset>
     </form>
</body>
</html>