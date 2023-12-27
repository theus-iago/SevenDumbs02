<?php
 $dbHostname = "192.168.18.8";
 $dbUsername = "iago";
 $password = "entercode";
 $dbname = "formulario";

 $conexao = new mysqli($dbHostname,$dbUsername,$password,$dbname);
 /*if($conexao->connect_error) {
  echo "Falha!";
 }else {
  echo "Banco de Dados conectado!";
 }*/
?>