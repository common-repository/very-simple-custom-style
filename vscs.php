<?php
/*
 * Plugin Name: Very Simple Custom Style
 * Description: This is a very simple plugin to add Custom CSS to change your theme or plugin layout. For more info please check readme file.
 * Version: 2.8
 * Author: Guido
 * Author URI: https://www.guido.site
 * License: GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: very-simple-custom-style
 * Domain Path: /translation
 */

// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// load plugin text domain
function vscs_init() { 
	load_plugin_textdomain( 'very-simple-custom-style', false, dirname( plugin_basename( __FILE__ ) ) . '/translation' );
}
add_action('plugins_loaded', 'vscs_init');

// add settings link
function vscs_action_links ( $links ) { 
	$settingslink = array( '<a href="'. admin_url( 'options-general.php?page=vscs' ) .'">'. __('Settings', 'very-simple-custom-style') .'</a>', ); 
	return array_merge( $links, $settingslink ); 
} 
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'vscs_action_links' ); 

// add admin options page
function vscs_menu_page() {
	add_options_page( __( 'Custom Style', 'very-simple-custom-style' ), __( 'Custom Style', 'very-simple-custom-style' ), 'manage_options', 'vscs', 'vscs_options_page' );
}
add_action( 'admin_menu', 'vscs_menu_page' );

// add admin settings and such 
function vscs_admin_init() {
	add_settings_section( 'vscs-section', __( 'Custom Style', 'very-simple-custom-style' ), 'vscs_section_callback', 'vscs' );
	add_settings_field( 'vscs-field', __( 'Custom Style', 'very-simple-custom-style' ), 'vscs_field_callback', 'vscs', 'vscs-section' );
	register_setting( 'vscs-options', 'vscs-setting', 'strip_tags' );
}
add_action( 'admin_init', 'vscs_admin_init' );

function vscs_section_callback() {
	echo __( 'On this page you can add Custom CSS to change your theme or plugin layout.', 'very-simple-custom-style' ); 
}

function vscs_field_callback() {
	$vscs_setting = esc_textarea( get_option( 'vscs-setting' ) );
	$vscs_count = strlen(get_option( 'vscs-setting' ) );
	echo "<textarea name='vscs-setting' rows='15' cols='60' maxlength='2500'>$vscs_setting</textarea>";
	?>
	<p><?php printf( esc_attr__( 'You have used %s of 2500 characters.', 'very-simple-custom-style' ), $vscs_count ); ?></p>
	<?php
}

// display admin options page
function vscs_options_page() {
?>
<div class="wrap"> 
	<div id="icon-plugins" class="icon32"></div> 
	<h1><?php _e( 'Very Simple Custom Style', 'very-simple-custom-style' ); ?></h1> 
	<form action="options.php" method="POST">
	<?php settings_fields( 'vscs-options' ); ?>
	<?php do_settings_sections( 'vscs' ); ?>
	<?php submit_button(); ?>
	</form>
	<p><?php _e( 'If you want to change the layout of your theme or plugin you should look for the element you want to change.', 'very-simple-custom-style' ); ?></p>
	<p><?php _e( 'So first you should inspect your theme or plugin.', 'very-simple-custom-style' ); ?></p>
</div>
<?php
}

// include custom CSS in header 
function vscs_custom_css() {
	$vscs_css = esc_textarea( get_option( 'vscs-setting' ) );
	if (!empty( $vscs_css )) {
		echo '<style type="text/css">' . "\n"; 
		echo $vscs_css . "\n";
		echo '</style>' . "\n"; 
	}
}
add_action( 'wp_head', 'vscs_custom_css' );
