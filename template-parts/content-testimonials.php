<section id="testimonial" class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-5">
                    <h3 class="mb-2">Клиенты, которые доверяют нам</h3>
                    <p>
                    Ниже представлены отзывы от клиентов, с которыми<br />
                    мы работаем уже несколько лет подряд
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 m-auto col-sm-12 col-md-12">
                <div class="carousel slide" id="test-carousel2">
                    <div class="carousel-inner">
                        <?php
                        global $post;
                        $count = 0;

                        $query = new WP_Query([
                            'posts_per_page' => 3,
                            'post_type'      => 'testimonials',
                        ]);

                        if ($query->have_posts()):
                        ?>
                        <ol class="carousel-indicators">
                            <?php foreach ($query->posts as $i => $post) : ?>
                                <li data-target="#test-carousel2" data-slide-to="<?php echo $i ?>" class="<?php echo ($i === 0) ? 'active' : '' ?>"></li>
                            <?php endforeach; ?>
                        </ol>
                        <?php
                        while ($query->have_posts()):
                        $query->the_post();
                        $count++;
                        ?>
                        <div class="carousel-item <?php echo ($count === 1) ? 'active' : '' ?>">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="testimonial-content style-2">
                                        <div class="author-info">
                                            <div class="author-img">
                                                <img src="<?php echo the_post_thumbnail_url() ?>" alt="" class="img-fluid" />
                                            </div>
                                        </div>
                                        <p>
                                            <i class="icofont icofont-quote-left"></i><?php echo get_the_content() ?><i class="icofont icofont-quote-right"></i>
                                        </p>
                                        <div class="author-text">
                                            <h5><?php the_title() ?></h5>
                                            <p><?php the_excerpt() ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata(); // Сбрасываем $post
                            else:
                                // Постов не найдено
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>