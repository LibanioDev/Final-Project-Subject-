<?php
  include_once('./api/valida-usuario-logado.php');
  include_once('./api/pega-usuario-para-editar.php');
  if(!isset($_GET['id'])){
    header("Location: home");
  }
  $usuario = pegaUsuarioParaEditar($_GET['id']);
  if(count($usuario) < 1){
    header("Location: home");
  }

  $usuario = $usuario[0];
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
        <form action="api/editar-usuario.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="textfield">
                <input type="text" name="nome" id="nome" placeholder="nome" value="<?php echo $usuario['nome']; ?>">
            </div>
            <div class="textfield">
                <input type="text" name="usuario" id="usuario" placeholder="usuario" value="<?php echo $usuario['usuario']; ?>">
            </div>
            <div class="textfield">
                <input type="text" name="matricula" id="matricula" placeholder="matricula" value="<?php echo $usuario['matricula']; ?>">
            </div>
            <div class="textfield">
                <select name="curso">
                    <option <?php if($usuario['curso'] == 'Analise e Desenv. de Sistemas') { ?> selected <?php } ?> value="Analise e Desenv. de Sistemas">Analise e Desenv. de Sistemas</option>
                    <option <?php if($usuario['curso'] == 'Ciencias Contabeis') { ?> selected <?php } ?> value="Ciencias Contabeis">Ciencias Contabeis</option>
                    <option <?php if($usuario['curso'] == 'Direito') { ?> selected <?php } ?> value="Direito">Direito</option>
                    <option <?php if($usuario['curso'] == 'Odontologia') { ?> selected <?php } ?> value="Odontologia">Odontologia</option>
                    <option <?php if($usuario['curso'] == 'Admin') { ?> selected <?php } ?> value="Admin">Admin</option>
                </select>
            </div>

            <button class="add-btn">Salvar</button>
        </form>
    </div>
</body>
</html>
