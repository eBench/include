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
		<blockquote><?php echo get_post_meta( get_the_ID(), 'subtitle', true ); ?></blockquote>
	</header><!-- .entry-header -->
	<!-- Masthead end -->


		<!-- Content start -->
		  <div class="main-content grid">
		    <div class="row">
		      <div class="col-4 hide-small">
		        <img src="<?php echo get_post_meta( get_the_ID(), 'image_1', true ); ?>" alt="">
		        <img src="<?php echo get_post_meta( get_the_ID(), 'image_2', true ); ?>" alt="">
		        <img src="<?php echo get_post_meta( get_the_ID(), 'image_3', true ); ?>" alt="">
		      </div>

		      <div class="col-8 col-small-12">
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'include' ),
								'after'  => '</div>',
							) );
						?>
		      </div>
		    </div>
		  </div>
		  <!-- Content end -->
			<!-- Quote start -->
		  <div class="fluid bg-light-blue">
		    <div class="quote grid">
		      <img src="<?php echo get_post_meta( get_the_ID(), 'quote_image', true ); ?>" class="image-circle" alt="">
		      <blockquote><?php echo get_post_meta( get_the_ID(), 'quote_text', true ); ?></blockquote>
		      <span class="color-light-gray"><?php echo get_post_meta( get_the_ID(), 'quote_author', true ); ?></span>
		    </div>
		  </div>
		  <!-- Quote end -->

<!-- Boxouts start -->
<div class="boxouts grid gutterless fluid-gutterless">
	<div class="row row-equal">
		<!-- Boxout start -->
 <?php
  $args = array('exclude' => '2', 'number' => '2');
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
		$box .= ' bg-pattern-'. $index .'">';
		$box .=	'<img src="' . get_template_directory_uri() . '/assets/images/placeholder.jpg" class="image-circle" alt="">
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
