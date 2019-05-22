<?php 
	function madu_options() {
		add_menu_page('Madu', 'Madu options', 'administrator', 'madu_options', 'madu_adjustments', ''/* icon could be passed here */ , 20 );

		add_submenu_page('madu_options', 'Reservations', 'Reservations', 'administrator', 'madu_reservations', 'madu_reservations');
	}
	add_action('admin_menu', 'madu_options');

	function madu_adjustments() {
		echo "Hello from Madu adjustments";
	}

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
							</tr>
						<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	<?php }

?>