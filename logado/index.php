<?php 

require '../checaAutenticacao.php';

checkAuth();
// Funções
$acao = $_GET["acao"] ?? "listar";

// UI
require_once("views.php");