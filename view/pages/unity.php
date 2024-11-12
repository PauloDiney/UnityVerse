<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/MenuBar.css">
    <link rel="stylesheet" href="../css/unity.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <title>UnityVerse</title>
    <link rel="icon" href="../img/logo.png" type="image/png">
</head>

<body>
    <?php
    include '../Components/MenuBarra.php';
    ?>
    <section class="unity-base-meio" data-aos="fade-up" data-aos-duration="2000">
        <div class="unity-base-container">
            <section class="unity-base" data-aos="fade-up" data-aos-duration="2000">
                <img src="../img/unity.png" alt="UnityVerse Logo">
            </section>
        </div>
    </section>
    <section class="unity-info-container" data-aos="fade-up" data-aos-duration="2000">
        <div class="text-content">
            <h2>Informações Adicionais</h2>
            <p>Liberte sua criatividade
                O motor líder da indústria da Unity fornece ferramentas para criar e operar incríveis games e outras experiências interativas em tempo real e publicá-las em uma ampla gama de dispositivos.
                Unity 6, a versão mais recente, vem carregada com renderização mais rápida, opções de iluminação poderosas, fluxos de trabalho multiplayer de ponta a ponta, capacidades de IA expandidas e suporte mais profundo para tempos de execução na web móvel.</p>
        </div>
        <video src="../Movies/2.mp4" loop autoplay muted></video>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="../js/menu.js"></script>
</body>

</html>