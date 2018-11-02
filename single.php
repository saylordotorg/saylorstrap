<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<!-- Yoast Breadcrumb -->
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
		echo '<div id="breadcrumbs-wrapper" class="container row mx-auto mb-3">';
			echo '<div class="card card-body">';
				echo '<div class="h1 card-title">' . get_the_title() . '</div>';
				echo '<div class="">';
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				echo '</div>';
			echo '</div>';
		echo '</div>';
	}
	?>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main card" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>
						<div id="post-nav-container" class="card-body">
							<?php understrap_post_nav(); ?>
						</div>

					<div id="post-comments-container" class="card-body">
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
					</div>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
