<?php get_header(); ?>
	
	<?php while(have_posts()): the_post(); ?>
		<section id="hero" class="hero">
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
			<div class="hero_arrow">
				<img src="<?php echo get_template_directory_uri() ?>/img/down_arrow.png" alt="Down arrow">
			</div>
		</section>

		<main class="main_wrapper">

			<section class="main_content">
					<h2 id="about">About</h2>
					<p><?php the_content(); ?></p>
			</section>
	<?php endwhile; ?>

			<section class="main_specialties">
				<h2>Our Specialties</h2>
					<div class="specialty_wrapper">
					<?php 
						$args = array(
							'posts_per_page'   => 3,
							'post_type'        => 'specialties',
							'category_name'    => 'Hot Dishes, Burgers, Desserts, pizzas, soups',
							'orderby'          => 'rand'
						);

						$specialties = new WP_Query($args);
						while( $specialties->have_posts() ): $specialties->the_post(); ?>
						
							<div class="specialty_content">
								<?php the_post_thumbnail('specialty_item'); ?>
								<div class="specialty_info">
									<?php the_title('<h3>', '</h3>'); ?>
									<p class="price"><?php the_field('price'); ?></p>
									<?php the_content(); ?>
								</div>
							</div>
						
					

					<?php endwhile; wp_reset_postdata();
					?>
				</div>
			</section>	
		</main>
		<section class="location_reservation">
				<?php get_template_part('templates/reservation', 'form'); ?>
			
				<?php get_template_part('templates/google', 'maps' ); ?>
		</section>
	
<?php get_footer(); ?>