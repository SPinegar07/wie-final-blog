<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MCJ6213 Template</title>
	<!-- Links to our Style.css file -->
    <!-- Sylesheet -->
        <style type="text/css">
  <?php
    include("style.css");
  ?>
</style>
</head>
<body>
            <footer class="row">
    <div class="four columns">
<?php dynamic_sidebar('footer-widget-one'); ?>
</div>
    <div class="four columns">
<?php dynamic_sidebar('footer-widget-two'); ?>
</div>
    <div class="four columns">
<?php dynamic_sidebar('footer-widget-three'); ?>
</div>
</footer>
</div> 
<?php wp_footer(); ?>

</body>
</html>
