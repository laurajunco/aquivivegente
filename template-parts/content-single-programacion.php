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

  </div> <!--end row-->

<div class="row">
<?php $galeria = get_field('galeria');?>
  <div class="col-lg-10 col-lg-offset-1 galeria">
    <img class="img-galeria" src="<?php echo $galeria['img_1'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_2'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_3'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_4'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_5'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_6'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_7'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_8'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_9'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_10'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_11'] ?>" />
    <img class="img-galeria" src="<?php echo $galeria['img_12'] ?>" />
  </div>
</div>

<div class="row">
<div class="row">
  <div class="col-lg-10 col-lg-offset-1 slick-carrusel-arrows"> 
    <img id="objetos-prev" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/prev-arrow.svg">

    <img id="objetos-next" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/next-arrow.svg">
  </div>
