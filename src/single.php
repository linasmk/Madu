<?php get_header(); ?>
	
	<?php while(have_posts()): the_post(); ?>
	<!-- get_the_post_thumbnail_url() returns the url without the img tag. This is a way to
	set the image as a background img and not as a HTML tag -->
	<section class="hero_events" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>);">
		<h2 class="primary_text">Events</h2>
	</section>
	<div class="event_page__wrapper">
		<main class="main_events__single">
			<h3><?php the_title(); ?></h3>
			
			<div class="single_post">
				<div class="event_date">
						<time>
							<span>Event date: <?php the_field('event_date'); ?></span>
						</time>
				</div>
				<div class="event_content">
					<p><?php the_content(); ?></p>
				</div>
				<time class="post_date">
							Posted: 
							<?php echo the_time('d'); ?>
							<?php echo the_time('M'); ?>
							<?php echo the_time('Y'); ?>	
				</time>
			</div>
		
		</main>
		<?php endwhile; ?>

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>