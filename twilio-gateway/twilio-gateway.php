<?php
/*
  Plugin Name: Twilio Gateway
  Version: 0.9.1
  Plugin URI: https://ajaysharma3085006.wordpress.com/hire-me/
  Author: ajayitprof
  Author URI: https://www.upwork.com/freelancers/~0185792421fee734e7
  Description: Twilio Gateway plugin save setting etc 
  text domain: tgptest  
*/

//define plugin root directory 
define( 'TGP_DIR', plugin_dir_path( __FILE__ ) );
define( 'TGP_TEMPLATE_DIR', TGP_DIR.'templates/' );
define( 'TGP_URL', plugins_url( '/', __FILE__  ) );

//load files 
require_once( TGP_DIR . 'inc/loader.php' );

//hook for plugin acitvation 
function tgp_plugin_activate() {
     do_action( 'tgp_plugin_activate' );
}
register_activation_hook( __FILE__, 'tgp_plugin_activate' );