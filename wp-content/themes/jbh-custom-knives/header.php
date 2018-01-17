<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); //This is the HOOK that's required for Plugins and the Toolbar to work ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<meta charset="<?php bloginfo('charset'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?> >
	<header class="header" style="background-image: url(<?php header_image(); ?>)" >
		<div class="header-bar" >
			<?php the_custom_logo(); ?>
			<h1 class="site-title" >
				<a href="<?php echo home_url(); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			<h2><?php bloginfo( 'description' ); ?></h2>


			<?php //Displays a  menu location (to dsiplay a menu location you MUST register it in the functions.php)
			//this is displaying the main_menu/Main Navigation
			wp_nav_menu( array(
				'theme_location' 	=> 'main_menu',
			 	'container' 		=> 'nav',				// div, nav, ""
			 	'container_class' 	=> 'main-nav-contain',	// nav class="main-nav-contain"
			 	'menu_class' 		=> 'main-menu',			// ul class="main-menu"
			 	'fallback_cb' 		=>  false,				// do nothing if no menu exists
			 ) );
			 ?>

			 <?php 
			//this is displaying the social_icons/Social Icons
			 wp_nav_menu( array(
			 	'theme_location' 	=> 'social_icons',
			 	'container_class' 	=> 'social-navigation',
			 	'link_before' 		=> '<span class="screen-reader-text">',
			 	'link_after' 		=> '</span>',
			 	'fallback_cb' 		=>  false,					// do nothing if no menu exists
			 ) );
			 ?>

		</div>
	</header>
	<div class="wrapper" >
		

