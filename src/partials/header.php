<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Базовые мета-теги для поисковиков -->
  <title>Заголовок</title>

  <!-- Иконки для страницы -->
  <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">

  <!-- Метатаги которые выводят информацию о странице в поисковой запрос -->
  <meta name="description" content="описание не длиннее 155 символов" />
  <meta name="keywords" content="мета-теги, шаблон, html, css, acr0matic" />

  <!-- Метатаги для ссылок в социальных сетях -->
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta name="robots" content="index,follow,noodp" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta name="theme-color" content="#4285f4" />

  <!-- Для Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#4285f4" />

  <!-- Для iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

  <!-- Верификация Яндекс.Вебмастер  -->
  <meta name="yandex-verification" content="" />

  <!-- Yandex.Metrika counter -->

  <!-- /Yandex.Metrika counter -->

  <!-- Стили -->
  <!-- build:css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- endbuild -->
</head>

<body>
  <!-- Шапка -->
  <header>
    <div class="container">
      <div class="header">
        <div class="header__logo">
          <a href="">
            <img src="img/logo.svg" alt="" class="logo">
          </a>
        </div>
        <!-- /.header__logo -->

        <div class="header__nav">
          <nav class="nav">
            <ul class="nav__list">
              <li class="nav__item">
                <a href="#service" class="nav__link">Услуги</a>
              </li>

              <li class="nav__item">
                <a href="#portfolio" class="nav__link">Кейсы</a>
              </li>

              <li class="nav__item">
                <a href="#feedback" class="nav__link">Отзывы</a>
              </li>

              <li class="nav__item">
                <a href="#team" class="nav__link">Команда</a>
              </li>

              <li class="nav__item">
                <a href="#callback" class="nav__link">Контакты</a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /.header__nav -->

        <div class="header__contact">
          <div class="header__link header__copy mb-2">
            <a href="tel:+78005553535" class="header__link">8 (800) 555-35-35</a>
            <div class="header__tooltip tooltip">Скопировано!</div>
          </div>
          <!-- /.header__link header__copy -->

          <div class="header__link header__copy">
            <a href="mailto:info@threaddigital.ru" class="header__link">info@threaddigital.ru</a>
            <div class="header__tooltip tooltip">Cкопировано</div>
          </div>
          <!-- /.header__link header__copy -->
        </div>
        <!-- /.header__contact -->

        <div class="header__action">
          <button id="callback-button" data-micromodal-trigger="modal-callback" class="header__button button button-outline">Оставить заявку</button>
        </div>
        <!-- /.header__action -->
      </div>
      <!-- /.header -->
    </div>
    <!-- /.container -->
  </header>