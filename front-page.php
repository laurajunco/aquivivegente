<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquivivegente
 */

get_header();
?>
    <img class="bg-img" src="<?php bloginfo( 'template_url' )?>/assets/bg.svg">
		<div class="hero">
		<h1><?php bloginfo( 'name' )?></h1>
		</div>

		<?php if( get_field('texto') ): ?>
			<p><?php the_field('texto'); ?></p>
		<?php endif; ?> 
		
		<?php if( get_field('boton') ): ?>
      <h3>
        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="href">
          <?php the_field('boton'); ?>
        </a>
      </h3>
		<?php endif; ?> 

<?php
get_footer();
