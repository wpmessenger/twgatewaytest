<?php 
/** 
 * create save update tables for twilio phone and sms 
 */ 
class WPM_Credentials {	

	private $tablename;
	   
	public function __construct() {
		$this->get_table_name();
    }  
	public function get_table_name(){
		global $wpdb;
		$t = new TGP_DB();
		$table = $t->get_credentials_table_name();
		$table_name	=	$wpdb->prefix.$table;
		$this->tablename =  $table_name;	
	}

	public function insert_credentials($data ){
		global $wpdb;
		
		$date_created = date("Y-m-d H:i:s");

		$id = $wpdb->insert( 
				$this->tablename, 
				array( 
					'account_sid'	=>	$data['wpmp_sid'],
					'auth_token'	=>		$data['wpmp_auth_token'],
					'created_at'	=>		$date_created
				));
		return $id; 

	}
	public function update_credentials($data ){
		global $wpdb;
		$date_created = date("Y-m-d H:i:s");

		$id = $wpdb->update( 
				$this->tablename,  
				array( 
					'account_sid'	=>	$data['wpmp_sid'],
					'auth_token'	=>		$data['wpmp_auth_token'],
					'updated_at'	=>		$date_created
				),
				array('id'=>$data['id'])
				
				);
		return $id;
		
	}
	public function get_credentials_data(){
		global $wpdb;
		$rows	=	$wpdb->get_results( "SELECT * FROM ".$this->tablename,ARRAY_A);
		//return first for now 
		if(isset($rows[0])){
			return $rows[0];		
		}else{
			return array(
				'id'=>'',
				'account_sid'=>'',
				'auth_token'=>''
			);
		}
	}
}//eof class 
new WPM_Credentials(); 