<?php
session_start();
require_once './conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['userName'];
    $email = $_POST['userEmail'];
    $senha = $_POST['userPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $telefone = $_POST['userPhone'];
    $cpf = $_POST['userCpf'];
    $data_nascimento = $_POST['userBirth'];

    if ($senha !== $confirmPassword) {
        $_SESSION['error'] = "As senhas não coincidem!";
        header("Location: ../register.php");
        exit();
    }

    // Você pode adicionar mais validações aqui

    $sql = "INSERT INTO usuarios (nome, email, senha, telefone, cpf, data_nascimento) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $nome, $email, $senha, $telefone, $cpf, $data_nascimento);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['success'] = "Cadastro realizado com sucesso!";
        header("Location: ../index.php");
        exit();
    } else {
        $_SESSION['error'] = "Erro ao realizar cadastro!";
        header("Location: ../register.php");
        exit();
    }
}
?>