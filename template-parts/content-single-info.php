  <div class="col-lg-5 col-lg-offset-0 media-col col-md-9 col-md-offset-1">
    
    <?php if( get_field('img1') ): ?>
      <div class="img-container">
          <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
          <a href="#" class="open-modal"> 
            <img class="img-content" src="<?php the_field('img1'); ?>" alt="">
          </a>
      </div>
    <?php endif; ?>

    <?php if( get_field('img2') ): ?>
      <div class="img-container m-top">
          <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
          <a href="#" class="open-modal"> 
            <img class="img-content" src="<?php the_field('img2'); ?>" alt="">
          </a>
      </div>
    <?php endif; ?>

    <?php if( get_field('img3') ): ?>
      <div class="img-container m-top">
          <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
          <a href="#" class="open-modal"> 
            <img class="img-content" src="<?php the_field('img3'); ?>" alt="">
          </a>
      </div>
    <?php endif; ?>

  </div>
</div> <!--end row-->

<div class="row">
  <div class="col-lg-6 col-lg-offset-1"> 
  <?php if( get_field('archivo') ): ?>
    <a class="content-link" download href="<?php the_field('archivo'); ?>">
      <?php the_field('texto_archivo'); ?>
      <img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/descargar.svg" alt="">
    </a>
    <?php endif; ?>
  </div>