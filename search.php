<?php get_header() ?>

<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Результаты поиска по&nbsp;фразе: %s', 'promodise' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section blog-wrap ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <div class="row">

                        <?php 
                        $count = 0;

                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                        
                            $count++; ?>
                            <div class="col-lg-<?php echo ($count == 3) ? '12' : '6'; ?>">
                                <div class="blog-post">
                                    <img src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri() . '/images/blog/blog-1.jpg'; ?>" alt="" class="img-flui w-100">
                                    <div class="mt-4 mb-3 d-flex">
                                        <div class="post-author mr-3">
                                            <i class="fa fa-user"></i>
                                                <span class="h6 text-uppercase"><?php the_author() ?></span>
                                        </div>

                                        <div class="post-info">
                                             <i class="fa fa-calendar-check"></i>
                                                <span><?php the_time('j F Y') ?></span>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink() ?>" class="h4"><?php the_title() ?></a>
                                    <p class="mt-3"><?php the_excerpt() ?></p>
                                    <a href="<?php the_permalink() ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <?php endwhile; else: ?>
                            Записей нет.
                        <?php endif; ?>
                        <div class="col-lg-12">
                            <?php the_posts_pagination(array(
                                'prev_text'    => __('<span class="p-2 border">« Предыдущие посты</span>'),
                                'next_text'    => __('<span class="p-2 border">Следующие посты »</span>'),
                                'before_page_number' => '<span class="p-2 border">',
	                            'after_page_number'  => '</span>'
                            )); ?>
                        </div>
                </div>
            </div>
            <?php get_sidebar() ?> 
        </div>
    </div>
</section>

<?php get_footer() ?>