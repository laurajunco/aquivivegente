<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquivivegente
 */

?>

<div class="grupo <?php the_field( 'color' ); ?>">
	<div class="group-title">
		<h3> <?php the_title(); ?></h3>
		<p> <?php the_field( 'lugar' ); ?></p>
		<img class="close-group show-on-mobile" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/close-menu.svg">
	</div>
	
	<div class="group-content">
		<?php the_content(); ?>
	</div>

	<div class="subir-gente"> 
  	<img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/arrow-up.svg"> <span >Subir</span> 
	</div>
</div>
