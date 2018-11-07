<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if ( is_active_sidebar( 'top-container' ) ) : ?>

	<div class="mb-3" id="wrapper-top-container">
	
		<?php get_template_part( 'sidebar-templates/sidebar', 'topcontainer' ); ?>

	</div>

<?php endif; ?>
