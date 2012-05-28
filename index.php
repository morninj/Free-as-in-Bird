<?php get_header(); ?>

<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
    endwhile;
?>
<hr />
<div class="pagination">
    <div class="alignleft"><?php next_posts_link('&laquo; Older posts') ?></div>
    <div class="alignright"><?php previous_posts_link('Newer posts &raquo;') ?></div>
</div>
<?php
else :
?>
    <h2 class="entry-title">Nothing found</h2>
    <p>Sorry, but we couldn't find anything that matches your request.</p>
<?php
endif;

?>

<?php get_footer(); ?>
