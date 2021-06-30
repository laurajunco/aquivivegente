<div class="row">
  <div class="col-lg-10 col-lg-offset-1 objetos-container col-md-10 col-md-offset-1">

  <?php query_posts('post_type=objeto&posts_per_page=15&orderby=date');?>
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
  <?php 
    endwhile;
    endif;
  ?>
  </div>
</div>