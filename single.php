<?php get_header(); ?>

    <div id="content">
        <div class="container txt-lefty">
            <div class="row-fluid">
                <div class="span9">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="entry">

                        <div class="row-fluid">
                            <div class="span12">
                                <h1 style="color: #08c;"><?php the_title(); ?></h1>
                                <?php the_post_thumbnail( 'wpbs-featured' ); ?>
                                <hr>
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                                <blockquote>
                                    <p><a href="#">Evan</a></p>
                                    <small><em>Jan 3, 2013</em></small>
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