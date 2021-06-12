<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquivivegente
 */

?>


<div class="content-container <?php the_field( 'color' ); ?> <?php the_field( 'clase' ); ?>">

  <div class="row">
    <div class="col-lg-11 col-lg-offset-1">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-5 col-lg-offset-1 content">
      <?php the_content(); ?>
    </div>
    <?php get_template_part( 'template-parts/content-single', basename(get_permalink()) );?>
  </div>

  <div class="sidebar "> 
    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/close.svg"></a>

    <?php if( get_field('img1') ): ?>
      <p><?php the_field( 'side-title' ); ?></p>
    <?php endif; ?>
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
  <div class="modal-img-content"></div>
</div>
