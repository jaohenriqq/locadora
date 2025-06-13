<?php
    require_once 'conexao.php';

    $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : '';
    $userPassword = isset($_POST['userPassword']) ? $_POST['userPassword'] : '';

    if($userEmail === '' || $userPassword === ''){
        $_SESSION['error'] = "Um dos campos necessários não foi preenchido corretamente.";
        header("Location: /ex-locadora-main/index.php");
        exit();
    }
    else{
        $stmt = $conexao->prepare("SELECT userEmail, userPassword, userName FROM usuarios WHERE userEmail = ?");
        $stmt->bind_param("s", $userEmail);
        $stmt->execute();
        $consulta = $stmt->get_result();
        if($usuarios = $consulta->fetch_assoc()){
            if($usuarios['userPassword'] === $userPassword){
                $_SESSION['user'] = $usuarios['userName'];
                header("Location: /ex-locadora-main/pages/home.php");
                exit();
            } 
            else {
                $_SESSION['error'] = "A senha para o usuário está incorreta.";
                header("Location: /ex-locadora-main/index.php");
                exit();
            }
        }
        else{
            $_SESSION['error'] = "O email informado não está cadastrado";
            header("Location: /ex-locadora-main/index.php");
            exit();
        }
    }
?>
