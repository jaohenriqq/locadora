<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/style.css">
</head>

<body>
    <div>
        <h1 class="home"> LocalFlix</h1>
    </div>

    <div class="page">

        <div>
            <h2 class="title-film">Marvel</h2>
            <div class="tela">

                <div class="catalogo">
                    <img src="./img/capitaoamerica4.png">
                    <p class="title-name">Capitao América</p>
                </div>

                <div class="catalogo">
                    <img src="./img/guerrainfinita.png" alt="">
                    <p class="title-name">Vingadores Guerra Infinita</p>
                </div>

                <div class="catalogo">
                    <img src="./img/guadios.jpg" alt="">
                    <p class="title-name">Guardiões da Galáxia</p>
                </div>

                <div class="catalogo">
                    <img src="./img/thor.png" alt="">
                    <p class="title-name">Thor Ragnarok</p>
                </div>

                <div class="catalogo">
                    <img src="./img/guerracivil.png" alt="">
                    <p class="title-name">Guerra Civil</p>
                </div>

                <div class="catalogo">
                    <img src="./img/4fantastico.png" alt="">
                    <p class="title-name">4 Fantástico</p>
                </div>

                <div class="catalogo">
                    <img src="./img/vingadore.png" alt="">
                    <p class="title-name">Vingadores</p>
                </div>

                <div class="catalogo">
                    <img src="./img/vingadores.png" alt="">
                    <p class="title-name">Vingadores 2</p>
                </div>

            </div>

        </div>
        <div>
            <h2 class="title-film">Animações</h2>
            <div class="tela">

                <div class="catalogo">
                    <img src="./img/valente.png">
                    <p class="title-name">Valente</p>
                </div>

                <div class="catalogo">
                    <img src="./img/toytory.png" alt="">
                    <p class="title-name">Toy Stoy</p>
                </div>

                <div class="catalogo">
                    <img src="./img/incriveis.png" alt="">
                    <p class="title-name">Incriveis</p>
                </div>

                <div class="catalogo">
                    <img src="./img/dory.png" alt="">
                    <p class="title-name">Procurando Dory</p>
                </div>

                <div class="catalogo">
                    <img src="./img/Inseto.png" alt="">
                    <p class="title-name">Vida de Inseto</p>
                </div>

                <div class="catalogo">
                    <img src="./img/wall.png" alt="">
                    <p class="title-name">Wall-E</p>
                </div>

                <div class="catalogo">
                    <img src="./img/rato.png" alt="">
                    <p class="title-name">Ratatouile</p>
                </div>

                <div class="catalogo">
                    <img src="./img/carro.png" alt="">
                    <p class="title-name">Carros</p>
                </div>

            </div>
        </div>

        <div>
            <h2 class="title-film">Ação de Bala</h2>
            <div class="tela">

                <div class="catalogo">
                    <img src="./img/regate.png">
                    <p class="title-name">Resgate</p>
                </div>

                <div class="catalogo">
                    <img src="./img/tropa.png" alt="">
                    <p class="title-name">Tropa de Elite</p>
                </div>

                <div class="catalogo">
                    <img src="./img/300.png" alt="">
                    <p class="title-name">300</p>
                </div>

                <div class="catalogo">
                    <img src="./img/tropa2.png" alt="">
                    <p class="title-name">Tropa de Elite 2</p>
                </div>

                <div class="catalogo">
                    <img src="./img/lenda.png" alt="">
                    <p class="title-name">Eu Sou A Lenda</p>
                </div>

                <div class="catalogo">
                    <img src="./img/bad.png" alt="">
                    <p class="title-name">Bad Boys</p>
                </div>

                <div class="catalogo">
                    <img src="./img/bad2.png" alt="">
                    <p class="title-name">Bad Boys 2</p>
                </div>

                <div class="catalogo">
                    <img src="./img/robo.png" alt="">
                    <p class="title-name">Eu Robô
                </div>

            </div>
        </div>

        
    </div>

    <footer class="footer">
        <p>Direitos Autorais reservados a LocalFlix</p>
        <a href="logUp.html">Voltar ao Login</a>
    </footer>



</body>