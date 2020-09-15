<?php

require 'models/Cifra.php';

class CifraController {

  public function create ($musica, $autor, $estilo, $conteudo) {
    $cifra = new Cifra();

    $cifra->nome_musica = $musica;
    $cifra->nome_autor = $autor;
    $cifra->estilo = $estilo;
    $cifra->conteudo = $conteudo;

    $cifra->save();
  }

  public function index () {
    $cifra = new Cifra();

    return $cifra->findAll();
  }

  public function show ($id) {
    $cifra = new Cifra();

    return $cifra->findById($id);
  }

  public function __get($propriedade) {
    return $this->$propriedade;
  }

  public function __set($propriedade, $valor) {
    return $this->$propriedade = $valor;
  }
}