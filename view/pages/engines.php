<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/MenuBar.css">
    <link rel="stylesheet" href="../css/engines.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <title>UnityVerse</title>
    <link rel="icon" href="../img/logo.png" type="image/png">
</head>

<body>
    <?php
    include '../Components/MenuBarra.php';
    ?>
    <section class="section-container" data-aos="fade-up" data-aos-duration="1000">
        <h1>Escolha sua Engine</h1> <!-- Adicionado o h1 -->
        <div class="button-container" data-aos="fade-up" data-aos-duration="1000">
            <a href="unity.php" class="image-button" data-aos="fade-up" data-aos-duration="1000">
                <img src="../img/unity.png" alt="Image 1">
            </a>
            <a href="unreal.php" class="image-button" data-aos="fade-up" data-aos-duration="1000">
                <img src="../img/unreal.png" alt="Image 2">
            </a>
        </div>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>