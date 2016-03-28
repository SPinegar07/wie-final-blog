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
            <h2>Fancy Blog About Web Stuffs</h2>
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
<!-- END LOOP -->
    </div>
    </section>
<!-- SIDEBAR -->
    <section class="row">
        <div class="four columns">
            <?php if ( have_posts() ) : ?>
            <h3>Recent Posts</h3>
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
        </div> <!-- ends container -->
    </body>
</html>