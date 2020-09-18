<?php

class Conexao {
  private static $instancia;

  public static function get() {
    try {
      if(!isset(self::$instancia))

        // self::$instancia = new PDO("pgsql:host=localhost;port=5432;dbname=php-cifra;user=postgres;password=docker");
      
        self::$instancia = new PDO("mysql:host=localhost;dbname=t1-web;user=root;password=");
        
      return self::$instancia;

    } catch(Exception $e) {

      throw new Exception($e->getMessage());
      
    }
  }
  
}

?>
