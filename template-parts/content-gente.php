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
	</div>
	
	<div class="group-content">
		<?php the_content(); ?>
	</div>
</div>
