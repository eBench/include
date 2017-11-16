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




		<div class="main-content grid">
		    <div class="row">
		      <div class="col-12 text-center">
						<?php
							the_content();
						?>
		      </div>
		    </div>

		    <!--Resources start-->

		    <div class="resources row">
					<?php
				  $args = array(
				 	 'category' => '2'
				 	 );
				   $posts = get_posts($args);
				   foreach ( $posts as $post ) {
				    $post_box = '<div class="col-3 col-small-6">';
				 		$post_box .=	 '<a href="' .  esc_url(get_page_link( $post->ID )) . '">';
						$post_box .=	'<img src="' . get_the_post_thumbnail_url($post->ID, 'full') .'" alt="">';
						$post_box .= '</a><span><a href="' .   esc_url(get_page_link( $post->ID )) . '">';
				 		$post_box .= $post->post_title;
				 		$post_box .= '</a><br>';
						$post_box .= get_the_excerpt( $post->ID);
				 		$post_box .='</span></div>';
				    echo $post_box;
				   }
				  ?>
				</div>
		    <!--Resources end-->

		  </div>
		  <!-- Content end -->

		  <!-- CTA start -->
		  <div class="fluid bg-light-purple">
		    <div class="cta grid">
		      <h3>Can't see what you want?</h3>
		      <p>You tell us – we know that the best training is based on what you need, so we’re happy to design bespoke programmes.</p>
		      <a href="<?php echo esc_url( get_page_link( 68 ) ); ?>" class="btn"><i class="fa fa-comment fa-lg"></i>Make an enquiry</a>
		    </div>
		  </div>
		  <!-- CTA end -->


</article><!-- #post-<?php the_ID(); ?> -->
