<div class="col-lg-5 col-lg-offset-0 media-col col-md-9 col-md-offset-1">

  <?php if( get_field('video2') ): ?>
    <div class="video-container">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">

        <iframe class="video" allowFullScreen src="<?php the_field('video2'); ?>"></iframe>  
    </div>
  <?php endif; ?>
  
  <?php if( get_field('img1') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">
        <a href="#" class="open-modal"> 
          <img class="img-content" src="<?php the_field('img1'); ?>" alt="">
        </a>
    </div>
  <?php endif; ?>

  <?php if( get_field('img2') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">
        
        <a href="#" class="open-modal"> 
          <img class="img-content" src="<?php the_field('img2'); ?>" alt="">
        </a>
    </div>
  <?php endif; ?>

  <?php if( get_field('video1') ): ?>
    <div class="video-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">

        <iframe class="video" allowFullScreen src="<?php the_field('video1'); ?>"></iframe>  
    </div>
  <?php endif; ?>
</div>