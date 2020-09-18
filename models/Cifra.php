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
    $query = $this->bd->prepare("INSERT INTO cifras(nome_musica, nome_autor, conteudo, estilo) VALUES(:nome_musica, :nome_autor, :conteudo, :estilo)");
    $query->bindParam(':nome_musica', $this->nome_musica);
    $query->bindParam(':nome_autor', $this->nome_autor);
    $query->bindParam(':estilo', $this->estilo);
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
  
  public function findAll() {
    $query = $this->bd->prepare("SELECT * FROM cifras");
    $query->execute();  
    $cifras = $query->fetchAll(PDO::FETCH_OBJ);  
    
    return $cifras;
  }
  
  public function findById($id) {
    $query = $this->bd->prepare("SELECT * FROM cifras WHERE cifra_id = :cifra_id");
    $query->bindParam(':cifra_id', $id);
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