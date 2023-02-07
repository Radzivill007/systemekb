<? /* Template Name: Поддержка */ ?>

<? get_header(); ?>

<section class="podderzhka_page">
  <div class="container">
    <h1 class="section_title"><span class="text-gradient">Поддержка</span></h1>
    <p class="desc">При возникновении вопросов, оставляйте свои контактные данные, наши специалисты свяжутся с вами в ближайшее время!</p>
    <div class="cards">
      <div class="card">
        <div class="title">Техническая поддержка</div>
        <form>
          <div class="input">
            <label>Телефон</label>
            <input class="black" type="tel" placeholder="+7 (999) 000 00 00" />
          </div>
          <button class="btn" type="submit">Отправить</button>
        </form>
      </div>
      <div class="card">
        <div class="title">Методическая поддержка</div>
        <form>
          <div class="input">
            <label>Телефон</label>
            <input class="black" type="tel" placeholder="+7 (999) 000 00 00" />
          </div>
          <button class="btn" type="submit">Отправить</button>
        </form>
      </div>
    </div>
  </div>
</section>


<? get_sidebar('callback') ?>
<? get_footer(); ?>