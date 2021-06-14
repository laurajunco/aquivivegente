<?php
/*
Template Name: Objetos
Template Post Type: post
*/
 
get_header();
?>
	<main id="primary" class="site-main single-main" data-barba="container" data-barba-namespace="single">

	<div class="content-container <?php the_field( 'color' ); ?> <?php the_field( 'clase' ); ?>">

  <div class="row hide-on-mobile">
    <div class="col-lg-11 col-lg-offset-1">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>

  <?php get_template_part( 'template-parts/content-single', basename(get_permalink()) );?>
  
  <div class="sidebar "> 
    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/close.svg"></a>
    <p class="hide-on-small">TODOS LOS COLECTIVOS</p>
  </div>

  <div class="subir"> 
  <img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/arrow-up.svg"> <span >Subir</span> 
    
  </div>

</div>

<div class="modal-img">
  <div class="modal-img-background <?php the_field( 'color' ); ?>"></div>
  <div class="modal-img-close">
    <img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/close.svg">
  </div>
  <div class="modal-img-content">
  </div>
</div>


	</main><!-- #main -->
<?php

get_footer();


