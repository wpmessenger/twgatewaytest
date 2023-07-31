 <?php 
 // chat class load sms ajax etc 
use Twilio\Rest\Client;
use Twilio\Exceptions\RestException;


	/* echo '<pre>';
	print_r($_POST);
	echo '</pre>'; */
	
	if(isset($_REQUEST['tgp_submit'])){
		$r = array();
		 
		//to do , make this properties 
		$wpmp_phone_from = $_REQUEST['tgp_from'];
		$wpmp_phone_to = $_REQUEST['tgp_to'];
		$wpmp_msg_body = $_REQUEST['tgp_message'];
		$cred = new WPM_Credentials();
		$data = $cred->get_credentials_data();
		$twilio_account_sid = $data['account_sid'];
		$twilio_autho_token = $data['auth_token'];

		//$twilio_phone = $data['twilio_phone'];
		$twilio_phone = $wpmp_phone_from;



	/* echo '<pre>';
	print_r($data);
	echo '</pre>'; */
	
	
		//use twilio sdk 
		$twilio = new Client($twilio_account_sid, $twilio_autho_token);
		$t = new WPMP_Twilio_Callback();
		$status_url = $t->twilio_status_url();
		try {
			$message = $twilio->messages
						  ->create($wpmp_phone_to, // to
								   [
										"from" => $twilio_phone,
										"body" => $wpmp_msg_body,
										"statusCallback" => $status_url
								   ]
						  );
						  
		//return array data 
		$r['msg'] =  "Message sent successfully.";
		$r['sid'] =  $message->sid;
		$r['status'] =  $message->status;
		$r['message_obj'] =  $message;
		$r['body'] =  $message->body;

		}catch (\Twilio\Exceptions\RestException $e) {
			//echo "Error sending SMS: ".$e->getCode() . ' : ' . $e->getMessage()."\n";
			$r['msg'] =  "Error sending SMS: ".$e->getCode() . ' : ' . $e->getMessage()."\n";
		}

		
		//print_r( $r);
		
		echo '<pre>';
	print_r($r['msg']);
	echo '</pre>';
		
		//echo 'run send sms <br/>';
	}
	
 ?>
 <div class="container">
	<form name='tgp_sms_form' method='post' id='tgp_sms_form'>
		<p>
			<label> From </label>
		</p><p>
		
			<!--input type='text 'name='tgp_from' value='+17262005496' /-->	<br/>	
			
			<?php 
			
			$numbers = new WPM_Numbers();
			$all_numbers = $numbers->all();
			
			//echo '<pre>';
			//print_r($all_numbers);
			//echo '</pre>';
			?>
			<select name='tgp_from'>
			<option> <?php _e('Please select phone number','tgp');?> </option>
				<?php 
				foreach($all_numbers as $n){
					?><option><?php echo $n['phone_number']; ?></option><?php 
				}
				?>
			</select>
		</p>
		
		<p>
			<label> To </label>
			</p><p>
			<input type='text' name='tgp_to' value='' />	<br/>	
		</p>
		<p>
			<label> Message </label>
			</p><p>
			<textarea name='tgp_message' value='' > Test message for twilio  </textarea>	<br/>	
		</p>
		<p>
			<input  type='submit' name='tgp_submit' value="Send" class="text-white bg-[#0b85ff] text-lg px-4 py-2 hover:bg-[#409EFF] rounded" />		
		</p>
	
	</form>

</div>