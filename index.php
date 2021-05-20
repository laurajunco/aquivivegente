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
<img class="fixed-circle" src="<?php bloginfo( 'template_url' )?>/assets/circulo_fixed.svg" alt="">
<img class="fixed-logo" src="<?php bloginfo( 'template_url' )?>/assets/logo_odeon.svg" alt="">

	<section class="cards container">

		<div class="row">
			<div class="card-container col col-lg-6"> 
				<div class="card morado telas">
					<img src="<?php bloginfo( 'template_url' )?>/assets/telas_bg.png" alt="">
					<div class="card-content">
						<h3>Telas</h3>
						<p>Las telas de Círculo de Mujeres Aisha y Espacio Odeón fueron procesos de encuentro entre los equipos de las organizaciones, maneras de conocernos de forma más profunda y de representarnos y crear una memoria de nuestros procesos juntos. </p>
						<a href="">Leer + </a>
					</div>
				</div>
			</div>

			<div class="card-container col col-lg-4 col-lg-offset-2"> 
				<div class="card azul mapa">
					<img src="<?php bloginfo( 'template_url' )?>/assets/mapa_bg.png" alt="">
					<div class="card-content">
						<h3>Mapa conceptual</h3>
						<p>La conceptualización del Museo y de todo lo que debía suceder aquí. En esos talleres definimos los ejes centrales—memoria, territorio, pedagogía y sostenibilidad—y nos preguntamos por las formas de abordar y hacer visibles tanto esos ejes como las historias y procesos de cada organización.</p>
						<a href="">Leer + </a>
					</div>
				</div>
			</div> 
		</div> 

		<div class="row">
			<div class="card-container col col-lg-4"> 
				<div class="card rosado residencia">
					<img src="<?php bloginfo( 'template_url' )?>/assets/residencia_bg.png" alt="">
					<div class="card-content">
						<h3>Residencia</h3>
						<p>El Boletín desarrolló una edición especial de 250 ejemplares para “Aquí vive gente” que se imprimió en este espacio y se entregó al público a lo largo de la exposición.</p>
						<a href="">Leer + </a>
					</div>
				</div>
			</div> 

			<div class="card-container col col-lg-4 col-lg-offset-3"> 
				<div class="card naranja cartografia">
					<img src="<?php bloginfo( 'template_url' )?>/assets/cartografia_bg.png" alt="">
					<div class="card-content">
						<h3>Cartografía</h3>
						<p>A lo largo de la programación hicimos una serie de recorridos por el centro de la ciudad para entender sus procesos de transformación y gentrificación y la forma en la que impactan la vida y subsistencia de los habitantes de las localidades de La Candelaria y Santa Fé.</p>
						<a href="">Leer + </a>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="card-container col col-lg-4 col-lg-offset-2"> 
				<div class="card verde objetos">
					<img src="<?php bloginfo( 'template_url' )?>/assets/objetos_bg.png" alt="">
					<div class="card-content">
						<h3>Objetos</h3>
						<p>A lo largo de la programación hicimos una serie de recorridos por el centro de la ciudad para entender sus procesos de transformación y gentrificación y la forma en la que impactan la vida y subsistencia de los habitantes de las localidades de La Candelaria y Santa Fé.</p>
						<a href="">Leer + </a>
					</div>
				</div>
			</div> 

			<div class="card-container col col-lg-4 col-lg-offset-2"> 
				<div class="card marino cocina">
					<img src="<?php bloginfo( 'template_url' )?>/assets/cocina_bg.png" alt="">
					<div class="card-content">
						<h3>Cocina</h3>
						<p>En esta cocina las mujeres del Círculo de Mujeres Aisha y de Asomujer y Trabajo nos dieron una serie de talleres y cocinaron almuerzos comunitarios para los participantes del proyecto y para cualquier persona que viniera a Odeón a compartir.</p>
						<a href="">Leer + </a>
					</div>
				</div>
			</div> 

		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
