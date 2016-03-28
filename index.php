<!DOCTYPE html>
<html>
    <head>
        <title></title>
<!-- Sylesheet -->
        <style type="text/css">
  <?php
    include("style.css");
  ?>
</style>
<style type="text/css">
  <?php
    include("css/skeleton.css");
  ?>
</style>
    </head>
    <body> 
        <?php get_header(); ?>
        <div class="container">
    <table>
        <tr>
            <td width="75%">
<!-- BEGIN LOOP -->
            <?php if ( have_posts() ) : ?>
            <h2 class="center">Fancy Blog About Web Stuffs</h2>
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
    </div>
<!-- END LOOP -->
    </td>
<!-- SIDEBAR -->
    <td valign="top">
            <h4>More fun stuff</h4>
           <?php get_sidebar(); ?>
   </td>
        </div> <!-- ends container -->
    </body>
</html>