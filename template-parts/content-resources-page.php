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
					<?php if( have_rows('resources') ):
									while ( have_rows('resources') ) : the_row();
										$source_title = get_sub_field('source_title');
										$source_description = get_sub_field('source_description');
										$source_image = get_sub_field('source_image');
										$source_alt_text = get_sub_field('source_alt_text');
										$source_file = get_sub_field('source_file');
										$external_source_url = get_sub_field('external_source_url');
									?>
									<div class="col-3 col-small-6">
										<?php
											if(get_sub_field('source_file')) {
											?>
								   			<a href="<?php echo $source_file; ?>">
										<?php
											}
										?>
										<?php
											if(get_sub_field('external_source_url')) {
											?>
								   			<a href="<?php echo $external_source_url; ?>">
										<?php
											}
										?>
									<img src="<?php echo $source_image; ?>" alt="<?php echo $source_alt_text; ?>">
									</a><span>
										<?php
											if(get_sub_field('source_file')) {
											?>
												<a href="<?php echo $source_file; ?>">
										<?php
											}
										?>
										<?php
											if(get_sub_field('external_source_url')) {
											?>
												<a href="<?php echo $external_source_url; ?>">
										<?php
											}
										?>
										<?php echo $source_title; ?></a><br>
									<?php echo $source_description; ?>
								</span>
							</div>
										<?php
										endwhile;
									else :	endif;
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
