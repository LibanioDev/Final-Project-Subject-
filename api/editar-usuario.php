<!--Script de autenticação de usuário-->

<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header("Location: ../home");
    die();
}

$mensagem = "";

if(!isset($_POST['usuario']) || !isset($_POST['nome']) || !isset($_POST['curso']) || !isset($_POST['matricula']) || !isset($_GET['id'])){
    header("Location: ../home");
    die();
}

$usuario = $_POST['usuario'];
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$curso = $_POST['curso'];
$id = $_GET['id'];

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'isabelle';
$port = 3306;

$conn = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "UPDATE cadastro_aluno SET usuario = ?, nome = ?, matricula = ?, curso = ? WHERE id = ?;";

$stmt = $conn->prepare($sql);
$stmt->execute([$usuario, $nome, $matricula, $curso, $id]);

header("Location: ../home");
die();

?>