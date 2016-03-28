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
            <?php
				query_posts('cat=group-1');
				while (have_posts()) : the_post();
				the_content();
				endwhile;
?>
<!-- END LOOP -->
        </div>
    </section>
<?php get_footer(); ?>
        </div> <!-- ends container -->
    </body>
</html>