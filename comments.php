            <div id="comments" class="row">
                <div class="span8">
                    <h2>Comments</h2>
                    <ol class="comments-list">
                        <?php

                            /* For HuffPo and Tumblr posts, point to comment 
                            threads on original post */

                            $syndication_source = get_post_meta(get_the_ID(), 'syndication_source_uri', true);
                            $syndication_permalink = get_post_meta(get_the_ID(), 'syndication_permalink', true);
                            if ($syndication_source == 'http://lessig.tumblr.com/') {
                                // Display a link to the original Tumblr post
                                echo('<a href="' . $syndication_permalink . '">See comments on original Tumblr post</a>');
                            }
                            elseif ($syndication_source == 'http://huffingtonpost.com/author/index.php?author=lawrence-lessig') {
                                // Display a link to the original HuffPo post
                                echo('<a href="' . $syndication_permalink . '">See comments on original Huffington Post article</a>');
                            } else {
                                // This is an original WordPress post--show comments
                                wp_list_comments();
                            }
                        ?>
                    </ol><!--/.comments-list-->
                    <?php
                    if (($syndication_source != 'http://lessig.tumblr.com/') && ($syndication_source != 'http://huffingtonpost.com/author/index.php?author=lawrence-lessig'))
                        comment_form();
                    ?>
                </div><!--/.span8-->
            </div><!--/#comments .row -->
