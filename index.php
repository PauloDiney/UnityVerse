<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/css/MenuBar.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <title>UnityVerse</title>
    <link rel="icon" href="./view/img/logo.png" type="image/png">
</head>

<body>
    <?php
    include './view/Components/MenuBarra.php';
    ?>
    <section class="base-meio" data-aos="fade-up" data-aos-duration="2000">
        <div class="base-container">
            <section class="base" data-aos="fade-up" data-aos-duration="2000">
                <img src="./view/img/logo.png" alt="">
                <h2>UnityVerse</h2>
            </section>
            <section class="base-ant" data-aos="fade-up" data-aos-duration="2000">
                <h1>Desenvolva, inspire, jogue.</h1>
            </section>
            <section class="sec-p" data-aos="fade-up" data-aos-duration="2000">
                <p>Aqui você irá aprender por onde começar, onde criar, como criar e como expressar sua criatividade através de métodos utilizados por profissionais. Aprenderá o básico sobre as ferramentas e design também.</p>
            </section>
            <section class="botao-start" data-aos="fade-up" data-aos-duration="2000">
                <button>Começar!</button>
            </section>
        </div>
        <section class="base-lado" data-aos="fade-left" data-aos-duration="2000">
            <video src="./view/Movies/1.mp4" loop autoplay muted></video>
        </section>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="./view/js/menu.js"></script>
</body>

</html>