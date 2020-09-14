<?php 
// Funções
require_once("controllers/SessionController.php");

$acao = $_GET["acao"] ?? "signin";

// Logica
if($acao == 'signin') {
  
  
  session_start();

  if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $acao = 'logado';
  }
  
  
  if (isset($_POST['nome']) && isset($_POST['senha'])) {

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $autenticado = create($nome, $senha);

    if ($autenticado) {
      $_SESSION['logado'] = true;
      $_SESSION['usuario'] = $_POST['usuario'];

      $acao = 'logado';
    } else {
      echo '<span style="color: red;">Usuário ou senha incorretos</span>';
    }
  }

} else if ($acao == 'logout') {
  echo 'oi';
  session_start(); //to ensure you are using same session
  session_destroy(); //destroy the session
  $acao = 'signin';
  header("location:/trabalho10/index.php");
}

// UI
require_once("views.php");