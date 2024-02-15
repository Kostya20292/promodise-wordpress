    <!--  FOOTER AREA START  -->
    <section id="footer" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-8 col-md-8">
            <div class="footer-widget footer-link">
              <h4>Мы заботимся о том, чтобы вы <br />быстро развивали свой бизнес</h4>
              <p>
                Маркетинговое и диджитал агентство полного цикла: мы решаем задачи по продвижению и рекламе, делаем
                сайты и презентации, чтобы это не пришлось делать вам.
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-md-4">
            <div class="footer-widget footer-link">
              <h4>Информация</h4>
              <?php wp_nav_menu( [
                'theme_location'  => 'footer',
              ] ); ?>
            </div>
          </div>

          <div class="col-lg-2 col-sm-6 col-md-6">
            <div class="footer-widget footer-link">
              <h4>Сcылки</h4>
              <?php wp_nav_menu( [
                'theme_location'  => 'footer_links',
              ] ); ?>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="footer-widget footer-text">
              <h4>Наши контакты</h4>
              <p class="mail"><span>Email: </span><a href="mailto:<?php the_field('email', 15) ?>"><?php the_field('email', 15) ?></a></p>
              <p><span>Телефон: </span><a href="tel:<?php the_field('phone', 15) ?>"><?php the_field('phone', 15) ?></a></p>
              <p><span>Адрес: </span><?php the_field('address', 15) ?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="footer-copy">© <?php echo date('Y '); bloginfo('name')?>  inc. Все права защищены.</div>
          </div>
        </div>
      </div>
    </section>
    <!--  FOOTER AREA END  -->

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script> -->

    <?php wp_footer() ?>
  </body>
</html>
