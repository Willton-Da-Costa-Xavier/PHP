<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
</head>
<body>
    <h1>Gerenciador de Contactos</h1>
    <form action="">
        <fieldset>
            <legend>Contactos</legend>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="idnome">
            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" id="idtelefone">
            <label for="mail">e-mail:</label>
            <input type="email" name="mail" id="idmail">
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <?php 
    
        if(isset($_GET["nome"])){
            $_SESSION["lista_contactos"][]=$_GET["nome"];
        }

        if(isset($_GET["telefone"])){
            $_SESSION["lista_contactos"][]=$_GET["telefone"];
        }

        if(isset($_GET["mail"])){
            $_SESSION["lista_contactos"][]=$_GET["mail"];
        }

        $lista_contactos = array();

        if(isset($_SESSION["lista_contactos"])){
            $lista_contactos = $_SESSION["lista_contactos"];
        }
    
    ?>

    <table>
        <tr>
            <th>Nomes</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <?php 
            
                for ($i=0;$i<count($lista_contactos);$i++) {
                    
                    
            
            ?>
        </tr>

        <tr>
            <td>
                <?php 

                    if($i=0){
                        echo $lista_contactos[$i];
                    }
                    
                ?>
            </td>
            <td>
                <?php 
                   
                   if($i=1){
                    echo $lista_contactos[$i];
                }
                ?>
            </td>

            <td>
                <?php 
                
                    echo $lista_contactos[$i];

                ?>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>