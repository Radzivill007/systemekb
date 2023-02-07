<? /* Template Name: Учебный центр */ ?>

<? get_header(); ?>

<section class="portal_sova">
  <div class="container">
    <div class="inner">
      <div class="left">
        <h1 class="section_title"><span class="text-gradient">Портал Сова</span></h1>
        <div class="desc">
          <p>
            Портал «СОВА» является цифровой образовательной платформой для представления
            интерактивными играми, занятиями и проектами. Мы создали его
            специально для педагогов детских садов и школ, работающих с интерактивным оборудованием.
          </p>
          <p>
            На портале собрана коллекция цифровых образовательных ресурсов: интерактивные игры,
            уроки, занятия и проекты. Можно использовать готовые материалы, выбирать интересующую
            категорию, возрастной диапазон, а также предлагать свои разработки для размещения на портале.
          </p>
        </div>
        <button class="btn">Войти</button>
      </div>
      <div class="right">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/portal_sova.jpg" />
      </div>
    </div>
  </div>
</section>
<section class="courses">
  <div class="container">
    <h2 class="section_title center"><span class="text-gradient">Онлайн-курсы</span></h2>
    <div class="inner">
      <img src="<?= get_template_directory_uri(); ?>/assets/img/notebook.png" />
      <div class="content">
        <h3 class="title">Использование интерактивных технологий в&nbsp;образовательном процессе</h3>
        <p class="desc">
          Программа курса разработана для повышения квалификации работников системы образования.
          <br />
          Обучение проходит при наборе группы от 20 человек.
        </p>
        <div class="imgs">
          <div class="img">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/time-big.svg">
            <p>Длительность 10 часов</p>
          </div>
          <div class="img">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/grow.svg">
            <p>Сложность средняя</p>
          </div>
        </div>
      </div>
      <button class="btn white"><span class="text-gradient">Перейти</span></button>
    </div>
  </div>
</section>
<section class="video_instructions">
  <div class="container">
    <h2 class="section_title center"><span class="text-gradient">Видеоинструкции</span></h2>
  </div>
</section>

<? get_sidebar('demos') ?>
<? get_sidebar('callback') ?>
<? get_footer(); ?>