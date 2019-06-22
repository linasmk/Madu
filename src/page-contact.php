<?php
/*
* Template Name: Contact
*/
?>

<?php get_header(); ?>
	
	<?php while(have_posts()): the_post(); ?>
	<!-- get_the_post_thumbnail_url() returns the url without the img tag. This is a way to
	set the image as a background img and not as a HTML tag -->
	<section id="hero" class="hero hero_contacts" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>);">
		<h2 class="primary_text"><?php the_title(); ?></h2>
	</section>
	<main class="contact_wrapper">
		<?php get_template_part('templates/reservation', 'form'); ?>
		<?php get_template_part('templates/google', 'maps' ); ?>
	</main>

	<?php endwhile; ?>

<?php get_footer(); ?>