<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_system extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
      $data['title']='Login | Bank System';
      $data['page']='home';
      $this->load->view('Bank_system/includes/header',$data);
      $this->load->view('Bank_system/index');  
      $this->load->view('Bank_system/includes/footer');  
	}

   public function alltansaction(){
      $postdata = $this->input->post();
      $data['title']='Login | Bank System';
      $data['page']='home';
      $user_key = $postdata['user_key'];
      $condition = array('user_key'=>$user_key,'status'=>1);
      $data['tran_historys'] = $this->db->get_where('accounts',$condition)->result_array();
      $this->load->view('Bank_system/includes/header',$data);
      $this->load->view('Bank_system/transaction'); 
      $this->load->view('Bank_system/includes/footer'); 
   }



  public function banker(){
      $data['title']='Login | Bank System';
      $data['page']='home';
      $condition = array('status'=>1,'user_type'=>1);
      $data['allCustomers'] = $this->db->get_where('users_details',$condition)->result_array();
      $this->load->view('Bank_system/includes/header',$data);
      $this->load->view('Bank_system/banker'); 
      $this->load->view('Bank_system/includes/footer');   
  }

  public function user(){
      $data['title']='Login | Bank System';
      $data['page']='home';
      $user_key = $_SESSION['user_key'];
      $condition = array('user_key'=>$user_key,'status'=>1);
      $data['tot_cr'] = $this->Bank_system_model->get_total_cr_amount();
      $data['tot_dr'] = $this->Bank_system_model->get_total_dr_amount();
      $data['tran_historys'] = $this->db->get_where('accounts',$condition)->result_array();  
      $this->load->view('Bank_system/includes/header',$data);
      $this->load->view('Bank_system/user');  
      $this->load->view('Bank_system/includes/footer');
  }

   public function logincheck() {
     # user or banker Login...
     $data = $this->input->post();
     unset($data['Sign_in']);
     # generate access token 
     $accessToken = $this->Bank_system_model->generateAccessToken();
     $userdetails = $this->Bank_system_model->userslogin($data);
      if($userdetails['verify'] == 1){
        $user_key = $userdetails['user_key'];
        $_SESSION['user_key'] = $user_key;  
        $this->Bank_system_model->updatedata('users_details',array('last_accesskey' => $accessToken),array('user_key' => $user_key));
        # Store the access token in the session
         $_SESSION['userAccessToken'] = $accessToken; 
         if($userdetails['user_type'] == 1){
            $this->session->set_flashdata('msg','Login successful!!'); 
              redirect('bank_system/user');   
          }else{
            $this->session->set_flashdata('msg','Login successful!!'); 
              redirect('bank_system/banker');   
          }
        }else{
            $this->session->set_flashdata('msg','Wrong Credentials!'); 
             redirect('bank_system/index'); 
        }
   }
 
  public function deposit()
   {
     # code...
      $data =  $this->input->post(); 
      $data['user_key'] = $_SESSION['user_key'];
      $data['txn_type'] = "cr";
      $data['created_at'] = date("Y-m-d H:i:s");
      $data['status'] = 1;
      $result = $this->Bank_system_model->save_data('accounts',$data);
      
      if($result){
            $this->session->set_flashdata('msg','Money Deposited!!'); 
              redirect('bank_system/user'); 
      }else{
          $this->session->set_flashdata('msg','Money Not Deposited!!'); 
          redirect('bank_system/user'); 
      }
   }
 

   public function withdraw()
   {
     #  code...
      $data =  $this->input->post(); 
      $data['user_key'] = $_SESSION['user_key'];
      $data['txn_type'] = "dr";
      $data['created_at'] = date("Y-m-d H:i:s");
      $data['status'] = 1;

      $tdata['tot_cr'] = $this->Bank_system_model->get_total_cr_amount();
      $tdata['tot_dr'] = $this->Bank_system_model->get_total_dr_amount();   
      $amt = $tdata['tot_cr'] -  $tdata['tot_dr'];

      if($amt >= $data['amount']){
        $result = $this->Bank_system_model->save_data('accounts',$data);
      if($result){
            $this->session->set_flashdata('msg','Money Withdrawn!!'); 
              redirect('bank_system/user'); 
      }else{
        $this->session->set_flashdata('msg','Money Not Withdrawn!!'); 
           redirect('bank_system/user'); 
      }
    }else{
        $this->session->set_flashdata('msg','Insufficient Funds!!'); 
           redirect('bank_system/user'); 
    }

      
   }
  

  public function logout(){
    unset($_SESSION['user_key']);
    unset($_SESSION['userAccessToken']); 
    $this->session->set_flashdata('msg','Logout Successful!!'); 
      redirect('bank_system/index');  
  }



  public function alldata($token=''){
		$this->load->library('alldata');
		$this->alldata->viewall($token);
	}
	
	public function gettable(){
		$this->load->library('alldata');
		$this->alldata->gettable();
	}
	
	public function updatedata(){
		$this->load->library('alldata');
		$this->alldata->updatedata();
	}


}