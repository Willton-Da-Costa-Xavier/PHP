<?php 

    $hora = date("H");

    if($hora>=5 && $hora<12){
        echo "Agora sao $hora horas. Bom dia";
    }elseif ($hora>=12 && $hora<18) {
        echo "Agora sao $hora horas. Boa tarde";
    }else{
        echo "Agora sao $hora horas. Boa noite";
    }

?>