<?php
/*
Template Name: Шаблон страницы контакты
*/
?>

<?php get_header() ?>

    <!--MAIN BANNER AREA START -->
    <div class="page-banner-area page-contact" id="page-banner">
      <div class="overlay dark-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h1 class="text-white">Давайте обсудим работу над&nbsp;вашим проектом</h1>
              <p>Напишите нам и вам ответит проектный менеджер</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MAIN HEADER AREA END -->
    <!--  Contact START  -->
    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-md-12">
            <div class="mb-5">
              <h2 class="mb-2">Напишите нам</h2>
              <p>
                Обычно, мы видим заявку сразу, а перезваниваем или пишем в ответ в течение часа. Иногда ответ может
                занять до одного дня.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-sm-12">
            <?php echo do_shortcode('[contact-form-7 id="410815c" title="Контактная форма"]')?>
          </div>

          <div class="col-lg-5 pl-4 mt-4 mt-lg-0">
            <h4>Адрес офиса</h4>
            <p class="mb-3"><?php the_field('address') ?></p>
            <h4>Телефон</h4>
            <p class="mb-3"><a href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a></p>
            <h4>E-Mail</h4>
            <p class="mb-3"><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></p>
          </div>
        </div>
      </div>
    </section>

    <section class="map">
      <?php the_content() ?>
    </section>

<?php get_footer()?>