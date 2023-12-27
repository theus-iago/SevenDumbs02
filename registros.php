<?php
session_start();
include_once('config.php');
if(!isset($_SESSION['nome_usuario']) == true && !isset($_SESSION['senha']) == true) 
{
  unset($_SESSION['nome_usuario']);
  unset($_SESSION['senha']);
  header('Location: form_login.php');
}
$logado = $_SESSION['nome_usuario'];
$sql = "SELECT * FROM usuarios ORDER BY id_usuario DESC";
$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/registros.css">
  <title>Página de Registros</title>
  <script src="js/index.js" defer></script>
</head>
<body>
   <div class="sidenav">
  <a href="registros.php">Registros</a>
  <a href="main.php">Página Inicial</a>
  <a href="sair.php">Sair</a>
 </div>
 <div class="botao">
  <input type="checkbox" name="botao" id="botao">
  <label for="botao" class="button-label" onclick="menu()">
     <span></span>
     <span></span>
     <span></span>
  </label>
 </div>
  <header>
    <div class="titulo">
      <p>Bem-Vindo ao Setor de Registros <br> Sr. <?php echo "$logado"; ?></p>
    </div>
  </header>
  <main>
    <div class="box-table">
    <table>
      <caption>Usuários Registrados</caption>
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">nome_usuario</th>
          <th scope="col">Idade</th>
          <th scope="col" colspan="2">...</th>
        </tr>
      </thead>
      <tbody>
       <?php 
        while($user_data = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$user_data['id_usuario']."</td>";
          echo "<td>".$user_data['nome_usuario']."</td>";
          echo "<td>".$user_data['idade']."</td>";
          echo "<td>"."<a id='edit' href='edit.php?id_usuario=$user_data[id_usuario]'>edit</a>"."</td>";
          echo "<td>"."<a href='#' id='delete'>delete</a>"."</td>";
          echo "</tr>";
        }
       ?>
      </tbody>
    </table>
    </div>
  </main>
  <footer>
    <p>&copyIago</p>
  </footer>
</body>
</html>