<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Madu</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="site_header">
		<div class="menu_toggle"><div class="hamburger"></div></div>	
		<article class="header_container">
			<div class="header_logo__large">
					<a href="<?php echo esc_url( home_url('/') ); ?>">
						<img src="<?php echo get_template_directory_uri() ?>/img/logo_text.png" alt="Logo">
					</a>
			</div>

			<div id="nav" class="header_menu">
				
				<div class="header_logo__small">
					<a href="<?php echo esc_url( home_url('/') ); ?>">
						<img src="<?php echo get_template_directory_uri() ?>/img/logo_text.png" alt="Logo">
					</a>
				</div>
			
				<div class="navigation_container">
					<?php 
						$args = array(
							'theme_location'  => 'header-menu',
							'container'       => 'nav',
							'container_class' => 'top_nav',
							'link_before'     => '<span class="fa_icons">',
							'link_after'      => '</span>'
						);
						wp_nav_menu($args);
					?>
				</div>

				<address class="contact_details__header">
					<a href="tel:+370-626-69679"><span class="fa_icons">+370 626 69679</span></a>
		
					<span class="fa_icons">Vilniaus g. 31 / Islandijos g. 1,
					Vilnius, Lithuania</span>
				</address>

				<div class="social_menu__header">
					<div class="social_menu__items">
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
					</div>
				</div>
		
			</div><!-- End of header menu -->
		</article>
	</header>
	
	
