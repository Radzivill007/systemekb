<? /* Template Name: О компании */ ?>

<? get_header(); ?>

<section class="about_block">
  <div class="container">
    <div class="inner">
      <div class="content right">
        <h2 class="section_title">
          <span class="text-gradient">О компании</span>
        </h2>
        <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/about.jpg" />
        <p>Компания «Интерактивные системы» - ведущий российский производитель,
          разработчик и интегратор интерактивного оборудования, учебно-методических
          комплексов и развивающего программного обеспечения для системы образования.
        </p>
        <p>Руководствуясь современными тенденциями в сфере образования, мы развиваем
          свои продукты, в том числе, с учетом актуальности инклюзии и создания развивающих
          и адаптационных программ для детей с ограниченными возможностями здоровья.
        </p>
        <p>Все специализированные программы, разработанные нашей компанией, внесены в
          Единый реестр российских программ для электронных вычислительных машин и баз данных.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="path_block rectangle">
  <div class="container">
    <h2 class="section_title center"><span class="text-gradient">9 лет в образовании</span></h2>
    <div class="slider-wrapper">
      <div class="slider-path">
        <div class="cards">
          <div class="card one">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="top: -<?= 25 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2009
              </div>
              <div class="text">
                Комплекс развивающих и обучающих занятий “Волшебная поляна”
              </div>
              <div class="text">
                Комплекс развивающих и обучающих занятий “Волшебная поляна” Интерактивный тренажор “Безопасность: ПДД”
              </div>
            </div>
          </div>
          <div class="card two">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="bottom: -<?= 15 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2010
              </div>
              <div class="text">
                Интерактивная панель АБВ
              </div>
            </div>
          </div>
          <div class="card three">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="top: -<?= 25 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2011
              </div>
              <div class="text">
                Открытие серийного производства ПАК “Колибри”
              </div>
              <div class="text">
                Комплекс интерактивных занятий “Инженерная школа”
              </div>
              <div class="text">
                УМК “Умка”
              </div>
            </div>
          </div>
          <div class="card four">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="bottom: -<?= 15 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2012
              </div>
              <div class="text">
                Интерактивный редактор-конструктор “Сова”
              </div>
            </div>
          </div>
          <div class="card five">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="top: -<?= 25 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2013
              </div>
              <div class="text">
                Открытие серийного производства ПАК “Колибри”
              </div>
              <div class="text">
                Комплекс интерактивных занятий “Инженерная школа”
              </div>
              <div class="text">
                УМК “Умка”
              </div>
            </div>
          </div>
          <div class="line">
            <? for ($i = 1; $i <= 5; $i++) : ?>
              <span></span>
            <? endfor; ?>
          </div>
        </div>
        <div class="cards">
          <div class="card one">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="top: -<?= 25 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2014
              </div>
              <div class="text">
                Комплекс развивающих и обучающих занятий “Волшебная поляна”
              </div>
              <div class="text">
                Комплекс развивающих и обучающих занятий “Волшебная поляна” Интерактивный тренажор “Безопасность: ПДД”
              </div>
            </div>
          </div>
          <div class="card two">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="bottom: -<?= 15 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2015
              </div>
              <div class="text">
                Интерактивная панель АБВ
              </div>
            </div>
          </div>
          <div class="card three">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="top: -<?= 25 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2016
              </div>
              <div class="text">
                Открытие серийного производства ПАК “Колибри”
              </div>
              <div class="text">
                Комплекс интерактивных занятий “Инженерная школа”
              </div>
              <div class="text">
                УМК “Умка”
              </div>
            </div>
          </div>
          <div class="card four">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="bottom: -<?= 15 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2016
              </div>
              <div class="text">
                Интерактивный редактор-конструктор “Сова”
              </div>
            </div>
          </div>
          <div class="card five">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="top: -<?= 25 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2016
              </div>
              <div class="text">
                Открытие серийного производства ПАК “Колибри”
              </div>
              <div class="text">
                Комплекс интерактивных занятий “Инженерная школа”
              </div>
              <div class="text">
                УМК “Умка”
              </div>
            </div>
          </div>
          <div class="line">
            <? for ($i = 1; $i <= 5; $i++) : ?>
              <span></span>
            <? endfor; ?>
          </div>
        </div>
        <div class="cards">
          <div class="card one">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="top: -<?= 25 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2017
              </div>
              <div class="text">
                Комплекс развивающих и обучающих занятий “Волшебная поляна”
              </div>
              <div class="text">
                Комплекс развивающих и обучающих занятий “Волшебная поляна” Интерактивный тренажор “Безопасность: ПДД”
              </div>
            </div>
          </div>
          <div class="card two">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="bottom: -<?= 15 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2018
              </div>
              <div class="text">
                Интерактивная панель АБВ
              </div>
            </div>
          </div>
          <div class="card three">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="top: -<?= 25 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2019
              </div>
              <div class="text">
                Открытие серийного производства ПАК “Колибри”
              </div>
              <div class="text">
                Комплекс интерактивных занятий “Инженерная школа”
              </div>
              <div class="text">
                УМК “Умка”
              </div>
            </div>
          </div>
          <div class="card four">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="bottom: -<?= 15 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2020
              </div>
              <div class="text">
                Интерактивный редактор-конструктор “Сова”
              </div>
            </div>
          </div>
          <div class="card five">
            <div class="inner">
              <? for ($i = 1; $i <= 6; $i++) : ?>
                <span style="top: -<?= 25 + $i * 15 ?>px"></span>
              <? endfor; ?>
              <div class="title">
                2022
              </div>
              <div class="text">
                Открытие серийного производства ПАК “Колибри”
              </div>
              <div class="text">
                Комплекс интерактивных занятий “Инженерная школа”
              </div>
              <div class="text">
                УМК “Умка”
              </div>
            </div>
          </div>
          <div class="line">
            <? for ($i = 1; $i <= 5; $i++) : ?>
              <span></span>
            <? endfor; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<? get_sidebar('counts') ?>

<section class="video_feedback_block">
  <div class="container">
    <h2 class="section_title center"><span class="text-gradient">Посмотрите видеоотзывы наших клиентов</span></h2>
    <div class="slider-wrapper">
      <div class="slider-video_feedback">
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/img/feedback.jpg" />
        </div>
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/img/feedback.jpg" />
        </div>
      </div>
    </div>
  </div>
</section>
<section class="vk_block rectangle">
  <div class="container">
    <h2 class="section_title center">
      <span class="text-gradient">Мы в Вконтакте</span>
    </h2>
    <div class="vk_inner">
      <div class="img">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/logo-without-text.svg">
      </div>
      <p>@interactive_systems</p>
      <a class="btn" href="https://vk.com/intersyst" target="_blank" rel="nofollow">Подписаться</a>
    </div>
    <? get_sidebar('actual') ?>
  </div>
</section>
<section class="feedback_block">
  <div class="container">
    <h2 class="section_title center">
      <span class="text-gradient">Отзывы и благодарности наших клиентов</span>
    </h2>
    <div class="slider-wrapper">
      <div class="slider-feedback">
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/img/gratitue-1.jpg" />
        </div>
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/img/gratitue-2.jpg" />
        </div>
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/img/gratitue-3.jpg" />
        </div>
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/img/gratitue-1.jpg" />
        </div>
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/img/gratitue-2.jpg" />
        </div>
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/img/gratitue-3.jpg" />
        </div>
      </div>
    </div>
  </div>
</section>
<? get_sidebar('map') ?>
<? get_sidebar('callback') ?>

<? get_footer(); ?>