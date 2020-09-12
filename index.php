<?php  

  session_start();

  if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    header("Location: logado/");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <div class="box">
      <h1>Login</h1>

      <form method="POST">
        <div class="login-inputs">
          <span>Nome do usuário</span>
          <input type="text" name="usuario" id="usuario">
        </div>
        <div class="login-inputs">
          <span>Senha</span>
          <input type="password" name="senha" id="senha">
        </div>      
          <input type="submit" value="Entrar" class="entrar-input">
      </form>

      <?php
      
        require_once 'controllers/SessionController.php';

        if (isset($_POST['usuario'])) {

          $nome = $_POST['usuario'];         
          $senha = $_POST['senha'];

          $autenticado = create($nome, $senha);     
          
          if ($autenticado) {
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $_POST['usuario'];
      
            header("Location: logado/index.php");
          } else {
            echo '<span style="color: red;">Usuário ou senha incorretos</span>';
          }
          
        }
      ?>

      <br>
      <a href="signup.php">Cadastrar</a>
      


</div>
</div>
</body>
</html>

