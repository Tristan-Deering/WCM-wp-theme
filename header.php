<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WCMcbd
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

<body <?php body_class(); ?>>
<div id="page">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wcmcbd' ); ?></a>

		<nav id="fullscreen-menu">
			<div class="menu-wrapper">
					<div class="nav-circle">
            <div id="close-menu"><i class="fas fa-times"></i></div>
					</div>
					<div class="menu row">
						<div class="col vert-flex-container">
							<a href="/" class="menu-link">Home</a>
							<a href="/" class="menu-link">Store</a>
							<a href="/" class="menu-link">About Us</a>
							<a href="/" class="menu-link">CBD Science</a>
							<a href="/" class="menu-link">Wholesale</a>
						</div>
						<div class="col vert-flex-container">
							<a href="/" class="menu-link">News</a>
							<a href="/" class="menu-link">FAQ</a>
							<a href="/" class="menu-link">Contact Us</a>
							<a href="/" class="menu-link">My Account</a>
						</div>
					</div>
					<img id="background-logo" src="<?php blogInfo('template_directory'); ?>/assets/images/whiteleaf-logo.png" alt="wcmcbd logo">
			</div>
		</nav>

		<?php if ( ! is_front_page() ) : ?>
		<nav id="main-nav">
			<div class="container">
				<div class="row">
					<div class="col d-flex align-items-center justify-content-between">

						<a class="brand" href="<?php bloginfo('url') ?>">
							<img src="<?php bloginfo('template_directory');?>/assets/images/logo.png ?>" class="img-fluid logo">
						</a>

						<?php wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_class' => 'top-menu d-flex'
						) ); 
						?>
						
					</div>
				</div><!-- #site-navigation -->
			</div>
		</nav>

		<section id="breadcrumbs" class="container">
			<div class="container container-big">
				<div class="row d-inline-block">

					<!-- if its a page -->
					<?php if ( is_home() || is_shop() ) : ?>

						<span class="col">Home</span>
						<span class="col">page</span>

					<!-- if its a post -->
					<?php elseif ( is_single() ) :  ?>

						<span class="col">Home</span>
						<span class="col">page</span>		
						<span class="col">category</span>
						<span class="col">post/product name</span>		

					<?php endif; ?>

				</div>
			</div>
		</section>
		<?php endif; ?>