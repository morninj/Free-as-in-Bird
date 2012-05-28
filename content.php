            <article id="entry <?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="row">
                    <div class="span8">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    </div><!--/.span8-->
                </div><!--/.row-->

                <div class="row">
			<?php
                        // Display metadata for posts but not pages
                        if ( 'post' == get_post_type() ) { ?>
                    <div class="span2 entry-meta">
                        <p class="entry-author">By <?php the_author_link(); ?></a></p>
                        <p class="entry-date"><?php the_time('F j, Y'); ?></p>
                        <p class="entry-comments"><?php 
if ( $num_comments == 0 ) {
    $comments = __('No Comments');
} elseif ( $num_comments > 1 ) {
    $comments = $num_comments . __(' Comments');
} else {
    $comments = __('1 Comment');
}
echo( '<a href="' . get_comments_link() .'">'. $comments.'</a>' );
                        ?></p>
                        <h3>Tagged:</h3>
                        <p><?php
$tag_list = get_the_tag_list('', ', ', '');
if ($tag_list == '') {
    ?><em>no tags</em><?php
} else {
    echo($tag_list);
}
                        ?></p>
                        <h3>Categorized:</h3>
                        <p><?php
$category_list = get_categories();
if (count($category_list) == 0) {
    ?>no categories<?php
} else {
    the_category(', ');
}
                    ?></p>
                    </div><!--/.span2 entry-meta"-->
                    <div class="span6 entry-contents">
			<?php
                            // Display post content
                            the_content();
                            ?>
                    </div><!--/.span6 .entry-contents-->
                    <?php } else { ?>
                    <div class="span8 entry-contents">
			<?php
                            // Display page content
                            the_content();
                        ?>
                    </div><!--/.span8 .entry-contents-->
                    <?php } ?>
                </div><!--/.row-->

            </article><!--/#entry-<?php the_ID(); ?>-->
