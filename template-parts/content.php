<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquivivegente
 */

?>

<div class="card-container col col-lg-6"> 
	<div class="card <?php the_field( 'color' ); ?> <?php the_title(); ?>">
		<?php the_post_thumbnail(); ?>
		<div class="card-content">
			<h3><?php the_title(); ?></h3>
			<p> <?php the_excerpt(); ?></p>
			<a href="<?php the_permalink(); ?>">Leer + </a>
		</div>
	</div>
</div>