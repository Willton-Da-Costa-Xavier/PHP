<?php 

    $bdServidor = '127.0.0.1';
    $bdUsuario = "sistematarefa";
    $bdSenha = "sistema";
    $bdBanco = "tarefas";
    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

    if (mysqli_connect_errno()) {
        echo "Problemas para conectar no banco de dados ". " Verifique os dados";
        die();
    }else{
        echo "Funcionou";
    }

    function buscar_tarefas($conexao){
        $sqlBusca = "SELECT * FROM tarefa";
        $resultado = mysqli_query($conexao, $sqlBusca);
        $tarefas = array();
        while($tarefa = mysqli_fetch_assoc($resultado)){
            $tarefas[] = $tarefa;
        }
        return $tarefas;
    }

    function gravar_tarefa($conexao, $tarefa){
        $sqlGravar = "INSERT INTO tarefa (nome, descricao, prioridade, prazo, concluida) VALUES ('{$tarefa['nome']}','{$tarefa['descricao']}', '{$tarefa['prioridade']}', '{$tarefa['prazo']}', {$tarefa['concluida']})";
        mysqli_query($conexao, $sqlGravar);
    }

?>