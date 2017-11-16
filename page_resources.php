<?php
/* Template name: Resources
 *
 * The template for displaying Home Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package include
 */

get_header(); ?>



			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'resources-page' );

			

			endwhile; // End of the loop.
			?>




<?php
get_footer();
