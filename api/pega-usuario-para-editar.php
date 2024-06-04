<?php

    function pegaUsuarioParaEditar($id){
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'isabelle';
        $port = 3306;
    
        $conn = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        
        $sql = "SELECT * FROM cadastro_aluno where id = ?;";
    
        $stmt = $conn->prepare($sql);
        $stmt->execute([intval($id)]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }