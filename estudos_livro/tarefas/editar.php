<?php 

    session_start();
    include "banco.php";
    include "ajudantes.php";
    $exibir_tabela = false;

    if(isset($_GET["nome"]) && $_GET["nome"]!=""){
        $tarefa = array();
        $tarefa["id"] = $_GET["id"];
        $tarefa["nome"] = $_GET["nome"];

        if(isset($_GET["desc"])){
            $tarefa["descricao"] = $_GET["desc"];
        }else{
            $tarefa["descricao"]="";
        }

        if(isset($_GET["prz"])){
            $tarefa["prazo"] = traduz_data_banco($_GET["prz"]);
        }else{
            $tarefa["prazo"] = "";
        }

        $tarefa["prioridade"] = $_GET["prioridade"];

        if(isset($_GET["concluida"])){
            $tarefa["concluida"] = 1;
        }else{
            $tarefa["concluida"] = 0;
        }

        editar_tarefa($conexao, $tarefa);
        header("Location:tarefas.php");
        die();
    }

    $tarefa = buscar_tarefa($conexao, $_GET["id"]);

    include "template.php";

?>