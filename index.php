<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquivivegente
 */

get_header();
?>

<main id="primary" class="site-main">
<img class="fixed-circle" src="<?php bloginfo( 'template_url' )?>/assets/circulo.png" alt="">

	<section class="cards">

	<div class="card-container">
		<div class="card morado telas">
			<img src="<?php bloginfo( 'template_url' )?>/assets/telas_bg.png" alt="">
			<div class="card-content">
				<h3>Telas</h3>
				<p>Las telas de Círculo de Mujeres Aisha y Espacio Odeón fueron procesos de encuentro entre los equipos de las organizaciones, maneras de conocernos de forma más profunda y de representarnos y crear una memoria de nuestros procesos juntos. </p>
				<a href="">Leer + </a>
			</div>
		</div>
	</div>

	<div class="card-container">
		<div class="card azul mapa">
			<img src="<?php bloginfo( 'template_url' )?>/assets/mapa_bg.png" alt="">
			<div class="card-content">
				<h3>Mapa conceptual</h3>
				<p>La conceptualización del Museo y de todo lo que debía suceder aquí. En esos talleres definimos los ejes centrales—memoria, territorio, pedagogía y sostenibilidad—y nos preguntamos por las formas de abordar y hacer visibles tanto esos ejes como las historias y procesos de cada organización.</p>
				<a href="">Leer + </a>
			</div>
		</div>
	</div>


	</section>


</main><!-- #main -->

<?php
get_footer();
