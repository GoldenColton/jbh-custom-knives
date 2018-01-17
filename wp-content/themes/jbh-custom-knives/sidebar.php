<aside class="def-sidebar">
	<?php 
	//display a widget area if it exists
	if( ! dynamic_sidebar( 'Blog Sidebar' ) ):
	 ?>

	<section id="meta" class="widget">
		<h3 class="widget-title"> Meta </h3>
		<ul>
			<li><?php wp_loginout(); //login and logout ?></li>
		</ul>
	</section>

	<?php 
	endif; // end of widget area fallback
	 ?>
</aside>