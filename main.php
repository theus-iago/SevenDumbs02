<?php
session_start();
if (
  !isset($_SESSION["nome_usuario"]) == true &&
  !isset($_SESSION["senha"]) == true
) {
  unset($_SESSION["nome_usuario"]);
  unset($_SESSION["senha"]);
  header("Location: form_login.php");
} elseif ($_SESSION["nome_usuario"] == "Iago" && $_SESSION["senha"] == "543") {
  header("Location: registros.php");
}
$logado = $_SESSION["nome_usuario"];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.jpg">
  <link rel="stylesheet" href="css/index.css">
  <title>Página Inicial</title>
  <script src="js/index.js" defer></script>
  <style>
   main {
    display:flex;
    align-items:center;
    justify-content:start;
    flex-direction:column;
   }
  </style>
</head>
<body>
<div class="sidenav">
  <div class="area-perfil">
  <div class="moldura-perfil">
    <div class="head"></div>
    <div class="body"></div>
  </div>
  <p><?php echo $logado; ?></p>
  </div>
 <br>
 <hr>
 <br>
  <a href="main.php">Página Inicial</a>
  <a href="#"></a>
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
   <br>
   <h2>SevenDumbs</h2>
  </header>
  <main>
    <div class="logos">
    <section class="logo">
      <a href="https://theus-iago.github.io/Master-Jump" target="_blank">
        <img src="images/MaterJump-logo.jpg" alt="logoMasterJump">
      </a>
    </section>
    <section class="logo">
      <a href="https://theus-iago.github.io/Projeto-Nebula-Space" target="_blank">
        <img src="images/NebulaSpace-logo.jpg" alt="logoNebulaSpace">
      </a>
    </section>
    </div>
  </main>
  <footer>
    <p>
      &copySevenDumbs
    </p>
  </footer>
</body>
</html>
