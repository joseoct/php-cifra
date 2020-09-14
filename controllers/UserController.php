<?php

require 'models/User.php';

class UserController {

  public function create ($nome, $senha) {
    $user = new User();

    $user->nome = $nome;
    $user->senha = $senha;

    $user->save();
  }

  public function __get($propriedade) {
    return $this->$propriedade;
  }

  public function __set($propriedade, $valor) {
    return $this->$propriedade = $valor;
  }
}