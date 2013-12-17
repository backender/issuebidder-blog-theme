<?php get_header(); ?>

<div id="content">
    <div class="container txt-lefty">
        <div class="row-fluid">
            <div class="span12">

                <div class="hero-unit">

                    <h1><?php _e("Epic 404 - Article Not Found","bonestheme"); ?></h1>
                    <p><?php _e("This is embarassing. We can't find what you were looking for.","bonestheme"); ?></p>

                </div>

                <p><?php _e("Whatever you were looking for was not found, but maybe try looking again or search using the form below.","bonestheme"); ?></p>

                <div class="row-fluid">
                    <div class="span12">
                        <?php get_search_form(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>