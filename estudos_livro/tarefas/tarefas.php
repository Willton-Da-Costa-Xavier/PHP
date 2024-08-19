<?php 

    session_start();
    include "banco.php";
    include "ajudantes.php";
    $exibir_tabela = true;

    if(isset($_GET["nome"]) && $_GET["nome"]!=""){
        $tarefa = array();
        $tarefa["nome"] = $_GET["nome"];
        if(isset($_GET["desc"])){
            $tarefa["descricao"]=$_GET["desc"];
        }else{
            $tarefa["descricao"]="";
        }

        if(isset($_GET["prz"])){
            $tarefa["prazo"] = traduz_data_banco($_GET["prz"]);
        }else{
            $tarefa["prazo"] = "";
        }

        $tarefa["prioridade"]=$_GET["prioridade"];

        if(isset($_GET["concluida"])){
            $tarefa["concluida"] = 1;
        }else{
            $tarefa["concluida"] = 0;
        }

        gravar_tarefa($conexao, $tarefa);
        header("Location: tarefas.php");
        die();
    }

    $lista_tarefas = buscar_tarefas($conexao);

    $tarefa = array("id" => 0, "nome" =>"", "descricao" => "", "prazo" => "", "prioridade" =>1, "concluida" => "");

    include "template.php";



?>
