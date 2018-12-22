// Adds an options page with all options for wordpress in one page

function add_all_settings_menu() {
	add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}

add_action( 'admin_menu', 'add_all_settings_menu' );