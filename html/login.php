<!--Script de autenticação de usuário-->

<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header("Location: index.php");
    die();
}

if(!isset($_POST['usuario'])){
    header("Location: index.php");
    die();
}

if(!isset($_POST['senha'])){
    header("Location: index.php");
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

$sql = "SELECT * FROM cadastro_aluno WHERE usuario = ? AND senha = ?";

$stmt = $conn->prepare($sql);
$stmt->execute([$usuario,$senha]);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(count($resultados) === 0){
    header("Location: index.php?login=false");
    die();
}

header("Location: home.php");
die();

?>