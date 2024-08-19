<?php 

    session_start();
    include "banco.php";
    include "ajudantes.php";
    $exibir_tabela = true;

    if(tem_post()){
        if(isset($_POST["nome"]) && strlen($_POST["nome"])>0){
            $tarefa["nome"] = $_POST["nome"];
        }else{
            $tem_erros= true;
            $erros_validacao["nome"] = "O nome da tarefa e obrigatorio!";
        }

        if(isset($_POST["desc"])){
            $tarefa["descricao"]=$_POST["desc"];
        }else{
            $tarefa["descricao"]="";
        }

        if(isset($_POST["prz"]) && strlen($_POST["prz"])>0){
            if(validar_data($_POST["prz"])){
                $tarefa["prazo"] = traduz_data_banco($_POST["prz"]);
            }else{
                $tem_erros= true;
                $erros_validacao["prazo"] = "O prazo nao e uma data valida!";
            }
           
        }else{
            $tarefa["prazo"] = "";
        }

        $tarefa["prioridade"]=$_POST["prioridade"];

        if(isset($_POST["concluida"])){
            $tarefa["concluida"] = 1;
        }else{
            $tarefa["concluida"] = 0;
        }

        if(!$tem_erros){

            gravar_tarefa($conexao, $tarefa);
            header("Location: tarefas.php");
            die();
        }

       
    }

    $lista_tarefas = buscar_tarefas($conexao);

    $tarefa = array("id" => 0, "nome" =>isset($_POST["nome"])?$_POST["nome"]:"", "descricao" => isset($_POST["desc"])?$_POST["desc"]:"", "prazo" => isset($_POST["prz"])?traduz_data_banco($_POST["prz"]):"", "prioridade" =>isset($_POST["prioridade"])?$_POST["prioridade"]:"", "concluida" => isset($_POST["concluida"])?$_POST["concluida"]:"");

    include "template.php";



?>
