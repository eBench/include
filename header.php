<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package include
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700|Quicksand:500" rel="stylesheet">
	<script src="https://use.fontawesome.com/2bb93bf686.js"></script>
	<script
	src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
	crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/include.js"</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header start -->
<div id="page" class="site">
	<header class="fixed fluid-gutterless">
			<hr class="multi-color-bar">
			<div class="site-header grid fluid">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-include-org.svg" class="logo-include-org" alt="Include.org"></a>
				<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
				<!--<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'include' ); ?></button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav> -->
				<div class="button-group">
					<a href="#" class="btn btn-positive" id="get-involved">Get involved</a>
					<a href="template-menu.html" class="btn">Menu<i class="fa fa-bars fa-lg icon-right"></i></a>
				</div>
			</div>
	</header>
<!-- Colored title logic -->


<span class="color-purple">Making</span>
<span class="color-blue">the</span>
<span class="color-green">world</span>
<span class="color-sunflower">a</span>
<span class="color-amber">more</span>
<span class="color-purple">welcoming</span>
<span class="color-blue">place</span>
<span class="color-green">for</span>
<span class="color-sunflower">people</span>
<span class="color-amber">with</span>
<span class="color-purple">communication</span>
<span class="color-blue">&amp;
<span class="color-green">understanding</span>
<span class="color-sunflower">difficulties</span>
</span>

<!-- end -->

<!-- Header end -->

	<div id="content" class="site-content">
