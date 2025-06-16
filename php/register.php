<?php
session_start();
require_once './conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $userPhone = $_POST['userPhone'];
    $userCpf = $_POST['userCpf'];
    $userBirth = $_POST['userBirth'];

    // Validação básica de senha
    if ($userPassword !== $confirmPassword) {
        $_SESSION['error'] = "As senhas não coincidem!";
        header("Location: ../pages/register.php");
        exit();
    }

    try {
        $stmt = $conexao->prepare("INSERT INTO usuarios (userName, userEmail, userPassword, userPhone, userCpf, userBirth) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $userName, $userEmail, $userPassword, $userPhone, $userCpf, $userBirth);
        $stmt->execute();
        
        $_SESSION['success'] = "Cadastro realizado com sucesso!";
        header("Location: ../index.php");
        exit();
    } catch(Exception $e) {
        $_SESSION['error'] = "Erro ao realizar cadastro!";
        header("Location: ../pages/register.php");
        exit();
    }
}
?> 