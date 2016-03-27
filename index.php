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
        <div class="twelve columns">
<!-- BEGIN LOOP -->
            <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); 
                } // end while
            } // end if
            ?>
<!-- END LOOP -->
        </div>
    </section>
<?php get_footer(); ?>
        </div> <!-- ends container -->
    </body>
</html>