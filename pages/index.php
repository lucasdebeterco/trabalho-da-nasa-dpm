<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/partials/header.css">
    <link rel="stylesheet" href="../css/partials/footer.css">
    <link rel="stylesheet" href="../css/pages/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <?php
        include('../header.html');
    ?>

    <div class="container">
        <div class="banner-topo">
            <img src="../image/home-banner.jpg" alt="Banner Home">
        </div>
        <div class="options">
            <a class="option works flex justify-center align-center" href="../pages/works.php" >
                Trabalhos da NASA
            </a>
            <a class="option missions flex justify-center align-center" href="../pages/missons.php" >
                Missões espaciais
            </a>
            <a class="option space-ships flex justify-center align-center" href="../pages/spaceships.php" >
                Naves espaciais
            </a>
            <a class="option about flex justify-center align-center" href="../pages/about.php" >
                Sobre a NASA
            </a>
        </div>
    </div>

    <?php
        include('../footer.html');
    ?>
</body>
</html>
