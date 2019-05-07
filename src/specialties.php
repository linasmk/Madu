<?php
/*
* Template Name: specialties
*/
?>
<?php get_header(); ?>
	
	<!-- get_the_post_thumbnail_url() returns the url without the img tag. This is a way to
	set the image as a background img and not as a HTML tag -->
	<section class="hero_menu" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>);">
		<h2 class="primary_text">Our Menu</h2>	
	</section>
	
<div class="menu_wrapper">

	<h3><?php the_field('menu_category_1'); ?></h3>
	<article class="specialties">
		<div class="grid_container">

			<?php
				$args = array(
					'post_type'      => 'specialties',
					'posts_per_page' => 3,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'category_name'  => 'Hot Dishes'
				);

				$meals = new WP_Query($args);
				while($meals -> have_posts() ): $meals -> the_post(); ?>

				<div class="grid_column">
					<h4><?php the_title(); ?></h4>
					<div class="specialty_img" style="
					background-image:
					url(<?php echo get_the_post_thumbnail_url() ?>),
					linear-gradient(15deg, 
	            	rgba(0, 102, 26, .97),
	            	rgba(0, 204, 51, .8),
	            	rgba(0, 102, 26, .97));
					"></div>
					<!-- <?php the_post_thumbnail('specialties'); ?>	 -->
					<p class="specialty_price"><span>Price: </span><span><?php the_field('price'); ?></span></p>
					<?php the_content(); ?>
				</div>

			<?php
			    endwhile; 
			    wp_reset_postdata();
			?>
		</div>
	</article>

	<h3><?php the_field('menu_category_2'); ?></h3>
	<article class="specialties">
		<div class="grid_container">

			<?php
				$args = array(
					'post_type'      => 'specialties',
					'posts_per_page' => 3,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'category_name'  => 'Burgers'
				);

				$meals = new WP_Query($args);
				while($meals -> have_posts() ): $meals -> the_post(); ?>

				<div class="grid_column">
					<h4><?php the_title(); ?></h4>
					<div class="specialty_img" style="
					background-image:
					url(<?php echo get_the_post_thumbnail_url() ?>),
					linear-gradient(15deg, 
	            	rgba(0, 102, 26, .97),
	            	rgba(0, 204, 51, .8),
	            	rgba(0, 102, 26, .97));
					"></div>
					<!-- <?php the_post_thumbnail('specialties'); ?>	 -->
					<p class="specialty_price"><span>Price: </span><span><?php the_field('price'); ?></span></p>
					<?php the_content(); ?>
				</div>

			<?php
			    endwhile; 
			    wp_reset_postdata();
			?>
		</div>
	</article>

	<h3><?php the_field('menu_category_3'); ?></h3>
	<article class="specialties">
		<div class="grid_container">

			<?php
				$args = array(
					'post_type'      => 'specialties',
					'posts_per_page' => 3,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'category_name'  => 'Salad'
				);

				$meals = new WP_Query($args);
				while($meals -> have_posts() ): $meals -> the_post(); ?>

				<div class="grid_column">
					<h4><?php the_title(); ?></h4>
					<div class="specialty_img" style="
					background-image:
					url(<?php echo get_the_post_thumbnail_url() ?>),
					linear-gradient(15deg, 
	            	rgba(0, 102, 26, .97),
	            	rgba(0, 204, 51, .8),
	            	rgba(0, 102, 26, .97));
					"></div>
					<!-- <?php the_post_thumbnail('specialties'); ?>	 -->
					<p class="specialty_price"><span>Price: </span><span><?php the_field('price'); ?></span></p>
					<?php the_content(); ?>
				</div>

			<?php
			    endwhile; 
			    wp_reset_postdata();
			?>
		</div>
	</article>

	<h3><?php the_field('menu_category_4'); ?></h3>
	<article class="specialties">
		<div class="grid_container">
			

			<?php
				$args = array(
					'post_type'      => 'specialties',
					'posts_per_page' => 3,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'category_name'  => 'pizzas'
				);

				$meals = new WP_Query($args);
				while($meals -> have_posts() ): $meals -> the_post(); ?>

				<div class="grid_column">
					<h4><?php the_title(); ?></h4>
					<div class="specialty_img" style="
					background-image:
					url(<?php echo get_the_post_thumbnail_url() ?>),
					linear-gradient(15deg, 
	            	rgba(0, 102, 26, .97),
	            	rgba(0, 204, 51, .8),
	            	rgba(0, 102, 26, .97));
					"></div>
					<!-- <?php the_post_thumbnail('specialties'); ?> -->
					<p class="specialty_price"><span>Price: </span><span><?php the_field('price'); ?></span></p>
					<?php the_content(); ?>
				</div>

			<?php
			    endwhile; 
			    wp_reset_postdata();
			?>
		</div>
	</article>

	<h3><?php the_field('menu_category_5'); ?></h3>
	<article class="specialties">
		<div class="grid_container">
			

			<?php
				$args = array(
					'post_type'      => 'specialties',
					'posts_per_page' => 3,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'category_name'  => 'Soups'
				);

				$meals = new WP_Query($args);
				while($meals -> have_posts() ): $meals -> the_post(); ?>

				<div class="grid_column">
					<h4><?php the_title(); ?></h4>
					<div class="specialty_img" style="
					background-image:
					url(<?php echo get_the_post_thumbnail_url() ?>),
					linear-gradient(15deg, 
	            	rgba(0, 102, 26, .97),
	            	rgba(0, 204, 51, .8),
	            	rgba(0, 102, 26, .97));
					"></div>
					<!-- <?php the_post_thumbnail('specialties'); ?> -->
					<p class="specialty_price"><span>Price: </span><span><?php the_field('price'); ?></span></p>
					<?php the_content(); ?>
				</div>

			<?php
			    endwhile; 
			    wp_reset_postdata();
			?>
		</div>
	</article>

</div><!-- End of menu_wrapper -->

<?php get_footer(); ?>