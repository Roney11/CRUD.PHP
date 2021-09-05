<?php 

require_once('conexao.php');

$id = $_POST['codigo'];
$usuario = $_POST['txt_usuario'];
$senha = $_POST['txt_senha'];
$email = $_POST['txt_email'];
$cargo = $_POST['cargo'];

$sql_atualizar = mysqli_query($ligar , "UPDATE tb_usuarios SET usuario = '$usuario', senha = '$senha', email = '$email', cargo = '$cargo' WHERE id = '$id' ");

if($sql_atualizar == true) {
    echo " <script>

    alert('Usuário Editado com Sucesso')
    window.location.href = 'listar-usuarios.php'
    
    </script> ";
}else {
    echo " <script>

    alert('Falha ao Atualizar')
    window.location.href = 'editar.php'
    
    </script> ";

}
