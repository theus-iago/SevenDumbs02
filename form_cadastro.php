<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.jpg">
  <title>Formulário de Cadastro</title>
  <link rel="stylesheet" href="css/form_cadastro.css">
  <script src="js/index.js" defer></script>
</head>
<body>
 <div class="sidenav">
  <a href="index.php">Home</a>
  <a href="form_cadastro.php">Cadastro</a>
  <a href="form_login.php">Login</a>
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
  <form action="cadastro.php" method="post" autocomplete="off">
    <h2>Cadastro</h2>
    <br>
    <p>
      <input type="text" name="nome_completo" id="nome_completo" class="input" placeholder="Nome Completo" required>
    </p>
    <p>
      <input type="number" name="idade" id="idade" class="input" placeholder="Idade" required>
    </p>
    <p>
      <label for="genero">Genero</label>
    </p>
    <p class="radios">
      <input type="radio" name="genero" id="genero-m" value="masculino" required>
      <label for="genero-m">Masculino</label>
      <input type="radio" name="genero" id="genero-f" value="feminino" required>
      <label for="genero-f">Feminino</label>
    </p>
    <p>
      <input type="text" name="nome_usuario" id="nome_usuario" class="input" placeholder="Crie um nome de usuário" required>
    </p>
    <p>
      <input type="password" name="senha" id="senha" class="input" placeholder="Crie uma senha" required>
    </p>
    <p>
      <input type="password" name="" id="c_senha" class="input" placeholder="Confirme a sua senha" required>
    </p>
    <br>
    <p class="botoes">
      <input type="reset" class="botaoForm" id="btn-reset">
      <br>
      <input type="submit" class="botaoForm" name="botao" id="btn-submit">
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
