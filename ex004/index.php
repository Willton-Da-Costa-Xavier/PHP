<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // echo "PHP\u{1f418}";
        // echo 'PHP\u{1f418}';

        // $nome = "Willton";
        // $apelido = "Da Costa";
        // $sobrenome = "Xavier";
        
        // echo "$nome \n\t \"$apelido\" \t\t$sobrenome";
        $canal = "Curso em Video";
        $ano = date("Y");
        echo <<< Frase
            Ola galera do $canal!
                    Tudo bem com voces?
                Como esta sendo esse ano de $ano?
            Abracos \u{1F596}
            
            Frase;
    ?>
</body>
</html>