<? /* Template Name: Контакты */ ?>

<? get_header(); ?>

<section class="contacts_info_block">
  <div class="container">
    <h1 class="section_title center"><span class="text-gradient">Контакты</span></h1>
    <div class="inner">
      <div class="left">
        <div class="item">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/mail-grad.svg">
          <p>Для образовательных организаций:</p>
          <a class="text-gradient" href="mailto:ikt@systemekb.ru">ikt@systemekb.ru</a>
        </div>
        <div class="item">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/mail-grad.svg">
          <p>Для коммерческих организаций:</p>
          <a class="text-gradient" href="mailto:biz@systemekb.ru">biz@systemekb.ru</a>
        </div>
        <div class="item">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/phone-grad.svg">
          <a class="text-gradient" href="tel:+73432885295">+7 (343) 288-52-95</a>
        </div>
      </div>
      <div class="center">
        <div class="item">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/mail-grad.svg">
          <p>Техническая поддержка по&nbsp;вопросам работы оборудования и&nbsp;ПО:</p>
          <a class="text-gradient" href="mailto:sos@systemekb.ru">sos@systemekb.ru</a>
        </div>
        <div class="item">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/mail-grad.svg">
          <p>Поддержка по разработке интерактивных игр, занятий и&nbsp;проектов:</p>
          <a class="text-gradient" href="mailto:sos@systemekb.ru">sos@systemekb.ru</a>
        </div>
      </div>
      <div class="right">
        <div class="item">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/docks-grad.svg">
          <p>Наши реквизиты</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contacts_map_block">
  <div class="container">
    <h2 class="section_title center">
      <span class="text-gradient">Наш офис находится в городе</span>
      <br />
      <span class="text-gradient">Екатеринбург, ул. Фролова, 19/1, пом. 3</span>
    </h2>
    <div class="contacts_map">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afabf22ced0ac13267a94eb0767b681f1077ff6ce1765c36957cdee0fe2b67172&amp;width=100%25&amp;height=474&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
  </div>
</section>
<section class="contacts_socials_block">
  <div class="container">
    <h2 class="section_title center">
      <span class="text-gradient">Еженедельные новинки, новости в сфере</span>
      <br />
      <span class="text-gradient"> ИКТ в наших аккаунтах</span>
    </h2>
    <div class="inner">
      <div class="item">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/contacts_socials.jpg" />
        <a href="https://t.me/intersystem" target="_blank" rel="nofollow">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/telegram-grad.svg">
          @interactive_systems
        </a>
      </div>
      <div class="item">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/contacts_socials.jpg" />
        <a href="https://vk.com/intersyst" target="_blank" rel="nofollow">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/vk-grad.svg">
          @interactive_systems
        </a>
      </div>
      <div class="item">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/contacts_socials.jpg" />
        <a href="https://www.youtube.com/channel/UCUQM8CFAPF5EmiZN9F59Bow" target="_blank" rel="nofollow">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/youtube-grad.svg">
          Интерактивные системы: эффективное образование
        </a>
      </div>
    </div>
  </div>
</section>

<? get_sidebar('callback') ?>

<? get_footer(); ?>