<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Fancy Blog Template</title>
		<!-- Links to our Style.css file -->
    <!-- Sylesheet -->
        <style type="text/css">
  <?php
    include("style.css");
  ?>
</style>
</head>
<body>
	<div class="container">
		<?php get_header(); ?>
            <section class="row">
                <!-- MAKE THIS COLUMN NINE WIDTH -->
                    <div class="nine columns">
                        <?php if (have_posts()) :           
                            while (have_posts()) : the_post(); ?> 
                                <h2><?php the_title(); ?></h2>
                                <?php the_content();
                            endwhile;
                        endif; ?>
                    </div>
            <!-- ADD IN A THREE WIDTH COLUMN - COMPLETE THE TWELVE REQUIREMENT WIDTH -->
            <!-- BEGIN SIDEBAR -->
                    <div class="three columns">
                        <?php get_sidebar(); ?>
                    </div>
            <!-- END SIDEBAR -->
                </div>
            </section>
        <?php get_footer(); ?>
</div>
</body>

</html>