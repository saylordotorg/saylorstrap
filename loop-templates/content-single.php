<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class('card-body loop-content-single'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header card-title">

	<?php
		if (!empty(get_the_post_thumbnail( $post->ID, 'post-thumbnail' ))) {
			echo '<div class="card card-img-top mb-3 test">';
			echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );	
			echo '</div>';
		}
	 ?>

		<div class="entry-meta card-subtitle mb-3">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
