<?php

require_once 'Conexao.php';

class User {

  private $bd;
  private $nome;
  private $senha;

  public function __construct() {
    $this->bd = Conexao::get();
  }

  public function save () {
    $query = $this->bd->prepare("INSERT INTO users(nome, senha) VALUES(:nome, :senha)");
    $query->bindParam(':nome', $this->nome);
    $query->bindParam(':senha', $this->senha);
    $query->execute();
  }

  public function findOne () {
    $query = $this->bd->prepare("SELECT * FROM users WHERE nome = :nome");
    $query->bindParam(':nome', $this->nome);
    $query->execute();
    return $query->fetch(PDO::FETCH_OBJ);
  }

  public function __get($propriedade) {
    return $this->$propriedade;
  }

  public function __set($propriedade, $valor) {
    return $this->$propriedade = $valor;
  }
}