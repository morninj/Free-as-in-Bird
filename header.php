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
    <meta name="description" content=""><!-- TODO: add description -->
    <meta name="author" content=""><!-- TODO: add author -->

    <!-- TODO: add favicon and touch icons:

       <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"> 

    -->

    <!-- Typekit -->
    <script type="text/javascript" src="http://use.typekit.com/amo3qgn.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- Stylesheets -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet" type="text/css" />

    <!-- Fix HTML5 elements for noncompliant browsers -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <!-- Additional WordPress header output -->
    <?php wp_enqueue_script("jquery"); ?>    
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


    <div class="container">

        <!-- Beta message -->
        <div class="row">
            <div class="span8" style="font-family: 'Helvetica Neue', Helvetica, sans-serif;">
                <div class="alert alert-block alert-error" style="font-size: 16px; margin-top: 20px;">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                    <h4 class="alert-heading" style="font-size: 22px; margin-bottom: 10px;">Watch your step</h4>
                    This is a dev site. Some things might be broken or missing.
                </div>
            </div>
        </div>
        <!-- /Beta message -->

        <header>
            <div class="row">
                <div class="span2" id="header-logo-container">
                    <a href="<?php echo( site_url() ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/lessig-avatar.png" width="32" height="32" alt="Lessig" id="header-logo" /></a><!-- TODO: update avatar link-->
                    <div class="clear-both"></div>
                </div><!--/.span2-->
                <div class="span6">
                    <h1><a href="<?php echo( site_url() ); ?>"><?php echo( get_bloginfo( 'name' ) ); ?></a></h1>
                </div><!--/.span6-->
            </div><!--/.row-->
        </header>
        <nav id="main-nav">
            <div class="row">
                <div class="span8">
                    <ul>
                        <li><a href="<?php site_url(); ?>/blog/">Blog</a></li>
                        <li><a href="<?php site_url(); ?>/books/">Books</a></li>
                        <li><a href="<?php site_url(); ?>/topics/news/">News</a></li>
                        <li><a href="http://wiki.lessig.org/" target="_blank">Wiki</a></li>
                        <li><a href="<?php site_url(); ?>/about/">About</a></li>
                    </ul>
                </div><!--/.span8-->
            </div><!--/.row-->
        </nav><!--/#main-nav-->
        <section>
