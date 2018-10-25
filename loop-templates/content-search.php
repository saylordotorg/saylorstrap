<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class('card my-3 loop-content-search'); ?> id="post-<?php the_ID(); ?>">
	<div class="card-body">
		<header class="entry-header card-title">

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>

				<div class="entry-meta card-subtitle my-2">

					<?php understrap_posted_on(); ?>

				</div><!-- .entry-meta -->

			<?php endif; ?>

		</header><!-- .entry-header -->

		<div class="entry-summary">

			<?php the_excerpt(); ?>

		</div><!-- .entry-summary -->

		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer><!-- .entry-footer -->
	</div>

</article><!-- #post-## -->
