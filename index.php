<?php
    $configbase = 'http://localhost/plataforma/';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma</title>
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="description" content="">

    <meta itemprop="name" content="nome-do site">
    <meta itemprop="description" content="descricao do site">
    <meta itemprop="image" content="imagem-do site">
    <meta itemprop="BASE" content="<?= $configbase ?>">
    
    <!-- FACEBOOK -->
    <meta property="og:type" content="article-do site">
    <meta property="og:name" content="nome-do site">
    <meta property="og:description" content="descricao do site">
    <meta property="og:image" content="imagem-do site">
    <meta property="og:BASE" content="<?= $configbase ?>">
    <meta property="og:sitename" content="titulo-do site">
    <meta property="og:locale" content="pt-br">

    <!-- TWITTER -->
    <meta property="twitter:card" content="sumary_large_image">
    <meta property="twitter:domain" content="<?= $configbase ?>">
    <meta property="twitter:title" content="titulo-do-site">
    <meta property="twitter:description" content="descricao-do-site">
    <meta property="twitter:image" content="imagem-do-site">
    <meta property="twitter:BASE" content="<?= $configbase ?>/image">

    <!-- FONTAWELSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css" integrity="sha512-f2MWjotY+JCWDlE0+QAshlykvZUtIm35A6RHwfYZPdxKgLJpL8B+VVxjpHJwZDsZaWdyHVhlIHoblFYGkmrbhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONTS GOOGLE -->
    <link rel="proconnect" href="https://fonts_googleapis.com">
    <link rel="proconnect" href="https://fonts_gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts_googleapis/css2?family=Nunito:wght@300:500&display=swap">

    <!-- CSS NATIVE -->
    <link rel="stylesheet" href="<?= $configbase ?>Views/Css/Views.css">
    <link rel="stylesheet" href="<?= $configbase ?>Themes/Loja/themes.css">

    <script src="<?= $configbase ?>/Views/js/jquery.js"></script>

</head>
    <body>
        <?php
            require 'Core/Routers.php';
        ?>

        <script src="<?= $configbase ?>/Views/js/maskinput.js"></script>
        <script src="<?= $configbase ?>/Views/js/jquery-money.js"></script>
        <script src="<?= $configbase ?>/Views/js/jquery-form.js"></script>
        <script src="<?= $configbase ?>/Views/js/Views.js"></script>

        <script src="<?= $configbase ?>Ajax/Ajax.js"></script>
        <script src="<?= $configbase ?>Themes/Loja/themes.js"></script>

    </body>
</html>