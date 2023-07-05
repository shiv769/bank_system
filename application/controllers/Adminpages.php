<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpages extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
     public function all_cards(){
         checklogin();
         $data['title']='All Cards';
         $data['page']='All Cards';
         $data['datatable']=true;
         $data['all_cards'] = $this->Adminpages_model->all_card_details('card_details');
         $this->template->load('adminpages','all_cards',$data);
     }

    public function sociallink(){
         checklogin();
         $where = $this->input->post();
         $data['title']='Social Link';
         $data['page']='Card Social Link';
         $data['datatable']=true;
         $data['card_social_link'] = $this->Adminpages_model->card_social_details('card_details',$where);
         $this->template->load('adminpages','social_link',$data);
    }

    public function Product_details(){
         checklogin();
         $where = $this->input->post();
         $data['title']='Product Details';
         $data['page']='Card Product Details';
         $data['datatable']=true;
         $data['all_Product_details'] = $this->Adminpages_model->card_social_details('card_details',$where);
         $this->template->load('adminpages','Product_details',$data);
    }

     public function gallery_imgs(){
           checklogin();
           $where['id'] = $this->uri->segment('3'); 
           $data['title']='gallery Images';
           $data['page']='Card gallery Images';
           $data['datatable']=true;
           $data['all_gallery_imgs'] = $this->Adminpages_model->card_social_details('card_details',$where);
           $this->template->load('adminpages','gallery_img',$data);
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