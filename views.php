<?php 
    require_once("views/header.php");

    if(file_exists("views/${acao}.view.php"))
        require_once("views/${acao}.view.php");
    else
        require_once("views/signin.view.php");

    require_once("views/footer.php");