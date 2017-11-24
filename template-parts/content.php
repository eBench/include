<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package include
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header masthead-lrg grid">
		<div>
			<?php
				$categories =  get_the_category( $post->ID );
				if ($categories[0]->term_id === 2 ) { ?>
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
				<a class="text-large text-link"
				href="<?php echo get_permalink( 66 ); ?>">
				Back to <?php echo get_the_title( 66 ); ?></a>
				</a>
			<?php } ?>

    </div>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<!-- <div class="entry-meta">
			<?php include_posted_on(); ?>
		</div>--><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content main-content grid">
		<div class="row">
			<div class="col-4 hide-small">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
				<img src="<?php echo get_post_meta( get_the_ID(), 'image_1', true ); ?>" alt="">
				<img src="<?php echo get_post_meta( get_the_ID(), 'image_2', true ); ?>" alt="">
				<img src="<?php echo get_post_meta( get_the_ID(), 'image_3', true ); ?>" alt="">
			</div>

			<div class="col-8 col-small-12">
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'include' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'include' ),
						'after'  => '</div>',
					) );
				?>
			</div>
	</div>

</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
