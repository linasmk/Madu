<?php get_header(); ?>
	
	<?php while(have_posts()): the_post(); ?>
	<!-- get_the_post_thumbnail_url() returns the url without the img tag. This is a way to
	set the image as a background img and not as a HTML tag -->
	<section class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>);">
		
	</section>
<div class="main_wrapper">
	<section class="main_content">
		<div class="hero_content">
			<section class="hero_content__text">
				<h2><?php the_title(); ?></h2>
			</section>
		</div>
		<main class="main_content__text">
			<p><?php the_content(); ?></p>
		</main>
	</section>
</div>

	<?php endwhile; ?>

<?php get_footer(); ?>