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
                	<?php 
				        if ( have_posts() ) {
				        while ( have_posts() ) {
				            the_post();?>
				            <h3><?php the_title(); ?></h3>
				            <?php 
				            if ( has_post_thumbnail() ) {
				                the_post_thumbnail('thumbnail');
				            }
				            the_excerpt(); 
				                } // end while
				            } // end if
					            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					            <?php 
					            if ( has_post_thumbnail() ) {
					                the_post_thumbnail('thumbnail');
					            }
					            the_excerpt(); ?>
					    <p><a href="<?php the_permalink(); ?>">Read More</a></p>
<?php } // end while
            } // end if
        ?>
				        ?>
                </div>
            </section>
        <?php get_footer(); ?>
</div>
</body>

</html>