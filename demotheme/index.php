<?php get_header(); ?>



<div class="container-fluid delimiter2">
<div class="container p-3">
<?php
    $args = array(  
        'post_type' => 'services',
        'post_status' => 'publish',
		'orderby'           => 'menu_order',
    );
	$loop = new WP_Query( $args ); 
    $i = 0;
    while ( $loop->have_posts() ) : $loop->the_post();
	$i++;
?>

	<div class="row p-3 my-3 bg-white">
	<?php
		if ($i%2) {
	?>
		<div class="col-7 col-lg-8">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div>
		<div class="col-5 col-lg-4">
			<img src="<?php the_post_thumbnail_url('servive-image'); ?>" />
		</div>
	<?php
		} else {
	?>
		<div class="col-5 col-lg-4">
			<img src="<?php the_post_thumbnail_url('servive-image'); ?>" />
		</div>
			<div class="col-7 col-lg-8">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div>

	<?php } ?>
	</div>
<?php
    endwhile;

    wp_reset_postdata(); 
?>
</div>
</div>

<div class="container">
<?php
	$a = 0;
    $args = array(  
        'post_type' => 'samples',
        'post_status' => 'publish',
		'orderby'           => 'menu_order',
    );
	$loop = new WP_Query( $args ); 
    while ( $loop->have_posts() ) : $loop->the_post();
		if (!($a%2)) {
			?>
				<div class="row">

			<?php
		}
		?>
		<div class="col sampl">
		
			<div class="samplback" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
			</div>
		
			<div class="overlay">
			<?php
			the_title('<h2>', '</h2>');
			the_content();
			?>
			</div>
		</div>
		<?php
				if (!(($a-1)%2)) {
			?>
		</div>
			<?php
		}
		$a++;
	    endwhile;

    wp_reset_postdata(); 
?>
</div>

<div class="container-fluid delimiterend">

	<div class="container">
	<div class="row">
	<?php
	    $args = array(  
        'post_type' => 'Persons',
        'post_status' => 'publish',
		'orderby'           => 'menu_order',
    );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		?>
		<div class="col person">
			<img src="<?php the_post_thumbnail_url(); ?>" class="personimg" />
			<?php the_title("<p><b>", "</b></p>")?>
			
		</div>

		<?php
	endwhile;
    wp_reset_postdata(); 
	?>
	</div>
	</div>
</div>

<!--end-index-->
<div class="container-fluid footerfix">
</div>
<?php
	get_footer();
?>