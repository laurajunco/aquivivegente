<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquivivegente
 */

?>

<?php if( get_field('clase') ): ?>	
	<div class="card-container col col-lg-<?php the_field( 'columnas' ); ?> col-lg-offset-<?php the_field( 'offset' );?> col-md-12 col-md-offset-0 col-sm-12" > 	
		<?php else : ?>
	<div class="card-container col col-lg-<?php the_field( 'columnas' ); ?> col-lg-offset-<?php the_field( 'offset' );?> col-md-6 col-md-offset-0 col-sm-6" > 		
<?php endif; ?>

	<div class="open-modal-obj card <?php the_field( 'color' ); ?> <?php the_field( 'clase' ); ?> <?php the_field( 'orientacion' ); ?>">

		<img src=<?php the_field( 'img' ); ?> class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy">

		<div class="card-content">
			<p class="objeto-title"><?php the_title(); ?></p>
			<p class="objeto-des"> <?php the_content(); ?></p>
		</div>
	</div>
</div>