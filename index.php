<?php
    session_start();
    session_destroy();
    if(isset($_GET['login'])){
        $login = $_GET['login'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Acadêmico: Gerenciamento de Alunos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="mensagemBox" class="popUpDesabilitado">
        <p id="mensagemTexto"></p>
    </div>
    <div class="main-login">
        
        <div class="left-login">
            <form action="html/login.php" method="POST" class="card-login">
                <div class="container-imagem mobile-imagem">
                    <!--<h1>Gerenciamento de Alunos</h1>-->
                    <img src="img/pupil.svg" class="image" alt="pupil animate">
                </div>
                <h2 class="titulo-card">LOGIN</h2>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario" onchange="validateFields()" placeholder="Usuário">
                </div>

                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="password" onchange="validateFields()" placeholder="Senha">
                </div>
                <br>
                <button class="btn-login" id="login-button">Login</button>
                <a href="./html/cadastro.php" class="cadastro">Cadastro</a>
            </form>
        </div>
        <div class="right-login">
            <div class="container-imagem">
                <!--<h1>Gerenciamento de Alunos</h1>-->
                <img src="img/pupil.svg" class="image" alt="pupil animate">
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
    <script src="./js/funcoes.js"></script>
</body>
</html>