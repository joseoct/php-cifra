<?php

  require 'controllers/UsersController.php';

  if(isset($_POST['name'])){
    $nome = $_POST['name'];
    $senha = $_POST['pass'];

    create($nome, $senha);
  }


?>

<div class="container">
    <div class="box">
      <h1>Cadastrar</h1>  

      <form method="POST">
        <div class="login-inputs">
          <span>Nome</span>
          <input type="text" name="name" id="name">
        </div>
        <div class="login-inputs">
          <span>Senha</span>
          <input type="password" name="pass" id="pass">
        </div>     
        
          <input type="submit" value="Cadastrar" class="entrar-input">
      </form>

   </div>
  </div>