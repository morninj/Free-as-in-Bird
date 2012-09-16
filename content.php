            <article id="entry <?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="row-fluid">
                    <div class="span12">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    </div><!--/.span12-->
                </div><!--/.row-fluid-->

                <div class="row-fluid">
			<?php
                        // Display metadata for posts but not pages
                        if ( 'post' == get_post_type() ) { ?>
                    <div class="span12 entry-contents">
                        <p class="entry-subheading">
                            <?php the_time('F j, Y'); ?>
                            &nbsp;&middot;&nbsp;
                            <?php the_author_link(); ?>
                        </p>
			<?php
                            // Display post content
                            the_content();
                            ?>
                        <p class="entry-meta">
                            <?php 
                            $num_comments =  get_comments_number();
                            if ( $num_comments == 0 ) {
                                $comments = __('No comments');
                            } elseif ( $num_comments > 1 ) {
                                $comments = $num_comments . __(' comments');
                            } else {
                                $comments = __('1 comment');
                            }
                            echo( '<a href="' . get_comments_link() .'">'. $comments.'</a>' );
                            ?>
                            &nbsp;&middot;&nbsp;
                            <a href="<?php the_permalink(); ?>#comments">Leave a comment</a>
                            &nbsp;&middot;&nbsp;
                            <a href="<?php the_permalink(); ?>">Permalink</a>
                            <br />
                            Tagged:
                            <?php
                            $tag_list = get_the_tag_list('', ', ', '');
                            if ($tag_list == '') {
                                ?><em>no tags</em><?php
                            } else {
                                echo($tag_list);
                            }
                            ?>
                            <br />
                            Categorized: 
                            <?php
                            $category_list = get_categories();
                            if (count($category_list) == 0) {
                                ?>no categories<?php
                            } else {
                                the_category(', ');
                            }
                            ?>
                            
                        </p><!--/.entry-meta-->
                    </div><!--/.span12 .entry-contents-->
                    <?php } else { ?>
                    <div class="span12 entry-contents">
			<?php

                            // Disable auto <p> tags
                            remove_filter ('the_content', 'wpautop');

                            // Display page content
                            the_content();
                        ?>
                    </div><!--/.span12 .entry-contents-->
                    <?php } ?>
                </div><!--/.row-fluid-->

            </article><!--/#entry-<?php the_ID(); ?>-->
