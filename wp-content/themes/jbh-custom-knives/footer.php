	</div><!-- This ends the wrapper div -->
	<footer>
		<?php //Displays a  menu location (to dsiplay a menu location you MUST register it in the functions.php)
			//this is displaying the main_menu/Main Navigation
			wp_nav_menu( array(
				'theme_location' 	=> 'footer_nav',
			 	'container' 		=> 'nav',					// div, nav, ""
			 	'container_class' 	=> 'footer-nav-contain',	// nav class="main-nav-contain"
			 	'menu_class' 		=> 'footer-nav',			// ul class="main-menu"
			 	'fallback_cb' 		=>  false,					// do nothing if no menu exists
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
	</footer>
	<?php wp_footer(); //HOOK. Required for plugins and Admin Bar to work ?>
</body>
</html>