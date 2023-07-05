<?php
class Bank_system_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
	}
	
  

	public function updatedata($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
    public function saveNew_data($table,$data){
     $result = $this->db->insert($table, $data);
     $last_id = $this->db->insert_id();

    if($result){
    return $last_id;
     }else{
       return false;
     }
    }
 
   public function save_data($table,$data){
     $result = $this->db->insert($table, $data);
    if($result){
    return true;
     }else{
       return false;
     }
    }

 // Function to generate a random alphanumeric string
 public function generateAccessToken($length = 36) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $accessToken = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($characters) - 1);
        $accessToken .= $characters[$randomIndex];
    }

    return $accessToken;
}


 
    public function userslogin($data){
        $table=TP."users_details";
		$email=$data['email'];		
		$password=$data['password'];
		$this->db->where('email', $email);
		$query = $this->db->get($table);
		$result=$query->unbuffered_row('array');
       
		if(!empty($result)){
			$password=$result['password'];
			if($password==$data['password'] && $result['status']==1){
				$result['verify']=true;
			}
		}
		if(!isset($result['verify'])){ $result=array('verify'=>"Wrong Credentials!"); }
		return $result;
    }

    public function get_total_cr_amount() {
     $user_key = $_SESSION['user_key'];
     $condition = array('user_key'=>$user_key,'txn_type'=>'cr','status'=>1);
     $this->db->select_sum('amount'); // Calculates the sum of the 'amount' column
     $this->db->where($condition); // Apply the WHERE condition
     $query = $this->db->get('accounts'); // Replace 'transactions' with 
    return $query->row()->amount;
   }


    public function get_total_dr_amount() {
     $user_key = $_SESSION['user_key'];
     $condition = array('user_key'=>$user_key,'txn_type'=>'dr','status'=>1);
     $this->db->select_sum('amount');  // Calculates the sum of the 'amount' column
     $this->db->where($condition);  // Apply the WHERE condition
     $query = $this->db->get('accounts');  // Replace 'transactions'  
     return $query->row()->amount;
   }






}