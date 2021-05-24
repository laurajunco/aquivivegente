<div class="col-lg-5 media-col">   
  <?php if( get_field('img1') ): ?>
    <div class="img-container">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <img class="img-content" src="<?php the_field('img1'); ?>" alt="">
    </div>
  <?php endif; ?>

  <?php if( get_field('img2') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <img class="img-content" src="<?php the_field('img2'); ?>" alt="">
    </div>
  <?php endif; ?>

  <?php if( get_field('img3') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <img class="img-content" src="<?php the_field('img3'); ?>" alt="">
    </div>
  <?php endif; ?>

  <?php if( get_field('img4') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <img class="img-content" src="<?php the_field('img4'); ?>" alt="">
    </div>
  <?php endif; ?>

  <?php if( get_field('img5') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <img class="img-content" src="<?php the_field('img5'); ?>" alt="">
    </div>
  <?php endif; ?>

  <?php if( get_field('img6') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <img class="img-content" src="<?php the_field('img6'); ?>" alt="">
    </div>
  <?php endif; ?>

  </div>