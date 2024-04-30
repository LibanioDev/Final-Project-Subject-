<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Acadêmico: Gerenciamento de Alunos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Gerenciamento de Alunos</h1>
            <img src="../img/pupil.svg" class="image" alt="pupil animate">
        </div>
        <br><br>

        <div class="right-login">
            <form action="cadastrar.php" method="POST" class="card-login">
                <h2>CADASTRAR</h2>

                <div class="textfield">
                    <label for="usuario">Nome</label>
                    <input type="text" name="nome" id="nome" onchange="validateFields()" placeholder="Nome">
                </div>

                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario" onchange="validateFields()" placeholder="Usuário">
                </div>

                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="password" onchange="validateFields()" placeholder="Senha">
                </div>

                <div class="textfield">
                    <label>Selecione seu curso</a>
                    <select name="curso">
                        <option value="Analise e Desenv. de Sistemas">Analise e Desenv. de Sistemas</option>
                        <option value="Ciencias Contabeis">Ciencias Contabeis</option>
                        <option value="Direito">Direito</option>
                        <option value="Odontologia">Odontologia</option>
                    </select>
                </div>
               

                <button class="btn-login" id="login-button">Cadastrar</button>
                <a href="../index.php">Fazer Login</a>
            </form>
    </div>

    <script src="./js/script.js"></script>
    <script src="./js/funcoes.js"></script>
</body>
</html>