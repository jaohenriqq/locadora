<?php
    session_start();
    require_once './php/userLogin.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['loginButton'])) {
        require_once './php/login.php';
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>locadora</title>
    <link rel="stylesheet" href="./src/style.css">
</head>

<body class="register">
    <div class="UseRegister">
     <?php if(isset($_SESSION['error'])): ?>
            <div class="error-message">
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>

        <h1 class="title">Login</h1>
        <div class="userConfirmation">

            <div>
                <label for="email">Email:</label><br>
                <input type="email" placeholder="Email"> <br><br>


                <label for="text">Senha:</label><br>
                <input type="password" placeholder="password">

            </div>


        </div> <br><br>

        <button class="buttonRegister">Criar Conta</button>


        <div class="userLink">
            <p>Não possui uma conta?<a href="index.html">Criar conta</a></p>
             <p><a href="tela.html">entrar</a></p>
        </div>
    </div>

</body>

</html>