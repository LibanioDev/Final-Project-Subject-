<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'isabelle';
    $port = 3306;

    $conn = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "SELECT * FROM cadastro_aluno where usuario <> 'admin';";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>