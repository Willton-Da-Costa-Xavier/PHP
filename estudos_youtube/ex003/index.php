<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Testes de tipos Primitivos</h1>
    <?php 
    //    $num = 010;
    //    echo "O valor da variavel e: ". $num;

    // $v ="Willton";
    // var_dump($v);

    // $num = (float) "450";
    // var_dump($num);

    // $casado = false;
    // var_dump($casado);

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