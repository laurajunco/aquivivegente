<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aquivivegente
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head> 

<body <?php body_class(); ?> data-barba="wrapper">
<?php wp_body_open(); ?>

<?php if ( ! is_front_page() ) : ?>

<img class="bg-img hide-on-small" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/bg_mapa.svg">
<img class="bg-img show-on-small" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/bg_mapa_movil.svg">

<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><h1><?php bloginfo( 'name' )?></h1></a>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<div class="site-branding-mobile">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
				<h1><?php bloginfo( 'name' )?></h1>
			</a>
			<div class="burguer">
				<img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/burguer.svg">
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation-mobile">
		<div class="close-mobile-menu">
				<img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/close-menu.svg">
		</div>
		<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'mobile-menu',
					)
				);
			?>
		</nav>

	</header><!-- #masthead -->
<?php endif;?>
