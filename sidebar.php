<div class="accordion" id="accordion2">
    <h3>Newest Posts</h3>
    <hr class="halfed">
        <ul class="unstyled">
            <?php
            $recent_posts = wp_get_recent_posts();
            foreach( $recent_posts as $recent ){
                echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
            }
            ?>
        </ul>
</div>

<h3>Follow Us</h3>
<hr class="halfed">
<!-- AddThis Follow BEGIN -->
<div class="addthis_toolbox addthis_32x32_style addthis_default_style">
    <a class="addthis_button_facebook_follow" addthis:userid="issuebidder"></a>
    <a class="addthis_button_twitter_follow" addthis:userid="issuebidder"></a>
    <a class="addthis_button_rss_follow" addthis:userid="blog.issuebidder.com/feed/rss"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525daa3e41d2049f"></script>
<!-- AddThis Follow END -->
<br>

<h3>Newsletter</h3>
<hr class="halfed">
<p>Stay up to date and get the latest news from Issue Bidder </p>
<?php echo do_shortcode("[mc4wp_form]"); ?>
</div>

<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
    <?php //dynamic_sidebar( 'sidebar1' ); ?>
<?php endif; ?>