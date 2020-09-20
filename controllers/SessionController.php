<?php

require 'models/User.php';

class SessionController {

  public function create ($nome, $senha) {
    $user = new User();

    $user->nome = $nome;

    $current = $user->findOne();

    if (!$current) {
      return false;
    }

    if ($senha === $current->senha && $nome === $current->nome) {
      session_start();
      $_SESSION['user_id'] = $current->user_id;
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