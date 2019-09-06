<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="author name" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Liga Test</title>

    <meta name="description" content="Site description" />
    <meta name="keywords" content="key#,key#,key#" />

    <link rel="shortcut icon" href="favicon.png" type="image/png" />

    <!--== Bootstrap Grid -->
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css" />

    <!--== FontAwesome -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />

    <!--== Plugins -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />

    <!--== CSS main style -->
    <link rel="stylesheet" href="assets/css/main.css" />

    <!--== CSS @media -->
    <link rel="stylesheet" href="assets/css/media.css" />
</head>

<body>
    <div class="root">
        <div class="bg-lines">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="site">
            <header class="site__header site__header--sticky">
                <div class="site-header__mobile mobile-header">
                    <div class="mobile-header__container container">
                        <div class="row">
                            <div class="col-6">
                                <div class="mobile-header__logo">
                                    <a href="/"><img src="assets/images/logo.png" alt="Логотип" class="mobile-header__logo-image"></a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mobile-header__hamburger">
                                    <span class="mobile-header__hamburger-item"></span>
                                    <span class="mobile-header__hamburger-item"></span>
                                    <span class="mobile-header__hamburger-item"></span>
                                    <span class="mobile-header__hamburger-item"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-header">
                    <div class="site-header__topbar topbar">
                        <div class="container topbar__container container__no-padding">
                            <div class="topbar__row">
                                <div class="topbar__item topbar__item--social">
                                    <a href="#" class="topbar__social-link topbar__instagram-icon"></a>
                                    <a href="#" class="topbar__social-link topbar__facebook-icon"></a>
                                    <a href="#" class="topbar__social-link topbar__youtube-icon"></a>
                                </div>
                                <div class="topbar__item topbar__item--phone">
                                    <span class="topbar__phone-icons">
                                        <a href="#" class="phone-icon phone-icon__whatsapp"></a>
                                        <a href="#" class="phone-icon phone-icon__telegram"></a>
                                        <a href="#" class="phone-icon phone-icon__viber"></a>
                                    </span>
                                    <span class="topbar__phone-list">
                                        <select class="topbar__select topbar__select--phone" name="phone_numbers">
                                            <option value="TR: +90 553 909 01 99">TR: +90 553 909 01 99</option>
                                            <option value="Мск +7 495 481 39 34">Мск +7 495 481 39 34</option>
                                            <option value="Спб +7 931 007 84 44">Спб +7 931 007 84 44</option>
                                            <option value="UA +380 98 444 7777">UA +380 98 444 7777</option>
                                        </select>
                                    </span>                                   
                                </div>
                                <div class="topbar__item topbar__item--email">
                                    <a href="#" class="topbar__email">info@ligarealestate.com</a>
                                </div>
                                <div class="topbar__item topbar__item--call">
                                    <a href="#" class="topbar__call-btn">Перезвоните мне</a>
                                </div>
                                <div class="topbar__item topbar__item--search">
                                    <a href="#" class="topbar__search"></a>
                                </div>
                                <div class="topbar__item topbar__item--lang">
                                    <select class="topbar__select topbar__select--lang" name="site-language">
                                        <option value="">RU</option>
                                        <option value="">ENG</option>
                                        <option value="">TUR</option>
                                    </select>                                 
                                </div>
                                <div class="topbar__item topbar__item--currency">
                                    <select class="topbar__select topbar__select--currency" name="site-language">
                                        <option value="">EUR евро</option>
                                        <option value="">USD американский доллар</option>
                                        <option value="">RUB российский рубль</option>
                                        <option value="">KZT казахский тенге</option>
                                        <option value="">UAH украинская гривна</option>
                                    </select>                                 
                                </div>
                                <div class="topbar__item topbar__item--wishlist">
                                    <a href=""class="topbar__link--wishlist">
                                        <img src="assets/images/star_icon.png" alt="Star Icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- topbar -->
                    <div class="site-header__nav nav">
                        <nav class="nav__menu">
                            <div class="container nav__container container__no-padding">
                                <div class="nav__row">
                                    <div class="nav__barnd">
                                        <a href="#">
                                        <img class="nav__logo" src="assets/images/logo.png" alt="Логотип"></a>
                                    </div>
                                    <ul class="nav__main-menu">
                                        <li><a href="#" class="nav__menu-link">Главная</a></li>
                                        <li><a href="#" class="nav__menu-link">О нас</a></li>
                                        <li><a href="#" class="nav__menu-link">Недвижимость в Турции</a></li>
                                        <li><a href="#" class="nav__menu-link">Услуги</a></li>
                                        <li><a href="#" class="nav__menu-link">Ознакомительный тур</a></li>
                                        <li><a href="#" class="nav__menu-link">Новости</a></li>
                                        <li><a href="#" class="nav__menu-link">Отзывы</a></li>
                                        <li><a href="#" class="nav__menu-link">Вопросы - ответы</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div><!-- nav -->
                </div>
            </header><!-- site__header -->

            <section class="site__hero hero-banner">
                <div class="hero-banner__image">
                </div>
                <div class="container container__no-padding">
                    <div class="hero-banner__title">
                        <h1>Лучшие предложения по недвижимости в Турции</h1>
                    </div>
                </div>
                <div class="container container__no-padding">
                <div class="hero-banner__overlay-elem">

                    </div>
                </div>
            </section>