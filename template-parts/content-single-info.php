<div class="col-lg-5 media-col sticky">
  
  <?php if( get_field('img1') ): ?>
    <div class="img-container">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <img class="img-content" src="<?php the_field('img1'); ?>" alt="">
    </div>
  <?php endif; ?>

</div>