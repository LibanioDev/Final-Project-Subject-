<!--Script de autenticação de usuário-->

<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header("Location: ../login");
    die();
}

$mensagem = "";

if(!isset($_POST['usuario']) || !isset($_POST['senha']) || !isset($_POST['nome']) || !isset($_POST['curso'])){
    $mensagem = "Nem todos os parametros foram enviados";
    header("Location: ../login?mensagem=".$mensagem);
    die();
}

$usuario = $_POST['usuario'];
$senha = sha1($_POST['senha']); //criptografando senha
$nome = $_POST['nome'];
$curso = $_POST['curso'];

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'isabelle';
$port = 3306;

$conn = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM cadastro_aluno WHERE usuario = ?";

$stmt = $conn->prepare($sql);
$stmt->execute([$usuario]);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(count($resultados) > 0){
    $mensagem = "Usuario já existente";
    header("Location: ../login?mensagem=".$mensagem);
    die();
}

$numero_aleatorio = '';
for ($i = 0; $i < 6; $i++) {
    $numero_aleatorio .= rand(0, 9); // Concatenando um número aleatório de 0 a 9
}

$sql = "INSERT INTO cadastro_aluno (usuario, senha, nome, matricula, curso, criado_em) VALUES (?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$date = new DateTime();
$stmt->execute([$usuario,$senha, $nome, $numero_aleatorio, $curso, $date->format('Y-m-d H:i:s')]);

$mensagem = "Usuario cadastrado com sucesso!";
header("Location: ../login?mensagem=".$mensagem);
die();

?>