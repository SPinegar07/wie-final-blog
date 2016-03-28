<?php 
/* Template Name: Archive Page */

get_header(); ?>

<div class="row">
    <div class="twelve columns">
        <?php if ( have_posts() ) : ?>
            <h2>Archives</h2>
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
        <?php else: ?>
            <p>Sorry, we couldn't find what you were looking for. Try again!</p>
        <?php endif; ?>
    </div>
</div>