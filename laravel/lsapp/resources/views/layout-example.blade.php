<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    bootstrap 4.1.0-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>{{config('app.name')}}</title>
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
    <script defer src="{{asset('js/custom.js')}}"></script>
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
                    <a href="mailto:info@ssky.bg">info@ssky.bg</a>
                </li>
            </ul>
        </nav>
        <section class="flex-container">
            <div class="website__logo">
                <a href="/">
                    <img width="120" src="{{asset('assets/images/logo.png')}}" alt="Solomon Sky Logo">
                </a>
            </div>
            <nav class="main-navigation" id="toggled-menu">
                <ul>
                    <li>
                        <a href="">Почивки</a>
                    </li>layout.blade.php
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
<body>
@yield('content')
</body>
<footer>
    <div id="big-footer-info">
        <div class="container">
            <!-- office locator-->
            <div class="flex-container">
                <div class="footer__info">
                    <p>
                        <span>
                          <img src="{{asset('assets/icons/pin.png')}}" class="flaticon" alt="">
                        </span>
                        <span>
                            Офис
                        </span>
                    </p>
                    <ul>
                        <li>
                            ул. "Княз Борис I" № 196
                            <br/>
                            гр. София
                        </li>
                    </ul>
                </div>
                <!-- contact information -->
                <div class="footer__info">
                    <p>
                        <span>
                            <img src="{{asset('assets/icons/contact.png')}}" class="flaticon" alt="">
                        </span>
                        <span>
                            Свържете се с нас
                        </span>
                    </p>
                    <ul>
                        <li>
                            <strong>
                                <a href="tel:+359898811358">0898 81 13 58</a>
                            </strong>
                            <br/>
                            <a href="mailto:info@ssky.bg">info@ssky.bg</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="small-footer-info">
        <div class="container">
            <div class="flex-container">
                <div class="footer__info">
                    <ul>
                        <li>
                            Този сайт е рекламен. Информация съгласно чл. 80 от ЗТ може да получите в нашите офиси.
                        </li>
                    </ul>
                </div>
                <div class="footer__info">
                    <ul>
                        <li>
                            <img src="{{asset('assets/images/pay-cards.png')}}" alt="payment providers">
                        </li>
                    </ul>
                </div>
                <div class="footer__info">
                    <ul>
                        <li>
                            Solomon Sky © <?php echo date("Y"); ?> Всички права запазени!
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>
