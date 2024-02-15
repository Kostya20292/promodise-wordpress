<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="seo & digital marketing" />
    <meta
      name="keywords"
      content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company"
    />

    <?php wp_head() ?>
  </head>

  <body data-spy="scroll" data-target=".fixed-top">
    <nav class="navbar navbar-expand-lg fixed-top trans-navigation">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
          <?php 
            if(has_custom_logo()){
              $logo_img = '';
              $custom_logo_id = get_theme_mod( 'custom_logo' );

              if( $custom_logo_id ){
                $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                  'class'    => 'img-fluid b-logo',
                  'itemprop' => 'logo',
                ) );
              }

              echo $logo_img;
            } else { ?>
              <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" class="img-fluid b-logo" />
            <?php }
          ?>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#mainNav"
          aria-controls="mainNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
          <?php wp_nav_menu( [
              'theme_location'  => 'header',
              'container'       => false,
              'menu_class'      => 'navbar-nav',
              'menu_id'         => false,
              'echo'            => true,
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 2,
              'walker'          => new bootstrap_4_walker_nav_menu(),
            ] ); ?>
        </div>
      </div>
    </nav>
    <!--MAIN HEADER AREA END -->