<?php
/**
 * Static hero sidebar setup.
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php if ( is_active_sidebar( 'top-container' ) ) : ?>

	<div class="container" id="top-container">

		<div class="card">

			<?php dynamic_sidebar( 'top-container' ); ?>

		</div>

	</div>

<?php endif; ?>
