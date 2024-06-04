<!--Script de autenticação de usuário-->

<?php

if($_SERVER['REQUEST_METHOD'] !== 'GET'){
    header("Location: ../login");
    die();
}

$mensagem = "";

if(!isset($_GET['id'])){
    die('Nenhum parametro id foi enviado');
}

$id = $_GET['id'];

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

$sql = "DELETE FROM cadastro_aluno WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

header("Location: ../home");
die();

?>