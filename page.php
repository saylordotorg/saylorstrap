<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<!-- Title bar -->
<section class="title__bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
					<h1><?php the_title(); ?></h1>
				</div>	
		</div>
	</div>
</section>

<section class="contenido__internas">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>


			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
