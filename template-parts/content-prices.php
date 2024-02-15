<section id="pricing" class="section-padding bg-main">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 m-auto">
        <div class="section-heading">
            <h4 class="section-title">Доступные тарифы для вас</h4>
            <p>Подберите тот, который подходит вам больше всего</p>
        </div>
        </div>
    </div>
    <div class="row">
        <?php
        global $post;

        $query = new WP_Query( [
            'posts_per_page' => 3,
            'post_type' => 'prices',
            'order' => 'ASC',
        ] );

        if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            ?>
            <div class="col-lg-4 col-sm-6">
            <div class="pricing-block">
                <div class="price-header">
                <i class="<?php the_field('icon_price') ?>"></i>

                <h4 class="price"><?php the_title() ?><small>₽</small></h4>
                <h5>ежемесячно</h5>
                </div>
                <div class="line"></div>

                <?php the_content() ?>

                <a href="#" class="btn btn-hero btn-circled">выбрать тариф</a>
            </div>
            </div>
            <?php
        }
        } else {
        // Постов не найдено
        }

        wp_reset_postdata(); // Сбрасываем $post
        ?>
    </div>
    </div>
</section>