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
    <div class="col-lg-5 col-lg-offset-1">
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
  </div>

</div>