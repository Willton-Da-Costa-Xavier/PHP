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

        if (!isset($_SESSION["lista_contactos"])) {
            $_SESSION["lista_contactos"] = array();
        }
    
        if(isset($_GET["nome"]) && isset($_GET["telefone"]) && isset($_GET["mail"])){
            $novo_contato = array(
                "nome" => $_GET["nome"],
                "telefone" => $_GET["telefone"],
                "mail" => $_GET["mail"]
            );
            $_SESSION["lista_contactos"][] =$novo_contato;
        }
        
        $lista_contactos = $_SESSION["lista_contactos"];
    
    ?>

    <table>
        <tr>
            <th>Nomes</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <?php 
            // Verifique se $lista_contactos é um array antes de iterar
            if (is_array($lista_contactos)) {
                foreach($lista_contactos as $contato) {
                    // Verifique se $contato é um array associativo
                    if (is_array($contato)) {
        ?>
        </tr>

        <tr>
            <td>
                <?php 

                   
                    echo htmlspecialchars($contato["nome"]);
                    
                ?>
            </td>
            <td>
                <?php 
                   
                   
                    echo htmlspecialchars($contato["telefone"]);
                
                ?>
            </td>

            <td>
                <?php 
                
                    echo htmlspecialchars($contato["mail"]);

                ?>
            </td>
        </tr>
        <?php 
                    } else {
                        echo "<tr><td colspan='3'>Dados inválidos</td></tr>";
                    }
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum contato encontrado</td></tr>";
            }
        ?>
    </table>
</body>
</html>