<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h4 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'blog-recetas' ), get_the_title() );
            } else {
                printf(
                /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s Reply to &ldquo;%2$s&rdquo;',
                        '%1$s Replies to &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'blog-recetas'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h4>



        <ul class="collection comment-list">
            <?php
            materialize_template_comment($comments);
            ?>
        </ul>



        <div class="center">
        <?php echo get_the_comments_pagination( array(
            'prev_text' => __('prev', 'blog-recetas'),
            'next_text' => __('next', 'blog-recetas'),
        ) );
        ?>
        </div>
        <?php

    endif; // Check for have_comments().

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <p class="no-comments"><?php _e( 'Comments are closed.', 'blog-recetas' ); ?></p>
        <?php
    endif;

    $form_params = array(
        'class_submit' => 'btn waves-effect waves-light right',
        'comment_field' => '<div class="input-field comment-form-comment">' .
                            '<i class="material-icons prefix">bookmark</i>' .
                            '<textarea id="comment" name="comment" aria-required="true" class="validate materialize-textarea"></textarea>' .
                            '<label for="comment">' . _x( 'Comment', 'noun', 'blog-recetas' ) . '</label>' .
                            '</div>',
        'fields' => array(

            'author' =>
                '<div class="input-field comment-form-author">' .
                '<i class="material-icons prefix">perm_identity</i>' .
                '<input class="validate" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                '" size="30"' . ( $req ) ? "required" : "" . ' />' .
                '<label for="author">' . __( 'Name', 'blog-recetas' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
                '</div>',

            'email' =>
                '<div class="input-field comment-form-email">' .
                '<i class="material-icons prefix">email</i>' .
                '<input class="validate" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . ( $req ) ? "required" : "" . ' />' .
                '<label for="email">' . __( 'Email', 'blog-recetas' ) . ( $req ? '<span class="required">*</span>' : '' ) . ' </label> ' .
                '</div>',

            'url' =>
                '<div class="input-field comment-form-url">' .
                '<i class="material-icons prefix">web</i>' .
                '<input class="validate" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                '" size="30" />' .
                '<label for="url">' . __( 'Website', 'blog-recetas' ) . '</label>' .
                '</div>',
        )
    );
    comment_form($form_params, get_the_ID());
    ?>

</div><!-- #comments -->
