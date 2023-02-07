<? /* Template Name: Главная */ ?>

<? get_header(); ?>

<section class="home_first">
  <div class="container">
    <div class="inner">
      <div class="left">
        <p>Для детских садов и школ</p>
        <h1 class="section_title">
          Производство
          <span class="text-gradient">интерактивного</span>
          оборудования
        </h1>
        <div class="button_group">
          <button class="btn">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/sova.svg">
            Портал сова
          </button>
          <a href="/">
            Скачать каталог
            <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/download.svg">
          </a>
          <a href="/">
            Демо-версии программ
            <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/video.svg">
          </a>
        </div>
      </div>
      <div class="right">
        <div class="slider-wrapper">
          <div class="slider-home">
            <div>
              <img src="<?= get_template_directory_uri(); ?>/assets/img/home_first/home_first-1.png" />
            </div>
            <div>
              <img src="<?= get_template_directory_uri(); ?>/assets/img/home_first/home_first-2.png" />
            </div>
            <div>
              <img src="<?= get_template_directory_uri(); ?>/assets/img/home_first/home_first-3.png" />
            </div>
            <div>
              <img src="<?= get_template_directory_uri(); ?>/assets/img/home_first/home_first-4.png" />
            </div>
            <div>
              <img src="<?= get_template_directory_uri(); ?>/assets/img/home_first/home_first-5.png" />
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="products_block">
  <div class="container">
    <h2 class="section_title center">
      <span class="text-gradient">Каталог</span>
    </h2>
    <div class="inner">
      <a class="card" href="/">
        <div class="img">
          <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/products_block/1.png" />
        </div>
        <p>Программно аппаратные комплексы</p>
      </a>
      <a class="card" href="/">
        <div class="img">
          <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/products_block/2.png" />
        </div>
        <p>Учебно-методические комплексы</p>
      </a>
      <a class="card" href="/">
        <div class="img">
          <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/products_block/3.png" />
        </div>
        <p>Курсы</p>
      </a>
    </div>
    <a class="btn" href="/products">Смотреть весь каталог</a>
  </div>
</section>
<section class="about_block">
  <div class="container">
    <div class="inner">
      <div class="content">
        <h2 class="section_title">
          <span class="text-gradient">О компании</span>
        </h2>
        <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/about.jpg" />
        <p>
          Компания «Интерактивные системы» - ведущий российский производитель, разработчик и 
          интегратор интерактивного оборудования, учебно-методических комплексов и развивающего
          программного обеспечения для системы образования.
        </p>
        <p>
          Продукты компании соответствуют ФГОС и СанПиН, предназначены для детей дошкольного
          и школьного возраста, в том числе с ограниченными возможностями здоровья.
        </p>
      </div>
    </div>
  </div>
</section>
<? get_sidebar('counts') ?>
<section class="solutions_block">
  <div class="container">
    <h2 class="section_title center">
      <span class="text-gradient">Посмотрите как мы помогаем: выбрать, </span>
      <br />
      <span class="text-gradient">интегрировать и эффективно использовать</span>
    </h2>
    <div class="inner">
      <a href="/">
        <div class="img">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/solutions/1.jpg" />
        </div>
        <p>Интерактивные решения для МБОУ</p>
      </a>
      <a href="/">
        <div class="img">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/solutions/2.jpg" />
        </div>
        <p>Интерактивные решения для СОШ</p>
      </a>
    </div>
  </div>
</section>
<? get_sidebar('cycle') ?>
<? get_sidebar('callback') ?>
<? get_sidebar('map') ?>
<? get_sidebar('demos') ?>

<section class="actual_block">
  <div class="container">
    <h2 class="section_title center">
      <span class="text-gradient">Интерактивные системы в образовании:</span>
      <br />
      <span class="text-gradient">актуальное и полезное</span>
    </h2>
  </div>
  <? get_sidebar('actual') ?>
</section>

<? get_footer(); ?>