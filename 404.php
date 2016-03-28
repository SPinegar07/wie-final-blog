<?php 
/* Template: 404 page (Not Found) */

get_header(); ?>
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

    <div class="row">
        <div class="eight columns">
            <h1>Oh no! Where'd it go?</h1>
            <h2>This is somewhat embarrassing, isn't it?</h2>
            <p>It looks like nothing was found at this location. Maybe try a search?</p>

            <h2>Try searching for what you need:</h2>
            <?php get_search_form(); ?>
        </div>
        <div class="four columns">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>