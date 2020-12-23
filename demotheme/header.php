<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

  			
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans">
		<?php 
		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
		wp_enqueue_script( 'jquery_', get_bloginfo("template_url").'/jquery.js');

		wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
		wp_enqueue_style( 'themestyle', get_bloginfo('stylesheet_url'));
		?>
  	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php wp_head(); ?> 		
</head>
<body <?php body_class(); ?>>
<div class="mainwrapper">
	<div class="jumbotron">
		<div class="container">
		<h1 class="display-4">Header of the Service</h1>
		</div>
	</div>
<div class="container-fluid stickywrap">
	<div class="d-flex justify-content-end bg-secondary mb-3 container-fluid sticky">
	<?php
	$loop = new WP_Query(
	array(  
        'post_type' => 'page',
        'post_status' => 'publish',
		'orderby'           => 'menu_order',
    ));
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<a href="<?php the_permalink(); ?>"><div class="p-2 pagelink"><?php the_title(); ?></div></a>
	<?php
	endwhile;
	?>
	</div>
<?php
if (is_front_page()) {
?>
<div class="container">

<?php
    $args = array(  
        'post_type' => 'points',
        'post_status' => 'publish',
		'orderby'           => 'menu_order',
    );

?>
  <div class="row">
  <?php
  $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
    <div class="col-sm-4">
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
    </div>
<?php
    endwhile;

    wp_reset_postdata(); 
?>
  </div>

</div>
<?php 
}
?>

</div>
	
	