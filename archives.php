<?php
/*
Template Name: Archives
*/
get_header(); ?>

<?php the_post(); ?>
<h2 class="entry-title"><?php the_title(); ?></h2>

<?php get_search_form(); ?>

<div class="row">
    <div class="span4">
        <h2>By Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
        </ul>
    </div><!--/.span4-->
    <div class="span4">
        <h2>By Topic:</h2>
        <ul>
            <?php wp_list_categories('orderby=name&show_count=1&title_li='); ?> 
        </ul>
    </div><!--/.span4-->
</div><!--/.row-->


<?php get_footer(); ?>
