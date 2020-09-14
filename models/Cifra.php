<?php

require_once 'Conexao.php';

class Cifra {

  private $bd;
  private $nome_musica;
  private $nome_autor;
  private $cifra;

  public function __construct() {
    $this->bd = Conexao::get();
  }

  public function save () {
    $query = $this->bd->prepare("INSERT INTO cifras(nome_musica, nome_autor, conteudo) VALUES(:nome_musica, :nome_autor, :conteudo)");
    $query->bindParam(':nome_musica', $this->nome_musica);
    $query->bindParam(':nome_autor', $this->nome_autor);
    $query->bindParam(':conteudo', $this->conteudo);
    $query->execute();  
    
    $cifra_id = $this->bd->lastInsertId();
    session_start();
    $user_id = $_SESSION['user_id'];
    
    $query = $this->bd->prepare("INSERT INTO users_cifras(user_id, cifra_id) VALUES(:user_id, :cifra_id)");
    $query->bindParam(':user_id', $user_id);
    $query->bindParam(':cifra_id', $cifra_id);
    $query->execute();  
  }

  public function __get($propriedade) {
    return $this->$propriedade;
  }

  public function __set($propriedade, $valor) {
    return $this->$propriedade = $valor;
  }
}