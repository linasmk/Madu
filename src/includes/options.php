<?php 
	function madu_options() {
		add_menu_page('Madu', 'Madu options', 'administrator', 'madu_options', 'madu_adjustments', ''/* icon could be passed here */ , 20 );

		add_submenu_page('madu_options', 'Reservations', 'Reservations', 'administrator', 'madu_reservations', 'madu_reservations');
	}
	add_action('admin_menu', 'madu_options');

	
	function madu_settings() {

		// Google Maps settings
		register_setting('madu_options_gmaps', 'madu_gmap_latitude');
		register_setting('madu_options_gmaps', 'madu_gmap_longitude');
		register_setting('madu_options_gmaps', 'madu_gmap_zoom');
		register_setting('madu_options_gmaps', 'madu_gmap_apikey');


		// Contact Details settings
		register_setting('madu_options_contacts', 'madu_address');
		register_setting('madu_options_contacts', 'madu_phonenumber');
	}
	add_action('init', 'madu_settings');

	function madu_adjustments() { ?>
		<div class="wrap">
			<h1>Madu Adjustments</h1>
			<form action="options.php" method="post">
				<?php
					settings_fields('madu_options_gmaps');
					do_settings_sections('madu_options_gmaps');
				?>
			<h2>Google Maps</h2>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">Latitude: </th>
					<td>
						<input type="text" name="madu_gmap_latitude" value="<?php echo esc_attr( get_option('madu_gmap_latitude') ); ?>">
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Longitude: </th>
					<td>
						<input type="text" name="madu_gmap_longitude" value="<?php echo esc_attr( get_option('madu_gmap_longitude') ); ?>">
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Zoom Level: </th>
					<td>
						<input type="number" min="12" max="21" name="madu_gmap_zoom" value="<?php echo esc_attr( get_option('madu_gmap_zoom') ); ?>">
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">API Key: </th>
					<td>
						<input type="text" name="madu_gmap_apikey" value="<?php echo esc_attr( get_option('madu_gmap_apikey') ); ?>">
					</td>
				</tr>
			</table>

			<?php
				settings_fields('madu_options_contacts');
				do_settings_sections('madu_options_contacts');
			?>
			<h2>Contact Details</h2>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">Address: </th>
					<td>
						<input type="text" name="madu_address" value="<?php echo esc_attr( get_option('madu_address') ); ?>">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Phone Number: </th>
					<td>
						<input type="tel" name="madu_phonenumber" value="<?php echo esc_attr( get_option('madu_phonenumber') ); ?>">
					</td>
				</tr>
			</table>

			<?php submit_button(); ?>
			</form>
		</div>
	<?php }

	function madu_reservations() { ?>
		<div class="wrap">
			<h1>Reservations</h1>
			<table class="wp-list-table widefat striped">
				<thead>
					<tr>
						<th class="manage-column">ID</th>
						<th class="manage-column">Name</th>
						<th class="manage-column">Dat of Reservation</th>
						<th class="manage-column">Email</th>
						<th class="manage-column">Phone Number</th>
						<th class="manage-column">Message</th>
						<th class="manage-column">Delete</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						global $wpdb;
						$table = $wpdb->prefix . 'reservations';
						$reservations = $wpdb->get_results("SELECT * FROM $table", ARRAY_A);

						foreach($reservations as $reservation): ?>
							<tr>
								<td><?php echo $reservation['id'] ?></td>
								<td><?php echo $reservation['name'] ?></td>
								<td><?php echo $reservation['date'] ?></td>
								<td><?php echo $reservation['email'] ?></td>
								<td><?php echo $reservation['phone'] ?></td>
								<td><?php echo $reservation['message'] ?></td>
								<td>
									<a href="#" class="remove_reservation" data-reservation="<?php echo $reservation['id'] ?>">Remove</a>
								</td>
							</tr>
						<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	<?php }

?>