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
					<a class="btn js-menu">Menu<i class="fa fa-bars fa-lg icon-right"></i></a>
					<a class="btn js-menu" style="display:none">Menu<i class="fa fa-times fa-lg icon-right"></i></a>
				</div>
			</div>
	</header>
<!-- Header end -->

<!-- Menu start -->
  <div class="grid fluid menu-container">
    <ul class="site-menu">
			<?php
		   $args = array('exclude' => '2');
		   $pages = get_pages($args);
		 	 $index = 0;
		   foreach ( $pages as $page ) {
		 		$index++;
		     $link = '<li class="menu-item">';
		 		$link .=	'<a class="color-';
		 			if (($index % 5 ) === 1 ) {
		 				$link .='purple';
		 			} else if (($index % 5 ) === 2 ) {
		 				$link .='blue';
		 			} else if (($index % 5 ) === 3 ) {
		 				$link .='green';
		 			} else if (($index % 5 ) === 4 ) {
		 				$link .='sunflower';
		 			} else if (($index % 5 ) === 0 ) {
		 				$link .='amber';
		 			};
		 		 $link .= '" href="' . get_page_link( $page->ID ) . '">';
				 if (empty(get_post_meta( $page->ID, 'menu-title', true ))) {
		 				$link .= $page->post_title;
		 		 } else {
		 				$link .= get_post_meta( $page->ID, 'menu-title', true );
		 		 }
		 		 $link .= '</a></li>';
		     echo $link;
		   }
		  ?>
		</ul>
    <ul class="secondary-links">
      <li class="menu-item">
        <a class="color-blue" href="#">Get involved</a>
      </li>
      <li class="menu-item">
        <a class="color-blue" href="#">Contact us</a>
      </li>
    </ul>
  </div>
  <!-- Menu end -->
	<div id="content" class="site-content">