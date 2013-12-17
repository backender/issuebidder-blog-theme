<?php get_header(); ?>

    <div id="header">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1>
                        <?php _e("Posts By:", "bonestheme"); ?>
                        <?php
                        // If google profile field is filled out on author profile, link the author's page to their google+ profile page
                        $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
                        $google_profile = get_the_author_meta( 'google_profile', $curauth->ID );
                        if ( $google_profile ) {
                            echo '<a href="' . esc_url( $google_profile ) . '" rel="me">' . $curauth->display_name . '</a>';
                            ?>
                        <?php
                        } else {
                            echo get_the_author_meta('display_name', $curauth->ID);
                        }
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>

<div id="content">
    <div class="container txt-lefty">
        <div class="row-fluid">
            <div class="span9">

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
                                <small>- <a href="#">Read More</a></small>
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

                    <div class="entry">


                        <h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>

                        <div class="row-fluid">
                            <div class="span12">
                                <?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?>
                            </div>
                        </div>

                <?php endif; ?>

                <?php include 'pagination.php'; ?>

                </div>

                <div class="span3">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>