<?php

/*
	Template Name: Page No Title
*/

get_header(); ?>

	<!-- This is the Post loop. which checks if we have posts and display it on the page -->

	<?php
	if( have_posts() ):

		while( have_posts() ): the_post();

	?>
			<h1>This is a static Title</h1>
			<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a') ?>, in <?php the_category(); ?></small>
			<p><?php the_content(); ?></p>
			<hr>

	<?php	endwhile;

	endif;

	?>

<?php get_footer(); ?>