<?php get_header(); ?>
	
	<?php while(have_posts()): the_post(); ?>
	<!-- get_the_post_thumbnail_url() returns the url without the img tag. This is a way to
	set the image as a background img and not as a HTML tag -->
	<section class="hero">
		<div class="logo_for__hero">
			<a href="<?php echo esc_url( home_url('/') ); ?>">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo_white.png" alt="Logo">
			</a>
		</div>

		<div class="img_box">
			<?php
				$id_split_image = get_field('top_left_image');
				$split_image = wp_get_attachment_image_src($id_split_image, 'split-images');
			?>
			<div class="split_image" style="background-image: url(<?php echo $split_image[0]; ?>)">
				<h2><?php the_field('top_left_image_text'); ?></h2>
				<a href="<?php the_field('top_left_image_button'); ?>">See Menu</a>
			</div>
		</div>
		
		<div class="img_box">
			<?php
				$id_split_image = get_field('bottom_right_image');
				$split_image = wp_get_attachment_image_src($id_split_image, 'split-images');
			?>
			<div class="split_image" style="background-image: url(<?php echo $split_image[0]; ?>)">
				<h2><?php the_field('bottom_right_image_text'); ?></h2>
				<a href="<?php the_field('bottom_right_image_button'); ?>">See Events</a>
			</div>
		</div>
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