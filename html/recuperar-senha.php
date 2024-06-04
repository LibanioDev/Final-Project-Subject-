<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Acadêmico: Gerenciamento de Alunos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div id="mensagemBox" class="popUpDesabilitado">
        <p id="mensagemTexto"></p>
    </div>
    <div class="main-login">
        
        <div class="left-login">
            <form action="api/recupera.php" method="POST" class="card-login">
                <div class="container-imagem mobile-imagem">
                    <!--<h1>Gerenciamento de Alunos</h1>-->
                    <img src="./img/pupil.svg" class="image" alt="pupil animate">
                </div>
                <h2 class="titulo-card">RECUPERAR SENHA</h2>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario" onchange="validateFields()" placeholder="Usuário">
                </div>

                <div class="textfield">
                    <label for="senha">Nova Senha</label>
                    <input type="password" name="senha" id="password" onchange="validateFields()" placeholder="Nova Senha">
                </div>
                <small id="textoRedefinirDiferente" class="popUpDesabilitado" style="color: red;">As senhas devem ser iguais</small>
                <div class="textfield">
                    <label for="senha">Repita a Nova Senha</label>
                    <input type="password" onchange="verificaSenhasIguais()" id="password-repeat" placeholder="Repita a Nova Senha">
                </div>
                
                <br>
                <button disabled class="btn-login" id="login-button">Redefinir</button>
                <a href="login" class="cadastro">Voltar</a><br>
            </form>
        </div>
        <div class="right-login">
            <div class="container-imagem">
                <!--<h1>Gerenciamento de Alunos</h1>-->
                <img src="./img/pupil.svg" class="image" alt="pupil animate">
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
    <script src="./js/validacao.js"></script>
</body>
</html>