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