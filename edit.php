<?php 
 if(!empty($_GET['id_usuario'])) {
   include_once("config.php");
   
   $id_usuario = $_GET['id_usuario'];
   
   $sqlSelect = "SELECT * FROM usuarios WHERE id_usuario= $id_usuario";
   
   $result = $conexao->query($sqlSelect);
   
   if($result->num_rows > 0)
   {
     while($user_data = mysqli_fetch_assoc($result))
     {
   $id_usuario = $user_data['id_usuario'];
   $nome_completo = $user_data['nome_completo'];
   $idade = $user_data['idade'];
   $genero = $user_data['genero'];
   $nome_usuario =
   $user_data['nome_usuario'];
   $senha = $user_data['senha'];
   }
     }
   else 
   {
     header('registros.php');
   }
 }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.jpg">
  <title>Formulário de Edição de informações do usuário</title>
  <link rel="stylesheet" href="css/form_cadastro.css">
  <script src="js/index.js" defer></script>
</head>
<body>
 <div class="sidenav">
  <a href="registros.php">Voltar</a>
 </div>
 <div class="botao">
  <input type="checkbox" name="botao" id="botao">
  <label for="botao" class="button-label" onclick="menu()">
     <span></span>
     <span></span>
     <span></span>
  </label>
 </div>
  <div class="form-box">
  <form action="saveEdit.php" method="post" autocomplete="off">
    <h2>Edição</h2>
    <br>
    <p>
      <input type="text" name="nome_completo" id="nome_completo" class="input" value="<?php echo $nome_completo ?>" placeholder="Nome Completo" required>
    </p>
    <p>
      <input type="number" name="idade" id="idade" class="input" value="<?php echo $idade ?>"  placeholder="Idade" required>
    </p>
    <p>
      <label for="genero">Genero</label>
    </p>
    <p class="radios">
      <input type="radio" name="genero" id="genero-m" value="masculino" <?php echo ($genero == 'masculino') ? 'checked' : '' ?> required>
      <label for="genero-m">Masculino</label>
      <input type="radio" name="genero" id="genero-f" value="feminino" <?php echo ($genero == 'feminino') ? 'checked' : '' ?> required>
      <label for="genero-f">Feminino</label>
    </p>
    <p>
      <input type="text" name="nome_usuario" id="nome_usuario" class="input" value="<?php echo $nome_usuario ?>"  placeholder="Crie um nome de usuário" required>
    </p>
    <p>
      <input type="text" name="senha" id="senha" class="input" value="<?php echo $senha ?>" placeholder="Crie uma senha" required>
    </p>
    <p>
      <input type="text" name="" id="c_senha" class="input" value="<?php echo $senha ?>" placeholder="Confirme a sua senha" required>
    </p>
    <br>
    <p class="botoes">
      <input type="reset" class="botaoForm" id="btn-reset">
      <br>
      <input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">
      <input type="submit" class="botaoForm" name="update" id="update">
    </p>
  </form>
  </div>
  <footer>
    <p>
      &copySevenDumbs
    </p>
  </footer>
</body>
</html>
