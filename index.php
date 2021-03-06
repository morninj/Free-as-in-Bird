<?php
/**
 * Template Name: test-homepage
 *
 */
?>
<? /*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lessig</title>
    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]--> 
    <style type="text/css">

body {
	font-size: 26px;
	font-family: 'Helvetica', Arial, sans-serif;
	text-align: center;
	padding: 100px 100px;
}

#blurb {
margin: 0 auto;
}

    </style>
</head>
<body>


?>

<div id="blurb">
<p>You have reached Lessig’s personal website. If you’d like to reach the
campaign, <a href="http://lessig2016.us">click here</a>.</p>

<p>If you’d like to continue to the website, <a href="/about/">click here</a>.</p>

<p>If you’d like to reach his personal blog, <a href="http://lessig.tumblr.com/">click here</a>.</p>
</div>

</body>
</html>


*/ ?>

<?php get_header(); ?>

<?php

if (strpos($_SERVER['REQUEST_URI'], '/1') !== false || strpos($_SERVER['REQUEST_URI'], '/2') !== false) {
	// Show normal page if this is a blog archive index page
	if ( have_posts() ) :
	    while ( have_posts() ) : the_post();
		get_template_part( 'content', get_post_format() );
	    endwhile;
	?>
	<div class="pagination">
	    <div class="alignleft"><?php next_posts_link('&laquo; Older posts') ?></div>
	    <div class="alignright"><?php previous_posts_link('Newer posts &raquo;') ?></div>
	    <div class="clear-both"></div>
	</div>
	<?php
	else :
	?>
	    <h2 class="entry-title">Nothing found</h2>
	    <p>Sorry, but we couldn't find anything that matches your request.</p>
	<?php
	endif;
} else {
	// Otherwise, redirect to the new index page

?>

<script>

// Don't redirect if this is an old disclosure page or archived post
var url = window.location.href;
if (url.indexOf('old-disclosure') !== -1) {
	// Do nothing
} else {
	window.location = 'http://lessig.org/about/';
}
</script>


<article id="entry 23239582006" class="post-23239582006 page type-page status-publish hentry">

                <div class="row-fluid">
                    <div class="span12">

<div id="blurb" style="margin-bottom: -20px;">
<p>You have reached Lessig’s personal website.</p>

<p>If you’d like to reach the
campaign, <a href="http://lessig2016.us">click here</a>.</p>

<p>If you’d like to continue to the website, <a href="/about/">click here</a>.</p>

<p style="margin-bottom: 0;">If you’d like to reach his personal blog, <a href="http://lessig.tumblr.com/">click here</a>.</p>
</div>

            </div><!--/.span12 .entry-contents-->
                                    </div><!--/.row-fluid-->

            </article>

<?php

} 

?>





<?php get_footer (); ?>
