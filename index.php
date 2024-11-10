<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/css/MenuBar.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>UnityVerse</title>
    <link rel="icon" href="./view/img/logo.png" type="image/png">
</head>

<body>
    <?php
    include './view/Components/MenuBarra.php';
    renderMenuBar();
    ?>
    <section class="base-meio">
        <div class="base-container">
            <section class="base">
                <img src="./view/img/logo.png" alt="">
                <h2>UnityVerse</h2>
            </section>
            <section class="base-ant">
                <h1>Desenvolva, inspire, jogue.</h1>
            </section>
            <section class="sec-p">
                <p>Aqui você irá aprender por onde começar, onde criar, como criar e como expressar sua criatividade através de métodos utilizados por profissionais. Aprenderá o básico sobre as ferramentas e design também.</p>
            </section>
            <section class="botao-start">
                <button >Começar!</button>
            </section>
        </div>
        <section class="base-lado">
            <video src="./view/Movies/1.mp4" loop autoplay muted></video>
        </section>
    </section>
    <script src="./view/js/menu.js"></script> <!-- Adicione esta linha -->
</body>

</html>