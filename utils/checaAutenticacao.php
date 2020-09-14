<?php

  session_start();
  
  function checkAuth () {
    if(isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
      return;
    }
    echo 'oi';
    header("Location: index.php");

  }
  

?>