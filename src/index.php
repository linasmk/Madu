<?php get_header(); ?>
	
<?php 
	$events_page = get_option('page_for_posts');
	$image = get_post_thumbnail_id($events_page);
	$image = wp_get_attachment_image_src($image, 'full');
?>

<section class="hero_events" style="background-image:url(<?php echo $image[0] ?>);">
	<h2 class="primary_text"><?php echo get_the_title($events_page); ?></h2>
</section>

<div class="event_page__wrapper">
	<main class="main_events">
		<?php while(have_posts()): the_post(); ?>

			<article class="post">
				<?php the_title('<h3>', '</h3>'); ?>
					<div class="event_date">
						<time>
							<span>Event date: <?php the_field('event_date'); ?></span>
						</time>
					</div>
					
				<div class="post_content">
						<?php the_content(); ?>
						<time class="post_date">
							Posted: 
							<?php echo the_time('d'); ?>
							<?php echo the_time('M'); ?>
							<?php echo the_time('Y'); ?>	
						</time>
				</div>
			</article>
				
		<?php endwhile; ?>
		<div class="pagination_box">
			<?php $args = array(
					'prev_text'          => __('«'),
					'next_text'          => __('»')
			); ?>
			<?php echo paginate_links($args); ?>
		</div>
	</main>
		<?php get_sidebar(); ?>
</div>	


	


	

<?php get_footer(); ?>