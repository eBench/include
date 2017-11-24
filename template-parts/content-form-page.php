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
	<header class="entry-header masthead grid ">
		<div>
			<?php if ( $post->post_parent ) { ?>
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
				<a class="text-large text-link"
				href="<?php echo get_permalink( $post->post_parent ); ?>">
				Back to <?php echo get_the_title( $post->post_parent ); ?></a>
				</a>
			<?php } ?>

    </div>
		<?php the_title( '<h1 class="colored-title">', '</h1>' ); ?>
		<blockquote><?php echo get_post_meta( get_the_ID(), 'heading_qoute', true ); ?></blockquote>
	</header><!-- .entry-header -->
	<!-- Masthead end -->
	<!-- Content start -->
	  <div class="main-content grid">
	    <div class="row row-center">

	      <div class="col-12 text-center">
					<?php
						the_content();
					?>
	      </div>
	      <div class="col-6 col-medium-12 col-small-12">
	        <?php
						$shortcode = get_post_meta( get_the_ID(), 'form_shortcode', true );
						echo do_shortcode( $shortcode );
					 ?>
	      </div>
	    </div>
	  </div>
	  <!-- Content end -->






</article><!-- #post-<?php the_ID(); ?> -->
