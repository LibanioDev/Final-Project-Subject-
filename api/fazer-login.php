<!--Script de autenticação de usuário-->

<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header("Location: ../login");
    die();
}

if(!isset($_POST['usuario'])){
    header("Location: ../login");
    die();
}

if(!isset($_POST['senha'])){
    header("Location: ../login");
    die();
}

session_start();

$usuario = $_POST['usuario'];
$senha = sha1($_POST['senha']); //criptografando senha

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'isabelle';
$port = 3306;

$conn = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM cadastro_aluno WHERE usuario = ? AND senha = ?";

$stmt = $conn->prepare($sql);
$stmt->execute([$usuario,$senha]);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(count($resultados) === 0){
    header("Location: ../login?login=false");
    die();
}

$_SESSION['logado'] = true;
header("Location: ../home");
die();

?>