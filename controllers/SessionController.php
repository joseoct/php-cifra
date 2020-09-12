<?php

require 'models/User.php';

function create ($nome, $senha) {
  $user = new User();

  $user->nome = $nome;

  $current = $user->findOne();

  if ($senha === $current->senha) {
    return true;
  }

  return false;
}


?>