<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/MenuBar.css">
    <link rel="stylesheet" href="../css/engines.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>UnityVerse</title>
    <link rel="icon" href="../img/logo.png" type="image/png">
</head>

<body>
    <?php
    include '../Components/MenuBarra.php';
    ?>
    <section class="section-container">
        <h1>Escolha sua Engine</h1> <!-- Adicionado o h1 -->
        <div class="button-container">
            <a href="unity.php" class="image-button">
                <img src="../img/unity.png" alt="Image 1">
            </a>
            <a href="unreal.php" class="image-button">
                <img src="../img/unreal.png" alt="Image 2">
            </a>
        </div>
    </section>
</body>

</html>