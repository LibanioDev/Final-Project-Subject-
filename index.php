<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Acadêmico: Gerenciamento de Alunos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Gerenciamento de Alunos</h1>
            <img src="img/pupil.svg" class="image" alt="pupil animate">
        </div>
        <br><br>

        <div class="right-login">
            <div class="card-login">
                <h2>LOGIN</h2>

                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario" onchange="validateFields()" placeholder="Usuário">
                </div>

                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="password" onchange="validateFields()" placeholder="Senha">
                </div>

                <button class="btn-login" id="login-button" disabled="true">Login</button>
                <button class="recuperar-senha" id="recover-password-button" disabled="true">Recuperar Senha</button>
                <button class="cadastro">Cadastro</button>
            </div>
    </div>

    <script src="/js/script.js"></script>
</body>
</html>