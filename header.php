<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset')?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<!-- header starts here -->
    <header>
    	<div class="container">
    		
    		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name') ?></a></h1>
    		<small><?php bloginfo('description') ?></small>
    	</a>
    	</div>
    	
    </header>
    <!-- header ends here -->
    <!-- menu starts here -->
    <div class="main-nav">
        <div class="container">
            <?php 
               $args = array(
                'theme_location'    => 'primary'
                );
                wp_nav_menu($args); 
             ?>
        </div>
    </div>
    <!-- menu ends here -->