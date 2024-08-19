<?php 

    session_start();
    include "banco.php";
    include "ajudantes.php";
    $exibir_tabela = false;
    $tem_erros=false;
    $erros_validacao = array();

    if(tem_post()){

        $tarefa = array();
        $tarefa["id"] = $_POST["id"];

        if(isset($_POST["nome"]) && strlen($_POST["nome"])>0){
            $tarefa["nome"] = $_POST["nome"];
        }else{
            $tem_erros = true;
            $erros_validacao["nome"]= "O nome da tarefa e obrigatorio!";
        }
        

        if(isset($_POST["desc"])){
            $tarefa["descricao"] = $_POST["desc"];
        }else{
            $tarefa["descricao"]="";
        }

        if(isset($_POST["prz"]) && strlen($_POST["prz"])>0){
            if(validar_data($_POST["prz"])){
               $tarefa["prazo"] = traduz_data_banco($_POST["prz"]); 
            }else{
                $tem_erros = true;
                $erros_validacao["prazo"] = "O prazo nao e uma data valida!";
            }
            
        }else{
            $tarefa["prazo"] = "";
        }

        $tarefa["prioridade"] = $_POST["prioridade"];

        if(isset($_POST["concluida"])){
            $tarefa["concluida"] = 1;
        }else{
            $tarefa["concluida"] = 0;
        }

        if(!$tem_erros){
            editar_tarefa($conexao, $tarefa);
            header("Location:tarefas.php");
            die();
        }
       
       
    }

    $tarefa = buscar_tarefa($conexao, $_GET["id"]);
    $tarefa['nome'] = (isset($_POST['nome'])) ? $_POST['nome'] :
    $tarefa['nome'];  
    $tarefa['descricao'] = (isset($_POST['descricao'])) ?
    $_POST['descricao'] : $tarefa['descricao']; 
    $tarefa['prazo'] =
    (isset($_POST['prazo'])) ? $_POST['prazo'] : $tarefa['prazo'];
    $tarefa['prioridade'] = (isset($_POST['prioridade'])) ?
    $_POST['prioridade'] : $tarefa['prioridade'];
    $tarefa['concluida'] =
    (isset($_POST['concluida'])) ? $_POST['concluida'] :
    $tarefa['concluida']; 

    include "template.php";

?>