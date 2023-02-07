<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <? wp_head(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
  <?php wp_body_open(); ?>
  <div class="main"><!-- Тег контента для того что бы прижать футер к низу если контента на стрианице мало -->
    <div><!-- Тег контента без футера -->
      <header class="header">
        <div class="container">
          <div class="inner">
            <div class="logo">
              <a href="/">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/logo.svg" alt="logo">
              </a>
            </div>
            <a class="comers" href="mailto:biz@systemekb.ru">
              <p>Коммерческим организациям</p>
              <p>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/mail-grad.svg">
                biz@systemekb.ru
              </p>
            </a>
            <a class="obr" href="mailto:ikt@systemekb.ru">
              <p>Образовательным организациям</p>
              <p>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/mail-grad.svg">
                ikt@systemekb.ru
              </p>
            </a>
            <div class="phone">
              <div>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/locate-grad.svg">
                <p>г. Екатеринбург</p>
              </div>
              <div>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/phone-grad.svg">
                <p><a href="tel:+73432885295">+7 (343) 288-52-95</a></p>
              </div>
            </div>
          </div>
        </div>
      </header>
      <nav class="nav">
        <div class="container">
          <ul>
            <li>
              <a href="/products">Продукция</a>
            </li>
            <li>
              <a href="/o-kompanii">О компании</a>
            </li>
            <li>
              <a href="/podderzhka">Поддержка</a>
            </li>
            <li>
              <a href="/learn-center">Учебный центр</a>
            </li>
            <li>
              <a href="/contacts">Контакты</a>
            </li>
          </ul>
        </div>
      </nav>