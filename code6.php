// Helps testing the email functionality

function testEmail() {
	wp_mail( 'info@fahdmurtaza.com', 'Test software', 'Testing some email at ' . get_bloginfo( 'url' ) );
}

add_action( 'init', 'testEmail' );
