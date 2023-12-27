<?php 
include_once('config.php');
if(isset($_POST['update']))
{
   $nome_completo = $_POST['nome_completo'];
   $idade = $_POST['idade'];
   $genero = $_POST['genero'];
   $nome_usuario = $_POST['nome_usuario'];
   $senha = $_POST['senha']; 
   $id_usuario = $_POST['id_usuario'];
   $sqlUpdate = "UPDATE usuarios SET nome_completo='$nome_completo',idade='$idade',genero='$genero',nome_usuario='$nome_usuario',senha='$senha' WHERE id_usuario='$id_usuario'";
   
   $result = $conexao->query($sqlUpdate);
}
header('Location: registros.php');
?>