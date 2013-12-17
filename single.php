<?php get_header(); ?>
    <div id="content">
        <div class="container txt-lefty">
            <div class="row-fluid">
                <div class="span9">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="entry" style="margin-bottom: 15px;">

                        <div class="row-fluid">
                            <div class="span12">
                                <h2 style="color: #08c;"><?php the_title(); ?></h2>
                                <?php the_post_thumbnail( 'wpbs-featured-home' ); ?>
                                <hr>
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                                <blockquote>
                                    <p><?php the_author_posts_link() ?></p>
                                    <small><em><?php the_date() ?></em></small>
                                </blockquote>

                                <footer>
                                    <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', '</p>'); ?>

                                    <?php
                                    // only show edit button if user has permission to edit posts
                                    if( $user_level > 0 ) {
                                        ?>
                                        <a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","bonestheme"); ?></a>
                                    <?php } ?>
                                </footer> <!-- end article footer -->
                            </div>
                        </div>
                    </div>


                    <div class="row-fluid">
                        <div class="span12">
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                <a class="addthis_button_preferred_1"></a>
                                <a class="addthis_button_preferred_2"></a>
                                <a class="addthis_button_preferred_3"></a>
                                <a class="addthis_button_preferred_4"></a>
                                <a class="addthis_button_compact"></a>
                                <a class="addthis_counter addthis_bubble_style"></a>
                            </div>
                            <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525daa3e41d2049f"></script>
                            <!-- AddThis Button END -->
                            <br><br>
                        </div>
                    </div>

                        <div class="row-fluid">
                            <div class="span12">
                                <?php comments_template( '', true ); ?>
                            </div>
                        </div>


                    <?php endwhile; ?>
                    <?php else : ?>

                        <article id="post-not-found">
                            <header>
                                <h1><?php _e("Not Found", "bonestheme"); ?></h1>
                            </header>
                            <section class="post_content">
                                <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
                            </section>
                            <footer>
                            </footer>
                        </article>

                    <?php endif; ?>

                </div>
                <div class="span3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>