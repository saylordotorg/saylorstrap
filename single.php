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
?>

<!-- Title bar -->
<section class="title__bar blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h3><a href="#">SAYLOR ACADEMY | FREE AND OPEN ONLINE COURSES FOR PEOPLE EVERYWHERE / ANNOUNCEMENTS /  <span>ALMOST 100 CREDITS – TUITION-FREE!</span></a></h3>
			</div>	
		</div>
	</div>
</section>

<section class="contenido__internas blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 d-none d-md-block">
				<div class="blog__item blog__item--left">
					<a href="<?php bloginfo('rss2_url'); ?>" target="_blank"><i class="fas fa-rss"></i>Subscribe via RSS</a>
					<a href="#"><i class="fas fa-comments"></i>Join the conversation</a>
					<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><i class="fas fa-list-ul"></i>View all posts</a>

					<div class="tweets">
						<a class="twitter-timeline" data-height="600" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-8">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="blog__item blog__item--right">
							<div class="post">
								<h3 class="post__title">
									<?php the_title(); ?>
								</h3>
								<ul>
									<li><i class="fas fa-calendar-alt"></i> on<strong><?php the_date(); ?></strong></li>
									<li>By<a href="#"> <?php the_author(); ?></a></li>
									<li>POSTED IN<a href="#"><?php the_category( '|' ); ?></a></li>
								</ul>
								<?php if ( has_post_thumbnail() ) : ?>
								    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								        <?php the_post_thumbnail('large'); ?>
								    </a>
								<?php endif; ?>

								<ul class="share">
									<li><i class="fab fa-facebook-f"></i></li>
									<li><i class="fab fa-twitter"></i></li>
									<li><i class="fas fa-envelope"></i></li>
									<li><i class="fas fa-print"></i></li>
								</ul>

								<?php the_content(); ?>
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
