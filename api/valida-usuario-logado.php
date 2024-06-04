<?php

if(!isset($_SESSION['logado']) && $_SESSION['logado'] != true){
    $mensagem = "Para acessar a home, é necessário fazer login";
    header("Location: login?mensagem=".$mensagem);
    die();
}