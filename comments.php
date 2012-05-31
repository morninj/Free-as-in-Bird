            <div id="comments" class="row">
                <div class="span8">
                    <h2>Comments</h2>
                    <ol class="comments-list">
                        <?php
                            wp_list_comments();
                        ?>
                    </ol><!--/.comments-list-->
                    <?php comment_form(); ?>
                </div><!--/.span8-->
            </div><!--/#comments .row -->
