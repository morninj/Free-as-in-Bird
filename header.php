<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lawrence Lessig's Blog: Roy L. Furman 
    Professor of Law and Leadership, Harvard Law School">
    <meta name="author" content="Lawrence Lessig">

    <!-- Typekit -->
    <script type="text/javascript" src="http://use.typekit.com/amo3qgn.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- Stylesheets -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet" type="text/css" />

    <!-- Fix HTML5 elements for noncompliant browsers -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/png">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); 
    ?>/images/favicon.png" type="image/png">

    <!-- Additional WordPress header output -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


    <div class="container">


        <nav id="main-nav">
            <div class="row">
                <div class="span8">
                    <div id="nav-wrapper" style="width: 100%;">
                        <div id="nav-left"><div class="nav-cnt">
                            <ul>
                                <li><a class="nav-link" href="<?php site_url(); ?>/">Blog</a></li>
                                <li><a class="nav-link" href="<?php site_url(); ?>/books/">Books</a></li>
                                <li><a class="nav-link" href="<?php site_url(); ?>/topics/news/">News</a></li>
                            </ul>
                        </div></div><!--/#nav-left"--><div id="nav-fixed">
                            <h1><a href="/">Lessig</a></h1>
                            <p id="header-icons">
                                <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social-media-icons/avatar.png" alt="Lessig" /></a>
                                <a href="https://www.facebook.com/pages/Lawrence-Lessig/105623262805744"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social-media-icons/facebook.png" alt="Facebook" /></a>
                                <a href="http://www.twitter.com/lessig"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social-media-icons/twitter.png" alt="Twitter" /></a>
                                <a href="http://www.youtube.com/user/lessig"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social-media-icons/youtube.png" alt="YouTube" /></a>
                                <a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social-media-icons/feed.png" alt="" /></a>
                                <a href="mailto:lessig_from_web@pobox.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social-media-icons/email.png" alt="" id="last-icon" /></a>

                            </p>
                        </div><div id="nav-right"><div class="nav-cnt">
                            <ul>
                                <li><a class="nav-link" href="http://wiki.lessig.org/" target="_blank">Wiki</a></li>
                                <li><a class="nav-link" href="<?php site_url(); ?>/about/">About</a></li>
                                <li><a class="nav-link" href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
                            </ul>
                        </div></div><!--/#nav-right"-->
                    </div><!--/#nav-wrapper-->
                </div><!--/.span12-->
            </div><!--/.row-fluid-->
        </nav><!--/#main-nav-->
        <section>
