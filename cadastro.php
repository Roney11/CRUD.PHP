<?php 

require_once('conexao.php');

$usuario = $_POST['txt_usuario'];
$senha = $_POST['txt_senha'];
$email = $_POST['txt_email'];
$cargo = $_POST['cargo'];

$sql_cadastro = mysqli_query($ligar , "INSERT INTO tb_usuarios (usuario, senha, email, cargo) values ('$usuario', '$senha','$email', '$cargo')");

if($sql_cadastro == true) {
    echo " <script>

    alert('Usuário Cadastrado com Sucesso')
    window.location.href = 'index.html'
    
    </script> ";
}else {
    echo " <script>

    alert('Falha no Cadastro')
    window.location.href = 'cadastrar-usuario.html'
    
    </script> ";

}