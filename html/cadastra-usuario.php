<?php
  include_once('./api/valida-usuario-logado.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Alunos</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <a href="login" class="btn-sair">Sair</a>
    <div class="container">
        <h1>CRUD de Alunos</h1>
        <a href="home" class="add-btn">Voltar</a>
        <form action="api/cadastrar.php?path=home" method="POST">
            <div class="textfield">
                <input type="text" name="nome" id="nome" placeholder="nome">
            </div>
            <div class="textfield">
                <input type="text" name="usuario" id="usuario" placeholder="usuario">
            </div>
            <div class="textfield">
                <input type="password" name="senha" id="password" onchange="validateFields()" placeholder="Senha">
            </div>
            <small id="textoRedefinirDiferente" class="popUpDesabilitado" style="color: red;">As senhas devem ser iguais</small>
            <div class="textfield">
                <input type="password" onchange="verificaSenhasIguais()" id="password-repeat" placeholder="Repita a Nova Senha">
            </div>
            <div class="textfield">
                <select name="curso">
                    <option value="Analise e Desenv. de Sistemas">Analise e Desenv. de Sistemas</option>
                    <option value="Ciencias Contabeis">Ciencias Contabeis</option>
                    <option value="Direito">Direito</option>
                    <option value="Odontologia">Odontologia</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>

            <button id="login-button" disabled class="add-btn">Salvar</button>
        </form>
    </div>
    <script src="./js/validacao.js"></script>
</body>
</html>
