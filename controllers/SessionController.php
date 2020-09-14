<?php

require 'models/User.php';

class SessionController {

  public function create ($nome, $senha) {
    $user = new User();

    $user->nome = $nome;

    $current = $user->findOne();

    if ($senha === $current->senha) {
      return true;
    }

    return false;
  }

  public function __get($propriedade) {
    return $this->$propriedade;
  }

  public function __set($propriedade, $valor) {
    return $this->$propriedade = $valor;
  }
}