<?php
if (isset($_POST["botao"])) {
  include_once "config.php";
  $nome_completo = $_POST["nome_completo"];
  $idade = $_POST["idade"];
  $genero = $_POST["genero"];
  $nome_usuario = $_POST["nome_usuario"];
  $senha = $_POST["senha"];

  $result = mysqli_query(
    $conexao,
    "INSERT INTO usuarios(nome_completo,idade,genero,nome_usuario,senha) VALUES('$nome_completo','$idade','$genero','$nome_usuario','$senha')"
  );
} ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.jpg">
  <title>Usuário cadastrado com sucesso</title>
  <style>
    * {
      margin:0;
      padding:0;
      box-sizing:border-box;
    }
    body {
      background-color:lightgray;
      height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
    }
    .container {
      background-color:white;
      border-radius:8px;
      color:black;
      padding:8px;
    }
  </style>
</head>
<body>
<script>
  location.href = "form_login.php";
</script>
</body>
</html>