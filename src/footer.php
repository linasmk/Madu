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
			<a href="tel:<?php echo esc_html(get_option('madu_phonenumber')); ?>"><span class="fa_icons"><?php echo esc_html(get_option('madu_phonenumber')); ?></span></a>
	
			<span class="fa_icons"><?php echo esc_html(get_option('madu_address')); ?></span>
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
		<div class="arrow_container">
			<div class="footer_arrow">
				<img src="<?php echo get_template_directory_uri() ?>/img/up_arrow.png" alt="Down arrow">
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>