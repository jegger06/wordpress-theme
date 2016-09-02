<?php get_header(); ?>

	<!-- This is the Post loop. which checks if we have posts and display it on the page -->
	<!-- We can now set custom pages for every post format with the name convention of the file get_template_part name such as 'post' should be the same name as the file name such as post-aside.php -->

<div class="row">
	
	<div class="col-xs-12 col-sm-8 seach-results">

		<div class="row">
		
		
		<?php
			if( have_posts() ):

				while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('post', 'search'); ?>	

				<?php endwhile;

			endif;

		?>
		</div>

	</div>
	<div class="col-xs-12 col-sm-4">	
		<?php get_sidebar(); ?>
	</div>

</div>
	


<?php get_footer(); ?>