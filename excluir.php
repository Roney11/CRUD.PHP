<?php 

require_once('conexao.php');

$id = $_GET['codigo'];

$sql_excluir = mysqli_query($ligar, " DELETE FROM tb_usuarios where id='$id' ");

if ($sql_excluir == true){
    echo "<script>
    
    alert('Usuário excluído com sucesso')
    window.location.href = 'listar-usuarios.php'

    </script>";
}else {

    echo " <script>

    alert('Falha ao excluir usuário')
    window.location.href = 'listar-usuario.php'
    
    </script> ";
    
}