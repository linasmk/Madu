<?php 
	function madu_database() {
		global $wpdb;

		global $madu_db_version;
		$madu_db_version = "1.0";

		$table = $wpdb->prefix . 'reservations';

		$charset_collate = $wpdb->get_charset_collate();

		// SQL statement 
		$sql = "CREATE TABLE $table (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			name varchar(50) NOT NULL,
			date datetime NOT NULL,
			email varchar(50) DEFAULT '' NOT NULL,
			phone varchar(15) NOT NULL,
			message longtext NOT NULL,
			PRIMARY KEY (id)

		) $charset_collate; ";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
	add_action('after_setup_theme', 'madu_database');
?>