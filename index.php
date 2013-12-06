<?php get_header(); ?>

    <div id="content">
        <div class="container txt-lefty">
            <div class="row-fluid">
                <div class="span9">

                    <?php
                    /*$blog_hero = of_get_option('blog_hero');
                    if ($blog_hero){
                        ?>
                        <div class="clearfix row-fluid">
                            <div class="hero-unit">

                                <h1><?php bloginfo('title'); ?></h1>

                                <p><?php bloginfo('description'); ?></p>

                            </div>
                        </div>
                    <?php
                    }*/
                    ?>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="entry" id="post-<?php the_ID(); ?>">
                            <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                            <small><em>
                                    <?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.
                                </em></small>
                            <hr>
                            <div class="row-fluid">
                                <?php if(has_post_thumbnail()) { ?>
                                <div class="span5">
                                    <a href="single.html">
                                        <!--<img alt="image" class="img-polaroid" src="http://quickimage.it/600x300">-->
                                        <?php the_post_thumbnail( 'wpbs-featured' ); ?>
                                    </a>
                                </div>
                                <div class="span7">
                                    <?php } else { ?>
                                    <div class="span12">
                                        <?php } ?>
                                    <p><?php the_excerpt(); ?></p>
                                    <small>- <a href="<?php the_permalink(); ?>'">Read More</a></small>
                                </div>
                            </div>
                        </div>


                    <?php endwhile; ?>

                        <?php if (function_exists('page_navi')) { // if expirimental feature is active ?>

                            <?php page_navi(); // use the page navi function ?>

                        <?php } else { // if it is disabled, display regular wp prev & next links ?>
                            <nav class="wp-prev-next">
                                <ul class="clearfix">
                                    <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
                                    <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
                                </ul>
                            </nav>
                        <?php } ?>


                    <?php else : ?>

                        <article id="post-not-found">
                            <header>
                                <h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
                            </header>
                            <section class="post_content">
                                <p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
                            </section>
                            <footer>
                            </footer>
                        </article>

                    <?php endif; ?>

                    <div class="pagination pagination-right">
                        <ul>
                            <li><a href="#">Previous</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>

                </div>

                <div class="span3">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </div>






<?php get_footer(); ?>