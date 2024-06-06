<?php
    require_once('./rotas.php');
    session_start();
    $request = $_SERVER['REQUEST_URI'];
    $request = str_replace('/Final-Project-Subject-/', '', $request);
    $request = parse_url($request, PHP_URL_PATH);
   

    if (array_key_exists($request, $routes)) {
        include $routes[$request];
        die();
    } else {
        echo 'Erro 404: Página não encontrada';
        die();
    }
?>
