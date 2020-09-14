<?php

require 'models/User.php';

function create($nome, $senha) {
  $user = new User();

  $user->nome = $nome;
  $user->senha = $senha;

  $user->save();

  // header("location:/trabalho1/index.php");
}


?>