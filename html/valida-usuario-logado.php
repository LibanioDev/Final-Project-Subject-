<?php

session_start();

if(!isset($_SESSION['logado']) && $_SESSION['logado'] != true){
    $mensagem = "Para acessar a home, é necessário fazer login";
    header("Location: ../index.php?mensagem=".$mensagem);
    die();
}