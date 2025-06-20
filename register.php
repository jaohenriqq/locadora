<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <title>Home</title>
</head>

<body class="register">
    <div class="UseRegister">

        <h1 class="title">Cadastro</h1>

        <div class="userConfirmation">


            <?php if (isset($_SESSION['error'])): ?>
                <div class="error-message">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>






            <div>
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" placeholder="Nome"><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" placeholder="Email"><br><br>

                <label for="date">Data de Nascimento:</label><br>
                <input type="date" id="date"><br><br>

                <label for="cpf">CPF:</label><br>
                <input type="text" id="cpf" placeholder="Cpf"><br><br>
            </div>

            <div>
                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" placeholder="Password"><br><br>

                <label for="confirmarSenha">Confirmar Senha:</label><br>
                <input type="password" id="confirmarSenha" placeholder="Password"><br><br>

                <label for="tel">Telefone:</label><br>
                <input type="tel" id="tel" placeholder="Telefone"><br><br>

                <label for="cidade">Cidade:</label><br>
                <input type="text" id="cidade" placeholder="Cidade"><br><br>
            </div>
        </div>

        <div>
            <button class="buttonRegister">Criar Conta</button>
        </div>


        <div class="userLink">
            <p>Já Possui uma Conta? <a href="logUp.html">Fazer Login</a></p>

        </div>

    </div>
</body>

</html>