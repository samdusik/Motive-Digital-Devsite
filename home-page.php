<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 * Template Name: Home Page
 */

get_header(); ?>

	<section id="home" class="container">
		<div class="row">
			<div class="col-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- <h1><?php the_title(); ?></h1> -->
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</section><!-- container -->

<?php get_footer(); ?>
