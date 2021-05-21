<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquivivegente
 */

get_header();
?>

<main id="primary" class="site-main">

	<img class="fixed-circle" src="<?php bloginfo( 'template_url' )?>/assets/circulo_fixed.svg" alt="">
	<img class="fixed-logo" src="<?php bloginfo( 'template_url' )?>/assets/logo_odeon.svg" alt="">

	<section class="cards container">
		<?php query_posts('category_name=home&posts_per_page=6&orderby=date&order=ASC');?>
			<?php if ( have_posts() ) :
				$item_number = 1;
				while ( have_posts() ) : the_post();	
				if ( $item_number % 2 !== 0 ) : ?>
					<div class="row">
				<?php endif;
					get_template_part( 'template-parts/content', get_post_type() );
				if ( $item_number % 2 === 0 ) : ?>
					</div>
				<?php endif;
					$item_number++;
				endwhile;
			endif;
		?>
	</section>
</main><!-- #main -->

<?php
get_footer();
