
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <form action="">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="nome">Tarefa:</label>
            <input type="text" name="nome" id="idnome">
            <label for="desc">Descricao(opcional)</label>
            <textarea name="desc" id="iddesc"></textarea>
            <label for="prz">Prazo:</label>
            <input type="text" name="prz" id="idpraz">
            <fieldset>
                <legend>Prioridade:</legend>
                <label for=""><input type="radio" name="prioridade" id="" value="1" checked>Baixa <input type="radio" name="prioridade" id="" value="2">Media <input type="radio" name="prioridade" id="" value="3">Alta</label>
            </fieldset>
            <label for="">Tarefa concluida: <input type="checkbox" name="concluida" id="" value="1"></label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <table>
        <tr>
            <th>Tarefas</th>
            <th>Descricao</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluida</th>
        </tr>
        
        <?php 
            
            foreach ($lista_tarefas as $tarefa):
        
        ?>

        <tr>
            <td><?php 
                
                echo $tarefa["nome"];
                    
                ?>
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


        </tr>    
        <?php endforeach;?>
        
    </table>
</body>
</html>