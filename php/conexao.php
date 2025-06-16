<?php
    $conexao = mysqli_connect("localhost", "root", "", "local_flix");
    
    if (!$conexao) {
        die("Erro de conexão: " . mysqli_connect_error());
    }

    // Cria a tabela se não existir
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        senha VARCHAR(255) NOT NULL,
        telefone VARCHAR(20) NOT NULL,
        cpf VARCHAR(14) NOT NULL UNIQUE,
        data_nascimento DATE NOT NULL,
        data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    if (!mysqli_query($conexao, $sql)) {
        die("Erro ao criar tabela: " . mysqli_error($conexao));
    }
?>