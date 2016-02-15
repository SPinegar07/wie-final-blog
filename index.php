<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MCJ6213 Template</title>
		<!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('style.css'); ?>" />
</head>
<body>
	<div class="container">
		<?php get_header(); ?>
            <section class="row">
                <div class="twelve columns">
                	<h1><?php bloginfo('name'); ?></h1>
                    <p><?php bloginfo('description'); ?></p>
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
</div>
</body>

</html>