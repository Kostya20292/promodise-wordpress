<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments my-4">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h3 class="mb-5">Комментарии:</h3>

		<?php the_comments_navigation(); ?>

		<ol class="comment-lis p-0">
			<?php
			wp_list_comments(
				array(
					'walker'            => new Bootstart_Walker_Comment(),
                    'max_depth'         => '2',
                    'style'             => 'ol',
                    'type'              => 'all',
                    'reply_text'        => __('Ответить <i class="fa fa-reply"></i>'),
                    'per_page'          => '10',
                    'avatar_size'       => 80,
                    'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
                    'echo'              => true, 
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'promodise' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$defaults = [
        'fields'     => [
            'author' => '<div class="row"><div class="col-lg-6 mb-3">
                <input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" placeholder="Имя"/>
            </div>',
            'email'  => '<div class="col-lg-6 mb-4">
                <input class="form-control" id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes" placeholder="Email" />
            </div></div>',
            'cookies' => ''
        ],
        'comment_field' => '<div class="mb-3">
            <textarea class="form-control" id="comment" name="comment" cols="30" rows="6"  aria-required="true" required="required" placeholder="Комментарий"></textarea>
        </div>',
        'must_log_in' => '<p class="must-log-in">' .
            sprintf( __( 'Вам нужно <a href="%s">войти</a> чтобы оставить комментарий.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink($post->ID) ) ) ) . '
        </p>',
        'logged_in_as' => '<p class="logged-in-as">' .
            sprintf( __( '<a href="%1$s" aria-label="Вы вошли как %2$s.">Вы вошли как %2$s</a>. <a href="%3$s">Выйти?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink($post->ID) ) ) ) . '
        </p>',
        'comment_notes_before' => '<p class="comment-notes">
            <span id="email-notes">' . __( 'Ваш E-mail защищен от спама' ) . '</span>
        </p>',
        'comment_notes_after'  => '',
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'class_container'      => 'comment-respond',
        'class_form'           => 'comment-form',
        'class_submit'         => 'btn btn-hero btn-circled',
        'name_submit'          => 'submit',
        'title_reply'          => __( 'Оставьте комментарий' ),
        'title_reply_to'       => __( 'Ответить %s' ),
        'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'    => '</h3>',
        'cancel_reply_before'  => ' <small>',
        'cancel_reply_after'   => '</small>',
        'cancel_reply_link'    => __( 'Отменить отправку' ),
        'label_submit'         => __( 'Отправить комментарий' ),
        'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" >%4$s</button>',
        'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
        'format'               => 'html5',
    ];

    comment_form( $defaults );
	?>

</div><!-- #comments -->

<div class="mt-5 mb-3">
    <h3 class="mt-5 mb-2">Оставьте комментарий</h3>
    <p class="mb-4">Ваш E-mail защищен от спама</p>
    <form action="#" class="row">
        <div class="col-lg-12">
            <div class="form-group mb-3">
                <textarea cols="30" rows="6" class="form-control"  placeholder="Комментарий"></textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="Имя">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-4">
                <input type="email" class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="col-lg-12">
            <a href="#" class="btn btn-hero btn-circled">Оставить комментарий</a>
        </div>
    </form>
</div>