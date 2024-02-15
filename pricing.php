<?php
/*
Template Name: Шаблон страницы цены
*/
?>

<?php get_header() ?>

    <div class="page-banner-area page-contact" id="page-banner">
      <div class="overlay dark-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h1 class="text-white">Цены на услуги</h1>
              <p>Подберите подходящий тариф</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php echo get_template_part('template-parts/content', 'prices') ?>

    <?php echo get_template_part('template-parts/content', 'testimonials') ?>
    
    <?php echo get_template_part('template-parts/content', 'partners') ?>

<?php get_footer() ?>
