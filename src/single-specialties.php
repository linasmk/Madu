<?php get_header(); ?>


<?php while(have_posts()): the_post(); ?>
	<!-- get_the_post_thumbnail_url() returns the url without the img tag. This is a way to
	set the image as a background img and not as a HTML tag -->
	<section class="hero hero_single__menu" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>);">
		<h2><?php the_title(); ?></h2>
	</section>
	<div class="main_wrapper">
		<section class="specialty_single__content">
			<p class="specialty_single__price"><span>Price: </span><span><?php the_field('price'); ?></span></p>
			<p><?php the_content(); ?></p>
		</section>
	</div>

	<?php endwhile; ?>


<?php get_footer(); ?>