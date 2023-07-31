<?php 
/** 
 * create save update tables for twilio gateway
 */ 
class TGP_DB {	
	private  $credentials_table = 'wpm_credentials';
	private  $number_table = 'wpm_numbers';
   
	public function __construct() {
      add_action( 'tgp_plugin_activate', array($this,'v8queries') );
     
	}  
	public function get_credentials_table_name(){
		return $this->credentials_table;
	}
	public function get_number_table_name(){
		return $this->number_table;
	}
	public function get_sms_table_name(){
		return $this->sms_table;
	}
	public function v8queries(){
		global $wpdb;
		//$table = $wpdb->prefix.$this->channel_table;
		$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE {$wpdb->prefix}wpm_credentials (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    account_sid varchar(255) NOT NULL,
    auth_token varchar(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE {$wpdb->prefix}wpm_audio_recordings (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    direct_url VARCHAR(255) NOT NULL UNIQUE,
    friendly_name VARCHAR(255) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE {$wpdb->prefix}wpm_numbers (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    number_sid VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(255) NOT NULL,
    friendly_name VARCHAR(255) NOT NULL,
    number_type ENUM('twilio', 'forward') NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE {$wpdb->prefix}wpm_call_settings (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    twilio_number_id INT UNSIGNED NOT NULL,
    forward_number_id INT UNSIGNED NOT NULL,
    audio_recording_id INT UNSIGNED NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    number_type ENUM('twilio', 'forward') NOT NULL,
    number_sid VARCHAR(255) NOT NULL,
    FOREIGN KEY (twilio_number_id) REFERENCES {$wpdb->prefix}wpm_numbers(id),
    FOREIGN KEY (forward_number_id) REFERENCES {$wpdb->prefix}wpm_numbers(id),
    FOREIGN KEY (audio_recording_id) REFERENCES {$wpdb->prefix}wpm_audio_recordings(id)
);

CREATE TABLE {$wpdb->prefix}wpm_deployments (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    call_settings_id INT UNSIGNED,
    twilio_sid VARCHAR(255),
    status VARCHAR(255) DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (call_settings_id) REFERENCES {$wpdb->prefix}wpm_call_settings(id)
);

CREATE TABLE {$wpdb->prefix}wpm_service (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    service_sid VARCHAR(255) NOT NULL UNIQUE,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE {$wpdb->prefix}wpm_functions (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    function_sid VARCHAR(255) NOT NULL UNIQUE,
    service_id INT UNSIGNED NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (service_id) REFERENCES {$wpdb->prefix}wpm_service(id)
);

CREATE TABLE {$wpdb->prefix}wpm_marketing_senders (
    id SERIAL PRIMARY KEY,
    friendly_name VARCHAR(255) NOT NULL,
    number_sid VARCHAR(255) NOT NULL UNIQUE,
    sender_type VARCHAR(255) NOT NULL CHECK (sender_type IN ('Long Code', 'Messenger Service', 'Short Code'))
);

CREATE INDEX service_id_index ON {$wpdb->prefix}wpm_functions (service_id);

CREATE UNIQUE INDEX marketing_senders_number_sid_idx ON {$wpdb->prefix}wpm_marketing_senders (number_sid);

CREATE INDEX deployments_call_settings_id_index ON {$wpdb->prefix}wpm_deployments (call_settings_id);

CREATE INDEX twilio_number_id_index ON {$wpdb->prefix}wpm_call_settings (twilio_number_id);

CREATE INDEX forward_number_id_index ON {$wpdb->prefix}wpm_call_settings (forward_number_id);
";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}
	
	
}//eof class 
new TGP_DB();