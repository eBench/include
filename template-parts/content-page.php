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

	<header class="entry-header masthead-lrg grid">

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
					if (!empty (get_post_meta( get_the_ID(), 'annual_report', true ))) {
					?>
		    <div class="row">
		      <div class="col text-center">
		        <i class="fa fa-file-pdf-o"></i><a class="text-large text-link"
							 href="<?php echo get_post_meta( get_the_ID(), 'annual_report', true ) ?>">Download our Annual Report</a>
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
				if (!empty (get_post_meta( get_the_ID(), 'quote_text', true ))) {
				?>
		  <div class="fluid bg-light-blue">
		    <div class="quote grid">
		      <img src="<?php echo get_post_meta( get_the_ID(), 'quote_image', true ); ?>" class="image-circle" alt="">
		      <blockquote><?php echo get_post_meta( get_the_ID(), 'quote_text', true ); ?></blockquote>
		      <span class="color-light-gray"><?php echo get_post_meta( get_the_ID(), 'quote_author', true ); ?></span>
		    </div>
		  </div>
			<?php
				}
			?>
		  <!-- Quote end -->
			<!-- Members quotes start -->
			<?php
				if (!empty (get_post_meta( get_the_ID(), 'member_quote_1_text', true ))) {
				?>
			<div class="fluid bg-light-blue">
				<div class="quote grid">
					<h3>What our members say...</h3>
					<blockquote><?php echo get_post_meta( get_the_ID(), 'member_quote_1_text', true ); ?></blockquote>
					<span class="color-light-gray"><?php echo get_post_meta( get_the_ID(), 'member_quote_1_name', true ); ?></span>
					<blockquote><?php echo get_post_meta( get_the_ID(), 'member_quote_2_text', true ); ?></blockquote>
					<span class="color-light-gray"><?php echo get_post_meta( get_the_ID(), 'member_quote_2_name', true ); ?></span>
					<blockquote><?php echo get_post_meta( get_the_ID(), 'member_quote_3_text', true ); ?></blockquote>
					<span class="color-light-gray"><?php echo get_post_meta( get_the_ID(), 'member_quote_3_name', true ); ?></span>
					<blockquote><?php echo get_post_meta( get_the_ID(), 'member_quote_4_text', true ); ?></blockquote>
					<span class="color-light-gray"><?php echo get_post_meta( get_the_ID(), 'member_quote_4_name', true ); ?></span>
					<blockquote><?php echo get_post_meta( get_the_ID(), 'member_quote_5_text', true ); ?></blockquote>
					<span class="color-light-gray"><?php echo get_post_meta( get_the_ID(), 'member_quote_5_name', true ); ?></span>
				</div>
			</div>
			<?php
				}
			?>
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
