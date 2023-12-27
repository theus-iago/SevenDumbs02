<?php
session_start();
unset($_SESSION['nome_usuario']);
unset($_SESSION['senha']);
header('Location: index.php');
?>