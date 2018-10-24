<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();


?>


<section class="contenido__internas blog-home">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="blog__item blog__item--left">
					<h1>Saylor Academy Blog</h1>
					<div class="title_blog-home">
						<h3>Don´t miss a post: </h3>
						<div class="blog-home--item">
							<a href="<?php bloginfo('rss2_url'); ?>"><i class="fas fa-rss"></i>Subscribe via RSS</a>
							<a href="#"><i class="fas fa-comments"></i>Join the conversation</a>
							<a href="#"><i class="fas fa-envelope"></i>Get posts & update by email</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="blog-home-item">
							<div class="row">
								<div class="col-lg-3">
									<?php if ( has_post_thumbnail() ) : ?>
									    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									        <?php the_post_thumbnail('large'); ?>
									    </a>
									<?php endif; ?>
								</div>
								<div class="col-lg-9">
									<h3 class="post__title">
										<?php the_title(); ?>
									</h3>
									<ul>
										<li><i class="fas fa-calendar-alt"></i> on<strong><?php the_date(); ?></strong></li>
									</ul>
									<p><?php  echo get_excerpt(210, get_the_ID()); ?></p>
								</div>
							</div>
						</div>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>


			
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
