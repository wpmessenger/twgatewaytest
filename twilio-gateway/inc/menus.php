<?php
//load scripts and css admin side
add_action('admin_enqueue_scripts', 'tgp_scripts_styles');
function tgp_scripts_styles()
{
	wp_register_style('TGP_style', TGP_URL . 'css/style.css', '', '0.0.3');
	wp_register_style('tailwind_css', TGP_URL . 'dist/output.css', '', '0.0.3');
	wp_register_script('TGP_jQuery', TGP_URL . 'src/cdns/jquery.js', '', '0.0.1');
	wp_register_script('dataTable_cdn', TGP_URL . 'src/cdns/datatable.js', '', '0.0.1');
	wp_register_script('dataTable_js', TGP_URL . 'src/datatable.js', '', '0.0.1');
}

//add menu 
add_action('admin_menu', 'tgp_menu');
function tgp_menu()
{
	add_menu_page('Twilio Gateway', 'Twilio Gateway', 'manage_options', 'tgp_settings', 'tgp_management_page', 'dashicons-id-alt', 52);
	add_submenu_page('tgp_settings', 'Twilio Settings', 'Twilio Settings', 'manage_options', 'tgp_settings', 'tgp_management_page');
	add_submenu_page('tgp_settings', 'SMS', 'SMS', 'manage_options', 'tgp_sms', 'tgp_sms_page');
	//add_submenu_page('tgp_settings', 'Web Dialer', 'Web Dialer', 'manage_options', 'tgp_web_dialer', 'tgp_web_dialer_page');
	//add_submenu_page('tgp_settings', 'Chat Way', 'Chat Way', 'manage_options', 'tgp_web_chat', 'tgp_web_chat_page');
}
//settng page 
function tgp_management_page()
{
?>
	<div class="wrap">
		<h2 class="text-center"><?php _e('Settings', 'tgp'); ?> </h2>

		<?php
		wp_enqueue_style('TGP_style');
		wp_enqueue_style('tailwind_css');
		wp_enqueue_script('TGP_jQuery');
		wp_enqueue_script('dataTable_cdn');
		wp_enqueue_script('dataTable_js');
		include_once(TGP_DIR . 'inc/settings.php');
		?>
		
	</div>
<?php
}
// test sms page 
function tgp_sms_page()
{
?>
	<div class="wrap">
		<h2 class="text-center"><?php _e('Test SMS', 'tgp'); ?> </h2>

		<?php
		wp_enqueue_style('TGP_style');
		wp_enqueue_style('tailwind_css');
		wp_enqueue_script('TGP_jQuery');
		wp_enqueue_script('dataTable_cdn');
		wp_enqueue_script('dataTable_js');
		include_once(TGP_DIR . 'inc/sms.php');
		?>
		
	</div>
<?php
}

function tgp_web_dialer_page()
{

	wp_enqueue_style('TGP_style');
	wp_enqueue_style('tailwind_css');
	wp_enqueue_script('TGP_jQuery');
	include_once(TGP_DIR . 'views/webdialer.php');
	 
}

function tgp_web_chat_page()
{
 
	wp_enqueue_style('TGP_style');
	wp_enqueue_style('tailwind_css');
	wp_enqueue_script('TGP_jQuery');
	include_once(TGP_DIR . 'views/webChat.php');
	 
}
// add action
add_action('init', 'post_data_queries');
function post_data_queries()
{
 
	include_once(TGP_DIR . 'inc/db_quereis.php');
	 
}

add_action('wp_ajax_queries_handler', '_ajax_queries_handler');
function _ajax_queries_handler() {
    // Call the my_custom_post_type function
    echo post_data_queries();

    // Make sure to stop further processing
    wp_die();
}