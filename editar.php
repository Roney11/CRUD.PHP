<?php 

    require_once('conexao.php');

    $id = $_GET['codigo'];

    $sql_consulta = mysqli_query($ligar, "SELECT *FROM tb_usuarios where id='$id' ");

    $dados = mysqli_fetch_array($sql_consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="atualizar_cadastro.php" method="POST">

        <input type="hidden" name="codigo" value="<?= $dados[0] ?>">
    
        <label for="nome">Nome:</label>
        <br>
        <input type="text" name="txt_usuario" value="<?= $dados[1] ?>">
        <br>
        <label for="senha">Senha:</label>
        <br>
        <input type="password" name="txt_senha" value="<?= $dados[2] ?>">
        <br>
        <label for="mail">E-mail:</label>
        <br>
        <input type="email" name="txt_email" value="<?= $dados[3] ?>">
        <br>
        <br>
        <label for="text">Cargo:</label>
            <select name="cargo" id="">
            <option <?= $dados[4] ?>><?= $dados[4] ?></option>
            <option value="help">Help Desk</option>
            <option value="instalador">Instalador</option>
            <option value="reparo">Reparador</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Atualizar">
        <br>
        <br>
        <a href="listar-usuarios.php">Cancelar</a>

    </form>    
</body>
</html>