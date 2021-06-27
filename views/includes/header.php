<?php
$uri = $_SERVER['REQUEST_URI'];
$trimmed = trim($uri, '/');
$exploded = explode('/', $trimmed);
$activeClass = $exploded[0];
if (empty($activeClass)) {
    $activeClass = 'index';
}
?>
<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    bootstrap 4.1.0-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--    sheets-->
    <link rel="stylesheet" type="text/css" href="/client/styles/mainsheet.css">
    <link rel="stylesheet" type="text/css" href="/client/styles/media-screen.css" media="screen">
    <!--    slick css-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!--   bootstrap js and jquery -->
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <!--    slick js-->
    <script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--    custom js-->
    <script defer type="text/javascript" src="/client/js/main.js"></script>
    <title>Соломон Скай | Екскурзии</title>
</head>
<header class="header">
    <div class="container">
        <nav class="small-navigation-bar">
            <ul>
                <li>
                    <a href="/about-us">За нас</a>
                </li>
                <li>
                    <a href="/documents">Фирмени документи</a>
                </li>
                <li>
                    <a href="/terms">Условия</a>
                </li>
                <li>
                    <a href="/contacts">Контакти</a>
                </li>
                <li class="hidden-sm hidden-xs">
                    <a href="tel:+359898811358">0898 81 13 58</a>
                </li>
                <li class="hidden-sm hidden-xs">
                    <a href="mailto:solomonsky@abv.bg">solomonsky@abv.bg</a>
                </li>
            </ul>
        </nav>
        <section class="flex-container">
            <div class="website__logo">
                <a href="/">
                    <img src="/assets/images/logo.png" alt="Solomon Sky Logo">
                </a>
            </div>
            <nav class="main-navigation" id="toggled-menu">
                <ul>
                    <li>
                        <a href="">Почивки</a>
                    </li>
                    <li>
                        <a href="">Дестинации</a>
                    </li>
                    <li>
                        <a href="">Празници</a>
                    </li>
                    <li>
                        <a href="">Хотели БГ</a>
                    </li>
                </ul>
            </nav>
            <div id="toggle-mobile-nav">
                <div class="bar icon-1"></div>
                <div class="bar icon-2"></div>
                <div class="bar icon-3"></div>
            </div>
        </section>
    </div>
</header>
<body class="page <?php echo $activeClass ?>">



