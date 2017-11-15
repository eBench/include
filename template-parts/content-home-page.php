<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package include
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Masthead start -->

	<header class="entry-header masthead-lrg grid ">
		<?php the_title( '<h1 class="colored-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<!-- Masthead end -->

		<?php /*
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'include' ),
				'after'  => '</div>',
			) );
			*/
		?>


<!-- Boxouts start -->
<div class="boxouts grid gutterless fluid-gutterless">
	<div class="row row-equal">
		<!-- Boxout start -->
 <?php
 $args = array(
	 'meta_key' => 'show_in_menu',
	 'meta_value' => 'true',
	 'child_of' => '2',
	 );
  $pages = get_pages($args);
	$index = 0;
  foreach ( $pages as $page ) {
		$index++;
    $box = '<div class="col"><div class="boxout';
		$box .= ' bg-';
		if (($index % 5 ) === 1 ) {
			$box .='purple';
		} else if (($index % 5 ) === 2 ) {
			$box .='blue';
		} else if (($index % 5 ) === 3 ) {
			$box .='green';
		} else if (($index % 5 ) === 4 ) {
			$box .='sunflower';
		} else if (($index % 5 ) === 0 ) {
			$box .='amber';
		};
		$box .= '">';
		$box .=	'<img src="' . get_the_post_thumbnail_url($page->ID, 'full') . '" class="image-circle" alt="">
						<h3> <a href="' . get_page_link( $page->ID ) . '">';
		if (empty(get_post_meta( $page->ID, 'menu-title', true ))) {
			$box .= $page->post_title;
		} else {
			$box .= get_post_meta( $page->ID, 'menu-title', true );
		}
		$box .= '</a></h3><a href="' . get_page_link( $page->ID ) . '"><p>';
		$box .= $page->post_subtitle;
		$box .= get_post_meta( $page->ID, 'subtitle', true );

		$box .='</a></p></div></div>';
    echo $box;
  }
 ?>
	</div>
</div>
<!-- Boxouts end -->


</article><!-- #post-<?php the_ID(); ?> -->
