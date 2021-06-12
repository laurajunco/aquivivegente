<div class="col-lg-5 media-col">   
  <?php if( get_field('img1') ): ?>
    <div class="img-container">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <a href="<?php the_field('img1'); ?>" class="open-modal"> 
          <img class="img-content" src="<?php the_field('img1'); ?>" alt="">
        </a>
    </div>
  <?php endif; ?>

  <?php if( get_field('img2') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <a href="<?php the_field('img2'); ?>" class="open-modal"> 
          <img class="img-content" src="<?php the_field('img2'); ?>" alt="">
        </a>
    </div>
  <?php endif; ?>

  <?php if( get_field('img3') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <a href="<?php the_field('img3'); ?>" class="open-modal"> 
          <img class="img-content" src="<?php the_field('img3'); ?>" alt="">
        </a>
    </div>
  <?php endif; ?>

  <?php if( get_field('img4') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <a href="<?php the_field('img4'); ?>" class="open-modal"> 
          <img class="img-content" src="<?php the_field('img4'); ?>" alt="">
        </a>
    </div>
  <?php endif; ?>

  <?php if( get_field('img5') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <a href="<?php the_field('img5'); ?>" class="open-modal"> 
          <img class="img-content" src="<?php the_field('img5'); ?>" alt="">
        </a>
    </div>
  <?php endif; ?>

  <?php if( get_field('img6') ): ?>
    <div class="img-container m-top">
        <img class="grilla" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/grilla_morada.svg" alt="">
        <a href="<?php the_field('img6'); ?>" class="open-modal"> 
          <img class="img-content" src="<?php the_field('img6'); ?>" alt="">
        </a>
    </div>
  <?php endif; ?>

  </div>

  </div> <!--end row-->

<div class="row">
<?php $galeria = get_field('galeria');?>
  <div class="col-lg-10 col-lg-offset-1 galeria">
    <a href="<?php echo $galeria['img_1'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_1'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_2'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_2'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_3'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_3'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_4'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_4'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_5'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_5'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_6'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_6'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_7'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_7'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_8'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_8'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_9'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_9'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_10'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_10'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_11'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_11'] ?>" />
    </a>
    <a href="<?php echo $galeria['img_12'] ?>" class="open-modal"> 
      <img class="img-galeria" src="<?php echo $galeria['img_12'] ?>" />
    </a>
  </div>
</div>

<div class="row">
<div class="row">
  <div class="col-lg-10 col-lg-offset-1 slick-carrusel-arrows"> 
    <img id="objetos-prev" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/prev-arrow.svg">

    <img id="objetos-next" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/next-arrow.svg">
  </div>
