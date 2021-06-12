<div class="col-lg-5 media-col">
  
  <?php if( get_field('img1') ): ?>
    <div class="img-container">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">
        <a href="<?php the_field('img1'); ?>" class="open-modal"> 
          <img class="img-content" src="<?php the_field('img1'); ?>" alt="">
        </a>
    </div>
  <?php endif; ?>

  <?php if( get_field('img2') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">
        <a href="<?php the_field('img2'); ?>" class="open-modal"> 
          <img class="img-content" src="<?php the_field('img2'); ?>" alt="">
        </a>
    </div>
  <?php endif; ?>

  <?php if( get_field('archivo') ): ?>
    <a class="content-link end" download href="<?php the_field('archivo'); ?>"><?php the_field('texto_archivo'); ?> <img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/descargar.svg" alt=""></a>
    <?php endif; ?>
</div>