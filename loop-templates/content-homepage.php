<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class('card mb-3 row loop-content'); ?> id="post-<?php the_ID(); ?>">
	<div class="card-body content-container container d-flex flex-column flex-lg-row align-items-center justify-content-between">
		<?php if (!empty(get_the_post_thumbnail( $post->ID))) {
			echo '<div class="post-thumbnail m-3">';
			echo get_the_post_thumbnail( $post->ID, 'large img-thumbnail' );
			echo '</div>';
		} 
		?>
		<div class="post">
			<header class="entry-header">

				<?php the_title( sprintf( '<h2 class="entry-title card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>' ); ?>

				<?php if ( 'post' == get_post_type() ) : ?>

					<div class="entry-meta card-subtitle my-2">
						<?php understrap_posted_on(); ?>
					</div><!-- .entry-meta -->

				<?php endif; ?>

			</header><!-- .entry-header -->

			<div class="entry-content">

				<?php
				the_excerpt();
				?>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
				?>

			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-## -->
