<!DOCTYPE html>
<html lang="en">
<head>

	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- iOS compatible -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Madu">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/img/apple-touch-icon.png">

	<!-- Android compatible -->
	<meta name="theme-color" content="rgba(0, 204, 51, .8)">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Madu">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/icon.png" sizes="192x192">
	

	<title>Madu</title>
	
</head>
<body <?php body_class(); ?>>
	<header id="header" class="site_header">
		<div class="menu_toggle">
			<div class="hamburger"></div>
		</div>	
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
					<a href="tel:<?php echo esc_html(get_option('madu_phonenumber')); ?>"><span class="fa_icons"><?php echo esc_html(get_option('madu_phonenumber')); ?></span></a>
		
					<span class="fa_icons"><?php echo esc_html(get_option('madu_address')); ?></span>
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
	
	
