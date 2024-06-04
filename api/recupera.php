<!--Script de autenticação de usuário-->

<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header("Location: ../login");
    die();
}

$mensagem = "";

if(!isset($_POST['usuario']) || !isset($_POST['senha'])){
    $mensagem = "Nem todos os parametros foram enviados";
    header("Location: ../recuperar-senha?mensagem=".$mensagem);
    die();
}

$usuario = $_POST['usuario'];
$senha = sha1($_POST['senha']); //criptografando senha

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

if(count($resultados) == 0){
    $mensagem = "Usuario ".$usuario." não existe";
    header("Location: ../recuperar-senha?mensagem=".$mensagem);
    die();
}

$sql = "UPDATE cadastro_aluno SET senha = ? where usuario = ?";

$stmt = $conn->prepare($sql);
$date = new DateTime();
$stmt->execute([$senha, $usuario]);

$mensagem = "Senha editada com sucesso!";
header("Location: ../login?mensagem=".$mensagem);
die();

?>