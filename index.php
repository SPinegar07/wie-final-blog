<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <!-- Links to our Style.css file -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('style.css'); ?>" />
    </head>
    <body>
        <div class="container">
            <?php get_header(); ?>
    <section class="row">
        <div class="eight columns">
<!-- BEGIN LOOP -->
            <?php if ( have_posts() ) : ?>
            <h2>Web Design Blog</h2>
            <?php
            // The Loop
            while ( have_posts() ) : the_post();?>
            <!-- data context -->
                <h2>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <?php the_excerpt(); ?>
            <?php endwhile; ?> <!-- End Loop -->
        <?php endif; ?>
        <?php else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
<!-- END LOOP -->
    </div>
    </section>
<!-- SIDEBAR -->
    <section class="row">
        <div class="four columns">
            <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        </div>
    </section>
<?php get_footer(); ?>
        </div> <!-- ends container -->
    </body>
</html>