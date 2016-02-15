<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MCJ6213 Template</title>
    <?php wp_head(); ?>
	<!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('style.css'); ?>" />
</head>
<body>
	<div class="container">
            <header class="row">
                <div class="twelve columns">
                    <!-- ADD LINK TO HOME_URL -->
                    <h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
                    <p><?php bloginfo('description'); ?></p>
                </div>
                <!-- Add Search Form -->
                <div class="three columns">
                    <?php get_search_form(); ?>
                </div>
                        </header>
            <!-- Add Menu Here -->
            <div class="row">
                <div class="twelve columns">
                    <?php wp_nav_menu(array(
                        'sort_column' => 'menu_order', 
                        'container_class' => 'blank-menu-header'
                        ));?>
                </div>
</div>
</div>
</body>

</html>