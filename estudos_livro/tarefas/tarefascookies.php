<?php 
 // Verificar se o cookie "lista_tarefas" já existe
 if (isset($_COOKIE["lista_tarefas"])) {
    // Recuperar as tarefas do cookie e decodificar do formato JSON
    $lista_tarefas = json_decode($_COOKIE["lista_tarefas"], true);
} else {
    // Se o cookie não existir, inicializar um array vazio
    $lista_tarefas = array();
}
        
if (isset($_GET["nome"])) {
    $lista_tarefas[] = $_GET["nome"];
    
    setcookie("lista_tarefas",json_encode($lista_tarefas), time()+3600);
}

?>
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
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <table>
        <tr>
            <th>Tarefas</th>
            <?php 
            
                foreach ($lista_tarefas as $tarefa):
            
            ?>
            <tr>
                <td><?php 
                
                    echo $tarefa;
                    
                ?></td>
                <tr>
                    <?php endforeach;?>
                </tr>
            </tr>
        </tr>
    </table>
</body>
</html>