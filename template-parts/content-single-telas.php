<div class="col-lg-5 media-col">
  
  <?php if( get_field('video') ): ?>
    <div class="video-container">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">

        <iframe class="video" allowFullScreen src="<?php the_field('video'); ?>"></iframe>  
    </div>
  <?php endif; ?>
  
  <?php if( get_field('img1') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">
        <img class="img-content" src="<?php the_field('img1'); ?>" alt="">
    </div>
  <?php endif; ?>

  <?php if( get_field('img2') ): ?>
    <div class="img-container m-top ver">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_ver.svg" alt="">
        <img class="img-content" src="<?php the_field('img2'); ?>" alt="">
    </div>
  <?php endif; ?>

</div>