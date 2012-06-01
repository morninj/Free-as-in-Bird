<?php get_header(); ?>

<article id="entry">
                <div class="row">
                    <div class="span8">

<?php

// Redirect legacy urls, which have the structure of:
// /blog/2009/01/title.html or
// /news/2009/01/title.html or

$uri = $_SERVER['REQUEST_URI'];

$pos_blog = strpos($uri, 'blog/');
$pos_news = strpos($uri, 'news/');

if ($pos_blog || $pos_news) {
    $filename = explode('/', $uri);
    $filename = $filename[sizeof($filename) - 1];
    $filename = substr($filename, 0, -5);
    $filename = str_replace("_", " ", $filename);
    $filename = ereg_replace("[^A-Za-z ]", "", $filename);
    ?>
    <script type="text/javascript">
    window.location = '<?php echo(site_url()); ?>/?s=<?php echo(urlencode($filename)); ?>';
    </script>
    <br />
    <p>You're being redirected to the page you requested. If you're not redirected within a few seconds, <a href="<?php echo(site_url()); ?>/?s=<?php echo(urlencode($filename)); ?>">click here</a> to continue.</p>
    <?php
} else {
?>
    <h2 class="entry-title">Not Found</h2>
    <p>Sorry, we couldn't find the page you requested.</p>
<?php
}
?>
                    </div><!--/.span8-->
                </div><!--/.row-->
</article>


<?php get_footer(); ?>
