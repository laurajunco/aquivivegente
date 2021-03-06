<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquivivegente
 */

get_header();
?>
	<main id="primary" class="site-main single-main" data-barba="container" data-barba-namespace="gente">
	<div class="content-container content-container-gente">
  <div class="row">
  <div class="col-lg-12 la-gente">
  <div class="arrows">
    <div class="left-arrow-la-gente"> 
      <img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/prev-arrow.svg">
      <strong>Átras </strong>
    </div>
    <div class="right-arrow-la-gente">
    <strong>Siguiente</strong>
    <img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/next-arrow.svg">
    </div>
  </div>
      
  <?php query_posts('post_type=gente&posts_per_page=5&orderby=date&order=ASC');?>
  
    <?php if ( have_posts() ) :?>
      <div class="la-gente-galeria">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
        <?php endwhile;?>
      </div>
    <?php endif;?>
  </div>
  </div>
  </div>
	</main><!-- #main -->
<?php

get_footer();


