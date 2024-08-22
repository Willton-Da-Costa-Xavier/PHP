<?php 

    class Tarefas{
        public $mysqli;
        public $tarefa;
        public $tarefas=array();

        public function __construct($novo_mysqli)
        {
            $this->mysqli = $novo_mysqli;
        }

        public function buscar_tarefas(){
            $sqlBusca = "SELECT * FROM tarefa";
            $resultado = $this->mysqli->query($sqlBusca);
            $this->tarefas = array();
            while($tarefa = mysqli_fetch_assoc($resultado)){
                $this->tarefas[] = $tarefa;
            }
            
        }

        public function buscar_tarefa($id){
            $sqlBusca = "SELECT * FROM tarefa WHERE id =". $id;
            $resultado = $this->mysqli->query($sqlBusca);
            $this->tarefa = mysqli_fetch_assoc($resultado);
        }
        
        public function gravar_tarefa($tarefa){
            $nome = $this->mysqli->escape_string($tarefa["nome"]);
            $descricao = $this->mysqli->escape_string($tarefa["descricao"]);
            $prazo = $this->mysqli->escape_string($tarefa["prazo"]);
            $sqlGravar = "INSERT INTO tarefa (nome, descricao, prioridade, prazo, concluida) VALUES ('{$nome}','{$descricao}', '{$tarefa['prioridade']}', '{$prazo}', {$tarefa['concluida']})";
            $this->mysqli->query($sqlGravar);
        }

        public function editar_tarefa($tarefa){
            $sqlEditar = "UPDATE tarefa SET nome = '{$tarefa['nome']}', descricao = '{$tarefa['descricao']}', prioridade = '{$tarefa['prioridade']}', prazo = '{$tarefa['prazo']}', concluida = {$tarefa['concluida']} WHERE id = {$tarefa['id']}";
            $this->mysqli->query($sqlEditar);
        }

        public function remover_tarefa($mysqli, $id){
            $sqlRemover = "DELETE FROM tarefa WHERE id = {$id}";
            $mysqli->query($sqlRemover);
        }

        public function gravar_anexo($mysqli, $anexo){
            $sqlGravar = "INSERT INTO anexos (tarefa_id, nome, arquivo) VALUES ({$anexo['tarefa_id']}, '{$anexo['nome']}', '{$anexo['arquivo']}')";

            $mysqli->query($sqlGravar);
        }
    
        public function buscar_anexos($mysqli, $tarefa_id){
            $sql = "SELECT * FROM anexos WHERE tarefa_id = {$tarefa_id}";
    
            $resultado = $mysqli->query($sql);
    
            $anexos = array();
    
            while ($anexo = mysqli_fetch_assoc($resultado)) {
                $anexos[] = $anexo;
            }
    
            return $anexos;
        }
        
    }

?>