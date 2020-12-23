<?php get_header(); ?>
<div class="container">
<?php 
while ( have_posts() ) : the_post(); 
?>
<h1 class="display-5"><?php the_title(); ?></h1>
<?php the_content(); ?>
</div>
<?php
	endwhile;
	wp_reset_query();
	get_footer();
?>