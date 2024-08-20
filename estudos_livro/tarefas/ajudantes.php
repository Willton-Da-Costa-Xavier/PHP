<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    

    function traduz_prioridade($codigo){
        $prioridade = "";
        switch ($codigo) {
            case 1:
                $prioridade = 'Baixa';
                break;
            case 2:
                $prioridade = 'Media';
                break;
            case 3:
                $prioridade = 'Alta';
                break;
        }

        return $prioridade;
    }

    function traduz_data_banco($data){
        if($data == ""){
            return "";
        }

        $dados = explode("/", $data);

        if(count($dados)!=3){
            return $data;
        }

        $data_mysql="{$dados[2]}-{$dados[1]}-{$dados[0]}";

        return $data_mysql;
    }

    function traduz_data_para_exibir($data){
        if($data == "" OR $data == "0000-00-00"){
            return "";
        }

        $dados = explode("-",$data);

        if(count($dados)!=3){
            return $data;
        }

        $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

        return $data_exibir;
    }

    function traduz_concluida($concluida){
        if($concluida == 1){
            return "Sim";
        }

        return "Nao";
    }

    $tem_erros = false;
    $erros_validacao = array();


    function tem_post(){
        if (count($_POST)>0){
            return true;
        }else{
            return false;
        }
    }

    function validar_data($data){
        
        $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
        $resultado = preg_match($padrao, $data);

        if(!$resultado){
            return false;
        }

        $dados = explode("/",$data);

        $dia = $dados[0];
        $mes = $dados[1];
        $ano = $dados[2];

        $resultado = checkdate($mes,$dia,$ano);

        return $resultado;
    }

    function tratar_anexo($anexo){
        $padrao = '/^.+(\.pdf|\.zip)$/';
        $resultado = preg_match($padrao,$anexo["name"]);

        if(!$resultado){
            return false;
        }

        move_uploaded_file($anexo["tmp_name"],"anexos/{$anexo['name']}");

        return true;

    }

    function enviar_email($tarefa,$anexos=array()){

        include "biblioteca/PHPMailer-master/src/PHPMailer.php";

        include "biblioteca/PHPMailer-master/src/SMTP.php";

        include "biblioteca/PHPMailer-master/src/Exception.php";

        $corpo = preparar_corpo_email($tarefa, $anexos);

        $email = new PHPMailer();

        //Esta e a criacao do objecto
        $email->isSMTP();
        $email->Host = "smtp.gmail.com";
        $email->Port = 587;
        $email->SMTPSecure = "tls";
        $email->SMTPAuth = true;
        $email->Username = "minhacontateste71@gmail.com";
        $email->Password = "minhasenha2";
        $email->setFrom("minhacontateste71@gmail.com","Avisador de Tarefas");

        //Digitar o e-mail do destinatario
        $email->addAddress(EMAIL_NOTIFICACAO);

        //Digitar o assunto do e-mail
        $email->Subject = "Aviso de tarefa: {$tarefa['nome']}";

        $email->msgHTML($corpo);

        //Adicionar os anexos quando necessario
        foreach ($anexos as $anexo) {
            $email->addAttachment("anexos/{$anexo['arquivo']}");
        }

        //Usar a opcao de enviar o e-mail
        if ($email->send()) {
            echo 'Mensagem enviada com sucesso!';
        } else {
            echo 'Erro: ' . $email->ErrorInfo;
        }
    }

    function preparar_corpo_email($tarefa, $anexos){
        // Aqui vamos pegar o conteudo

        //processado do template_email.php

        //Falar  para o PHP que nao e para enviar

        //o processamento para o navegador
        ob_start();

        //incluir o arquivo template_email.php

        include "template_email.php";

        //Guardar o conteudo do arquivo em uma variavel
        $corpo = ob_get_contents();

        //Falar para o PHP que ele pode voltar a mandar conteudos para o navegador
        ob_end_clean();

        return $corpo;
    }

?>