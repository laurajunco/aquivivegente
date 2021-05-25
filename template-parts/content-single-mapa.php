  <div class="col-lg-5 media-col">

    <?php if( get_field('img1') ): ?>
      <div class="img-container">
          <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">
          <img class="img-content" src="<?php the_field('img1'); ?>" alt="">
      </div>
    <?php endif; ?>

    <?php if( get_field('enlace') ): ?>
    <a class="content-link" target="_blank" href="<?php the_field('enlace'); ?>">
      <?php the_field('texto_enlace'); ?>
      <img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/link.svg" alt="">
    </a>
    <?php endif; ?>
  </div>
</div> <!-- end Row -->

<div class="row m-top-50">
  <?php if( get_field('texto1') ): ?>
    <div class="col-lg-5 col-lg-offset-1 ">
      <p> <?php the_field('texto1'); ?></p>
    </div>
  <?php endif; ?>

  <?php if( get_field('texto2') ): ?>
    <div class="col-lg-5 media-col">
      <p> <?php the_field('texto2'); ?></p>
    </div>
  <?php endif; ?>
