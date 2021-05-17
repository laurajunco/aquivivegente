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

	<!-- <main id="primary" class="site-main"> -->
		<img class="bg-img" src="<?php bloginfo('template_url' )?>/assets/bg.svg">
		<div class="hero">
		<h1>Aquí vive gente</h1>
		</div>
		<p>
		Este espacio al que hemos llamado museo, justamente como una forma de confrontar esa noción y la institucionalización de la memoria y la experiencia, es aquello que muchos museos no son: un espacio para habitar, un lugar que va más allá de la contemplación de los objetos y su mediación jerarquizada para dar paso a la construcción de un sentido, una memoria y un imaginario en común. En este proceso de trabajo en colectivo las organizaciones han creado una forma de asociatividad y solidaridad que va más allá de aquello que se exhibe, sino que propone un lugar de resistencia y movilización que desarrolla procesos de reclamo, re-apropiación del territorio y afianzamiento de lazos comunitarios, y que recupera el espacio de encuentro entre los cuerpos para acompañarse y afectarse unos a otros en sus experiencias y luchas. 
		</p>
	
		<h3>
		<a href="" class="href"> Entrar </a>
		</h3>
	<!--</main> #main -->

<?php
get_footer();
