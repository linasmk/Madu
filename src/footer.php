	<footer>
		<?php 
			$args = array(
				'theme_location'  => 'header-menu',
				'container'       => 'nav',
				'container_class' => 'bottom_nav',
				'after'           => '<span class="separator"> |</span>'
			);
			wp_nav_menu($args);
		?>
		<address class="contact_details">
			<a href="tel:+370-626-69679">+370 626 69679</a>
	
			<span>Vilniaus g. 31 / Islandijos g. 1,
			Vilnius, Lithuania</span>
		</address>

		<section class="social_menu">
			<?php
				$args = array(
					'theme_location'  => 'social-menu',
					'container'       => 'nav',
					'container_class' => 'social_menu__items',
					'container_id'    => 'socials',
					'link_before'     => '<span class="sr_text">',
					'link_after'      => '</span>'
				);
			wp_nav_menu($args);
			?>
		</section>
		<section class="copyright">
			<p>&copy; All rights reserved <?php echo date('Y'); ?></p>
		</section>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>