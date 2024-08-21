<?php 

    $mysqli = new mysqli(BD_SERVIDOR, BD_USUSARIO, BD_SENHA, BD_BANCO);

    if ($mysqli->connect_errno) {
        echo "Problemas para conectar no banco de dados ". " Verifique os dados";
        die();
    }


    

   

?>