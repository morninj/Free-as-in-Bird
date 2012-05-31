<?php get_header(); ?>

<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
        comments_template();
    endwhile;
endif;
?>


<?php get_footer(); ?>
