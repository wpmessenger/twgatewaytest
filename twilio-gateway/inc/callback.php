<?php 

/* 
 * callback class for setting url , catching response from twilio inbound sms and status report
 */

class WPMP_Twilio_Callback {

   private  $callback_url = 'wpmp-callback';
   private  $status_url = 'wpmp-status';
   
   public function __construct() {
      add_action('wp_loaded', array($this,'catch_inbound_sms'));
      add_action('wp_loaded', array($this,'catch_status'));
   }  
   public function twilio_callback_url(){
	   return home_url($this->callback_url);
   }
   public function twilio_status_url(){
	   return home_url($this->status_url);
   }

	
	public function catch_inbound_sms(){
		$url_path = trim(parse_url(add_query_arg(array()), PHP_URL_PATH), '/');
		//check for url or path 
		if ( $url_path === 'wpmp-callback' or $url_path === 'wpmp-callback-2' ) {
			//incoming sms 
			if(isset($_REQUEST['SmsSid']) && $_REQUEST['SmsSid']){
				$chat = new WPMP_Chat();
				$data = $_REQUEST;
				$chat->callback_inbound_sms($data);
			}
			echo '<?xml version="1.0" encoding="UTF-8"?><Response>			<Message>Thanks for getting in touch, I will call you later</Message>		</Response>';
		 
		update_option('wpmp_twillio_call_back_last_ran',date('Y-m-d H:i:s') );
		update_option('wpmp_twillio_call_back_data_'.time(), $_REQUEST);
		exit; 		 
		}		 
	}
	public function catch_status(){
		$url_path = trim(parse_url(add_query_arg(array()), PHP_URL_PATH), '/');
		//check for url or path 
		if ( $url_path === 'wpmp-status' ) {
			//update status 
			if(isset($_REQUEST['SmsSid']) && $_REQUEST['SmsSid']){		
			$chat = new WPMP_Chat();
			$data['sid'] = $_REQUEST['SmsSid'];
			$data['status'] = $_REQUEST['SmsStatus'];
			$chat->callback_update_status($data);
		}
		
		echo '<?xml version="1.0" encoding="UTF-8"?><Response>			<Message>Thanks for getting in touch, I will call you later</Message>		</Response>';
		
		exit; 		 
		}		 
	}
}
new WPMP_Twilio_Callback();

