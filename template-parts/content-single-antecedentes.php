  <div class="col-lg-5 media-col">
    <?php if( get_field('video1') ): ?>
      <div class="insta-video">
          <div class="video">
            <?php the_field('video1'); ?>
          </div>
      </div>
    <?php endif; ?>

    <?php if( get_field('img1') ): ?>
      <div class="img-container m-top">
          <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">
          <img class="img-content" src="<?php the_field('img1'); ?>" alt="">
      </div>
    <?php endif; ?>

    <?php if( get_field('img2') ): ?>
      <div class="img-container m-top">
          <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">
          <img class="img-content" src="<?php the_field('img2'); ?>" alt="">
      </div>
    <?php endif; ?>

    <?php if( get_field('img3') ): ?>
      <div class="img-container m-top">
          <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">
          <img class="img-content" src="<?php the_field('img3'); ?>" alt="">
      </div>
    <?php endif; ?>

    <?php if( get_field('img3') ): ?>
      <div class="img-container m-top">
          <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_amarilla_hor.svg" alt="">
          <img class="img-content" src="<?php the_field('img3'); ?>" alt="">
      </div>
    <?php endif; ?>
  </div>
</div> <!--end row-->

<div class="row">
  <div class="col-lg-11 col-lg-offset-1">
    <?php $galeria = get_field('galeria');?>
    <img src="<?php echo $galeria['img_1'] ?>" />
    <img src="<?php echo $galeria['img_2'] ?>" />
    <img src="<?php echo $galeria['img_3'] ?>" />
    <img src="<?php echo $galeria['img_4'] ?>" />
    <img src="<?php echo $galeria['img_5'] ?>" />
    <img src="<?php echo $galeria['img_6'] ?>" />
    <img src="<?php echo $galeria['img_7'] ?>" />
    <img src="<?php echo $galeria['img_8'] ?>" />
    <img src="<?php echo $galeria['img_9'] ?>" />
    <img src="<?php echo $galeria['img_10'] ?>" />
    <img src="<?php echo $galeria['img_11'] ?>" />
    <img src="<?php echo $galeria['img_12'] ?>" />
  <div class="col-lg-5 media-col">
</div>