<?php
/**
 * Template Name: Posts
 *
 */

get_header(); 

?>
<?php

$args = array(
	'posts_per_page'   => 30,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish',
);

$myposts = get_posts($args);
foreach($myposts as $post) :
setup_postdata($post);

get_template_part( 'content', get_post_format() );

endforeach;?>

<?php wp_reset_postdata(); ?>

<div style="margin-left: 29px; margin-bottom: 40px;">

	<a href="/blog/" class="btn btn-large">See all older posts</a>
</div>

<?php get_footer(); ?>
