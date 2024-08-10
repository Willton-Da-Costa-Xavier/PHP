<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        function linha($semana){
            echo "<tr>";
                
                for($i=0;$i<=6;$i++){
                    if(isset($semana[$i])){
                        echo "<td>{$semana[$i]}</td>";
                    }else{
                        echo "<td></td>";
                    }
                }
                
            echo "</tr>";
        }

        function calendario(){
            $dia = 1;
            $semana = array();
            while($dia<=31){
               array_push($semana, $dia);
               if(count($semana) == 7){
                linha($semana);
                $semana=array();
               } 
               $dia++;
            }
            linha($semana);
        }
    
    ?>

    <h1><?="Titulo dentro do H1"?></h1>
    <table border="1">
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sab</th>
            <?=calendario()?>
        </tr>
    </table>


</body>
</html>