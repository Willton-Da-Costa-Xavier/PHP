<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<form action="">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="nome">Tarefa:</label>
            <input type="text" name="nome" id="idnome" value="<?php echo $tarefa['nome'];?>">
            <label for="desc">Descricao(opcional)</label>
            <textarea name="desc" id="iddesc"><?php echo $tarefa["descricao"];?></textarea>
            <label for="prz">Prazo:</label>
            <input type="text" name="prz" id="idpraz" value="<?php echo traduz_data_para_exibir($tarefa["prazo"]);?>">
            <fieldset>
                <legend>Prioridade:</legend>
                <label for=""><input type="radio" name="prioridade" id="" value="1" <?php echo($tarefa["prioridade"]==1)?"checked":"";?>>Baixa <input type="radio" name="prioridade" id="" value="2" <?php echo($tarefa["prioridade"]==2)? "checked":"";?>>Media <input type="radio" name="prioridade" id="" value="3" <?php echo($tarefa["prioridade"] ==3)?"checked":"";?>>Alta</label>
            </fieldset>
            <label for="">Tarefa concluida: <input type="checkbox" name="concluida" id="" value="1" <?php echo($tarefa["concluida"]==1)?"checked":"";?></label>
            <input type="hidden" name="id" value="<?php echo $tarefa['id'];?>">
            <input type="submit" value="<?php echo($tarefa["id"]>0)?"Atualizar":"Cadastrar";?>">
        </fieldset>
    </form>

</body>
</html>