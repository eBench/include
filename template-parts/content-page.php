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

	<header class="entry-header masthead grid">

		<?php
			if (empty(get_post_meta( get_the_ID(), 'different_title', true ))) {
				$title = the_title( '<h1 class="colored-title">', '</h1>' );
			} else {
				$title = '<h1 class="colored-title">' . get_post_meta( get_the_ID(), 'different_title', true ) . '</h1>';
			}
			echo $title;
    ?>

		<blockquote><?php echo get_post_meta( get_the_ID(), 'heading_subtitle', true ); ?></blockquote>
	</header><!-- .entry-header -->
	<!-- Masthead end -->


		<!-- Content start -->
		  <div class="main-content grid">
		    <div class="row">
		      <div class="col-4 hide-small">
		        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
						<?php if( have_rows('images') ):
										while ( have_rows('images') ) : the_row();
											$image_url = get_sub_field('image');
											$alt_text = get_sub_field('alt_text');
										?>
											<img src="<?php echo $image_url; ?>" alt="<?php echo $alt_text; ?>">
						<?php endwhile;
									else :	endif;?>
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
				<!--Stats start-->
				<?php
					if (!empty (get_post_meta( get_the_ID(), 'stat_happy', true ))) {
					?>
					<div class="row">
			      <div class="col-3 col-small-6">
			        <div class="stat">
			          <span class="display color-purple"><?php echo get_post_meta( get_the_ID(), 'stat_happy', true ) ?></span>
			          <small>of Choir members who responded said the choir made them happy</small>
			        </div>
			      </div>

			      <div class="col-3 col-small-6">
			        <div class="stat">
			          <span class="display color-blue"><?php echo get_post_meta( get_the_ID(), 'stat_confident', true ) ?></span>
			          <small>said it helped them feel confident</small>
			        </div>
			      </div>

			      <div class="col-3 col-small-6">
			        <div class="stat">
			          <span class="display color-green"><?php echo get_post_meta( get_the_ID(), 'stat_makaton', true ) ?></span>
			          <small>of sighted singers said it helped their Makaton signing</small>
			        </div>
			      </div>

			      <div class="col-3 col-small-6">
			        <div class="stat">
			          <span class="display color-sunflower"><?php echo get_post_meta( get_the_ID(), 'stat_speak', true ) ?></span>
			          <small>said the Include Choir helped them speak up for themselves</small>
			        </div>
			      </div>
			    </div>
				<?php
					}
				?>

		    <!--Stats end-->

		    <!--Centered link start-->

				<?php
					if(get_field('annual_report')) {
					?>
		    <div class="row">
		      <div class="col text-center">
		        <i class="fa fa-file-pdf-o"></i><a class="text-large text-link"
							 href="<?php the_field('annual_report'); ?>">Download our Annual Report</a>
		      </div>
		    </div>
				<?php
					}
				?>
		    <!--Centered link end-->
		  </div>
		  <!-- Content end -->



			<!-- Quote start -->
			<?php
				if (get_field('quote_text')) {
				?>
		  <div class="fluid bg-light-blue">
		    <div class="quote grid">
		      <img src="<?php echo the_field('quote_image'); ?>" class="image-circle" alt="">
		      <blockquote><?php echo the_field('quote_text'); ?></blockquote>
		      <span class="color-light-gray"><?php echo the_field('quote_author'); ?></span>
		    </div>
		  </div>
			<?php
				}
			?>


		</div>



		  <!-- Quote end -->
			<!-- Members quotes start -->

				<?php if( have_rows('quotes') ): ?>
					<div class="fluid bg-light-blue">
						<div class="quote grid">

							<h3>What our members say...</h3>
							<?php	while ( have_rows('quotes') ) : the_row();
									$quote_text = get_sub_field('quote_text');
									$member_name = get_sub_field('member_name');
								?>
								<blockquote><?php echo $quote_text; ?></blockquote>
								<span class="color-light-gray"><?php echo $member_name; ?></span>

									<?php
								endwhile; ?>
							</div>
						</div>
					<?php else :	endif; ?>


			<!-- Members quotes end -->


			<!-- Boxouts start -->
			<div class="boxouts grid gutterless fluid-gutterless">
				<div class="row row-equal">
					<!-- Boxout start -->
			 <?php
			 $current_id = get_the_ID();
			 $args = array(
				 'child_of' =>  $current_id,
				 'sort_order' => 'asc',
				 'sort_column' => 'menu_order'
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
					$box .=	'<img src="' . get_the_post_thumbnail_url($page->ID, 'thumbnail') . '" class="image-circle" alt="">
									<h3> <a href="' . get_page_link( $page->ID ) . '">';
					$box .= $page->post_title;
					$box .= '</a></h3><a href="' . get_page_link( $page->ID ) . '"><p>';
					$box .= get_post_meta( $page->ID, 'excerpt', true );
					$box .='</a></p></div></div>';
			    echo $box;
			  }
			 ?>
				</div>
			</div>
			<!-- Boxouts end -->


</article><!-- #post-<?php the_ID(); ?> -->
