            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="row">
                    <div class="span8">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    </div><!--/.span8-->
                </div><!--/.row-->

                <div class="row">
                    <div class="span2 entry-meta">
			<?php /* TODO: if ( 'post' == get_post_type() ) : */ ?>
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
$tag_list = get_the_tag_list( $before, $sep, $after );
if ($tag_list == 0) {
    ?><em>no tags</em><?php
} else {
    echo( $tag_list );
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
			<?php the_content(); ?>
                    </div><!--/.span6 .entry-contents-->
                </div><!--/.row-->

            </article><!--/#post-<?php the_ID(); ?>-->
