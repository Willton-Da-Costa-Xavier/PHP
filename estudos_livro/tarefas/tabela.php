<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
<table>
        <tr>
            <th>Tarefas</th>
            <th>Descricao</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluida</th>
            <th>Opcoes</th>
        </tr>
        
        <?php 
            
            foreach ($lista_tarefas as $tarefa):
        
        ?>

        <tr>
            <td>
                
                <a href="tarefa.php?id=<?= $tarefa['id'];?>"><?php 
                
                echo $tarefa["nome"];
                    
                ?></a>
                
            </td>

            <td>
                <?php 
                        
                    echo $tarefa["descricao"];
                    
                ?>
            </td>

            <td>

                <?php 

                    echo traduz_data_para_exibir($tarefa['prazo']);
                
                ?>
            </td>

            <td>
                <?php 
                    
                    echo traduz_prioridade($tarefa['prioridade']);
                    
                ?>
            </td>

            <td>
                <?php 
                    
                    echo traduz_concluida($tarefa["concluida"]);
                    
                ?>
            </td>

            <td>

                <a href="editar.php?id=<?= $tarefa['id']?>">Editar</a>

            </td>

            <td>
                <a href="remover.php?id=<?= $tarefa["id"]?>">Apagar</a>
            </td>


        </tr>    
        <?php endforeach;?>
        
    </table>
</body>
</html>