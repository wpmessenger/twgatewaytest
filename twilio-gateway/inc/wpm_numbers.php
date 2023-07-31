<?php 
/** 
 * create save update numbers 
 */ 
class WPM_Numbers {	

	private $tablename;
	   
	public function __construct() {
		$this->get_table_name();
    }  
	public function get_table_name(){
		global $wpdb;
		$t = new TGP_DB();
		$table = $t->get_number_table_name();
		$table_name	=	$wpdb->prefix.$table;
		$this->tablename =  $table_name;	
		return $this->tablename;
	}

	public function insert($data ){
		global $wpdb;
		
		$date_created = date("Y-m-d H:i:s");

		$id = $wpdb->insert( 
				$this->tablename, 
				array( 
					'number_sid'	=>	uniqid(), // to do get sid using api 
					'friendly_name'	=>	$data['friendly_name'],
					'phone_number'	=>		$data['phone_number'],
					'number_type'	=>		$data['number_type'],
					'date_created'	=>		$date_created
				));
		return $id; 

	}

	public function update_numbers($data, $id) {
		global $wpdb;
		
		$date_updated = date("Y-m-d H:i:s");
	
		$updated = $wpdb->update(
			$this->tablename,
			array(
				'friendly_name' => $data['friendly_name'],
				'phone_number' => $data['phone_number'],
				'number_type' => $data['number_type'],
				'date_updated' => $date_updated
			),
			array('id' => $id) // Specify the row to update based on the id
		);
	
		return $updated;
	}
	
	public function delete_numbers($id) {
		global $wpdb;
	
		$deleted = $wpdb->delete(
			$this->tablename,
			array('id' => $id) // Specify the row to delete based on the id
		);
	
		return $deleted;
	}
	
	public function update($data ){
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
	public function get_data(){
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
	//all numbers 
	public function all(){
		global $wpdb;
		$rows	=	$wpdb->get_results( "SELECT * FROM ".$this->tablename." WHERE number_type != 'forward'",ARRAY_A);
		//return first for now 
		if(isset($rows[0])){
			return $rows;		
		}else{
			return array(
				'id'=>'',
				'account_sid'=>'',
				'auth_token'=>''
			);
		}
	}
}//eof class 
new WPM_Numbers(); 