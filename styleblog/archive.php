<?php get_header(); ?>

	<!-- This is the Post loop. which checks if we have posts and display it on the page -->
	<!-- We can now set custom pages for every post format with the name convention of the file get_template_part name such as 'post' should be the same name as the file name such as post-aside.php -->

<div class="row">
	
	<div class="col-xs-12 col-sm-8">

		<div class="row text-center">
		
		
		<?php if( have_posts() ): ?>

				<header class="page-header">
					<?php

						the_archive_title('<h1 class="page-title">','</h1>');
						the_archive_description('<div class="taxonomy-description"','</div>');

					?>
				</header>

				<?php while( have_posts() ): the_post(); ?>
			
					<?php get_template_part('post','archive'); ?>
				
			<?php endwhile; ?>
	
			<div class="col-xs-12 text-center">
				<?php the_posts_navigation(); ?>
			</div>
			
			<?php endif; ?>
			
		</div>

	</div>
	<div class="col-xs-12 col-sm-4">	
		<?php get_sidebar(); ?>
	</div>

</div>
	


<?php get_footer(); ?>