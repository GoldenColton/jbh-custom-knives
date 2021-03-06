<?php get_header(); //includes header.php ?>

<main class="content">

	<?php //The Loop Begins here
	if( have_posts() ):
		while( have_posts() ):
			the_post();
	?>
	<article <?php post_class('clearfix'); ?> >

		<?php the_post_thumbnail( 'medium' ); ?>

		<h2 class="entry-title"> 
			<a href="<?php the_permalink(); ?>"> 
				<?php the_title(); ?> 
			</a>
		</h2>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 
				'before' 			=> '<div class="post-pagination" >Continue Reading this Post: ',
				'after' 			=> '</div>',
				// 'next_or_number' 	=> 'number',
				'pagelink' 			=> '<span class="current" >%</span>'
				) ); ?>
		</div>
		<div class="postmeta">
			<span class="author">by: <?php the_author(); ?></span>
			<span class="date"> <?php the_date(); ?></span>
			<span class="num-comments"> <?php comments_number(); ?></span>
			<span class="categories"> <?php the_category(); ?></span>
			<span class="tags"><?php the_tags(); ?></span>
		</div>
		<!-- end .postmeta -->

		<?php comments_template(); ?>

	</article>
	<!-- end .post -->

	<?php 
		endwhile;
	else:
		echo 'Timberrrrr! Nothin in the Woodworks right now';
	endif;
	// end of The Loop
	 ?>

<div class="pagination" >
	<?php cmw_pagination(); ?>
</div>

</main>
<!-- end #content -->

<?php get_sidebar(); //includes sidebar.php ?>

<?php get_footer(); //includes footer.php ?>