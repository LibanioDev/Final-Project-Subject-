<?php
  include('../html/valida-usuario-logado.php');
  include('../html/pega-usuarios.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Alunos</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <a href="../index.php" class="btn-sair">Sair</a>
    <div class="container">
        <h1>CRUD de Alunos</h1>
        <a href="../html/cadastro.php" class="add-btn">Adicionar Aluno</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuario</th>
                    <th>Matricula</th>
                    <th>Curso</th>
                    <th>Criado em</th>
                </tr>
            </thead>
            <tbody>

              <?php
                foreach ($resultados as $key => $value) {
              ?>
                <tr>
                  <td><?php echo $value['id'] ?></td>
                  <td><?php echo $value['nome'] ?></td>
                  <td><?php echo $value['usuario'] ?></td>
                  <td><?php echo $value['matricula'] ?></td>
                  <td><?php echo $value['curso'] ?></td>
                  <td><?php echo date('d/m/Y', strtotime($value['criado_em'])) ?></td>
                </tr>
              <?php
                }
              ?>
            </tbody>
        </table>
    </div>
</body>
</html>
