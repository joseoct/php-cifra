<?php

require 'models/Cifra.php';

class CifraController {

  public function create ($musica, $autor, $conteudo) {
    $cifra = new Cifra();

    $cifra->nome_musica = $musica;
    $cifra->nome_autor = $autor;
    $cifra->conteudo = $conteudo;

    $cifra->save();
  }

  public function __get($propriedade) {
    return $this->$propriedade;
  }

  public function __set($propriedade, $valor) {
    return $this->$propriedade = $valor;
  }
}