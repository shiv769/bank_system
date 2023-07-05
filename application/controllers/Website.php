<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	function __construct(){
		parent::__construct();
          $this->load->library('ciqrcode');
	}
	

	public function index(){
        $data['title']='Home';
        $data['page']='home';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/index');  
	}

    public function about(){
        $data['title']='About';
        $data['page']='about';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/about');
    }

    public function career(){
        $data['title']='Career';
        $data['page']='career';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/career');
    }

    public function contact(){
        $data['title']='Contact Us';
        $data['page']='contact';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/contact-us');
    }


    public function login(){
        $data['title']='Login';
        $data['page']='login';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/login');
    }


    public function select_theme(){
        $data['title']='Theme';
        $data['page']='selecttheme';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/selecttheme');
    }

    public function select_theme_data(){
       $data['card_type'] = $this->uri->segment('3');  
       $data['userid']  = $_SESSION['user_details']['id']; 
       $data['created_at']  = date('Y-m-d'); 
       $response = $this->Website_model->saveNew_data('card_details',$data);
       if($response){
         // $this->session->set_flashdata('msg','saved Successfully!!'); 
         $Curr_card_id = $this->db->insert_id(); 
         $_SESSION['Curr_card_id'] = $Curr_card_id;
         // $cardlinkforQR = base_url('assets/card_qr/'.$Curr_card_id); 
         $cardlinkforQR = base_url('website/sharecardview/'.$Curr_card_id); 
         $params['data'] = $cardlinkforQR;
         $params['level'] = 'H';
         $params['size'] = 10;
         $path =  FCPATH.'/assets/card_qr/';
         $time = time(); 
         $imagepath['qrcode'] = 'assets/card_qr/'.$time.'.png';
         $params['savename'] = $path.$time.".png";
         $generate = $this->ciqrcode->generate($params);   
         $response= $this->Website_model->Update_Data('card_details',$imagepath,array('id'=>$Curr_card_id));
        //  print_r($this->db->last_query());
        //  print_r($response); die;
         redirect('website/compdetails'); 
        }else{
           $this->session->set_flashdata('msg','Try Again.'); 
                redirect('website/select_theme'); 
      }
    }


    public function compdetails(){ 
        $data['title']='Comapny Details';
        $data['page']='compdetails';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/compdetails');
    }
    
    public function save_company_details(){
        $data = $this->input->post();
        $cardid = $_SESSION['Curr_card_id'];
            if($_FILES['c_logo']['name'] !=''){    
                $imgname=$_FILES['c_logo']['name'];
                $upload_path = './assets/c_logo';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $c_logo = upload_file("c_logo", $upload_path, $allowed_types, $imgname.time());
                if ($c_logo['status'] == 1){
                   $data['c_logo'] = $c_logo['path'];
                }else{
                  $this->session->set_flashdata('err_msg',$c_logo['msg']);
                         redirect('website/compdetails'); 
                }
            }
           

            if($_FILES['pdf1']['name'] !=''){
                 if($_FILES['pdf1']['type'] != 'application/pdf'){
                    redirect('website/compdetails');    
                 } 
                $imgname=$_FILES['pdf1']['name']; 
                $upload_path = './assets/pdf1';
                $allowed_types = 'pdf|PDF';    
                $pdf1 = upload_file("pdf1", $upload_path, $allowed_types, $imgname.time());
                if ($pdf1['status']== 1) {
                    $data['pdf1'] = $pdf1['path'];
                }else{
                   $this->session->set_flashdata('err_msg',$pdf1['msg']);
                          redirect('website/compdetails');
          
                }
            }
        

            if($_FILES['pdf2']['name'] !=''){   
                if($_FILES['pdf2']['type'] != 'application/pdf'){
                     redirect('website/compdetails');    
                 }
                $imgname=$_FILES['pdf2']['name']; 
                $upload_path = './assets/pdf2';
                $allowed_types = 'pdf|PDF';    
                $pdf2 = upload_file("pdf2", $upload_path, $allowed_types, $imgname.time());
                 if ($pdf2['status'] == 1) {
                    $data['pdf2'] = $pdf2['path']; 
                }else{
                     $this->session->set_flashdata('err_msg',$pdf2['msg']);
                            redirect('website/compdetails');   
                }
            }


           $response=$this->Website_model->Update_Data('card_details',$data,array('id'=>$cardid));
        if($response['status']==true){
           //  print_r($this->db->insert_id());die;
           //  $_SESSION['Curr_card_id'] = $this->db->insert_id(); 
          redirect('website/sociallink'); 
          }else{
          $this->session->set_flashdata('err_msg',$response['msg']);
            redirect('website/compdetails'); 
        }
    }
    
    public function sociallink(){
        $data['title'] = 'Social Link';
        $data['page'] = 'sociallink';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/sociallink');
    }
  

    public function save_sociallink(){
        $data = $this->input->post();

        $json_sociallink = json_encode($data,true);
        $inset_data['social_link'] = $json_sociallink;
        $cardid = $_SESSION['Curr_card_id'];
        $response=$this->Website_model->Update_Data('card_details',$inset_data,array('id'=>$cardid));
        if($response['status']==true){
          redirect('website/payment'); 
          }else{
            $this->session->set_flashdata('err_msg',$response['msg']);
            redirect('website/sociallink');              
        } 
    }
 

    public function payment(){
        $data['title']='Payment Details';
        $data['page']='payment';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/payment');
    }

    public function save_payment_details(){
       $data = $this->input->post();
       $cardid = $_SESSION['Curr_card_id'];
         
          if($_FILES['paytm_qr']['name'] !=''){    
                $upload_path = './assets/paytm_qr';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $paytm_qr = upload_file("paytm_qr", $upload_path, $allowed_types, 'paytm_qr'.time());
                
                 // print_r($paytm_qr);die;

                if ($paytm_qr['status'] =='') {
                   $this->session->set_flashdata('err_msg',$paytm_qr['msg']);
                    redirect('website/payment'); 
                }else{
                    $data['paytm_qr'] = $paytm_qr['path'];
                }
            }

        if($_FILES['googlepay_qr']['name'] !=''){    
                $upload_path = './assets/googlepay_qr';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $googlepay_qr = upload_file("googlepay_qr", $upload_path, $allowed_types, 'googlepay_qr'.time());
                if ($googlepay_qr['status'] =='') {
                         $this->session->set_flashdata('err_msg',$googlepay_qr['msg']);
                    redirect('website/payment'); 
                }else{
                    $data['googlepay_qr'] = $googlepay_qr['path'];
                }
            }

        if($_FILES['phonepay_qr']['name'] !=''){    
                $upload_path = './assets/phonepay_qr';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $phonepay_qr = upload_file("phonepay_qr", $upload_path, $allowed_types, 'phonepay_qr'.time());
                if ($phonepay_qr['status'] =='') {
                  $this->session->set_flashdata('err_msg',$phonepay_qr['msg']);
                      redirect('website/payment');
                }else{
                     $data['phonepay_qr'] = $phonepay_qr['path'];
                }
         }

        $response=$this->Website_model->Update_Data('card_details',$data,array('id'=>$cardid));
        if($response['status']==true){
          redirect('website/products'); 
          }else{
          $this->session->set_flashdata('err_msg',$response['msg']);
          redirect('website/payment'); 
        }

    } 

    public function products(){
        $data['title']="Products";
        $data['page']='products';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/productser');
    }

 
    public function save_all_products(){
        $data = $this->input->post();
        $cardid = $_SESSION['Curr_card_id'];  
        // get all image in a variable 
        $pro_img_arr = $_FILES['pro_img'];
      
        // get all image in a associative array 
        $img_array_langth = count($_FILES['pro_img']['name']);
        for ($i=0; $i < $img_array_langth; $i++){
           $pro_img[] = array();
           $pro_img[$i]['name'] = $pro_img_arr['name'][$i];
           $pro_img[$i]['type'] = $pro_img_arr['type'][$i];
           $pro_img[$i]['tmp_name'] = $pro_img_arr['tmp_name'][$i];
           $pro_img[$i]['error'] = $pro_img_arr['error'][$i];  
           $pro_img[$i]['size'] = $pro_img_arr['size'][$i];            
        } 
       

       // upload all image and get array of image path 
           $i = 0;
          foreach ($pro_img as $prod) {
               // code...
              $_FILES['prod_img'] = $prod;
              $upload_path = './assets/pro_img';
              $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
              $prod_img = upload_file("prod_img", $upload_path, $allowed_types, time());
              if ($prod_img !='') {
                  $data['prod_img'][$i] = $prod_img['path'];
              }
              ++$i;
           }  

      // make all products array to get details 

        $array_langth = count($data['pro_name']);
        for ($i=0; $i < $array_langth; $i++) {
           $all_products[] = array();
           $all_products[$i]['prod_img'] = $data['prod_img'][$i];
           $all_products[$i]['pro_name'] = $data['pro_name'][$i];
           $all_products[$i]['price'] = $data['price'][$i];
           $all_products[$i]['discount'] = $data['discount'][$i];
           $all_products[$i]['pro_desp'] = $data['pro_desp'][$i];           
        } 

       // make all products array to get details and convert in json formet  
        $json_all_products = json_encode($all_products,true);
        $inset_data['all_products'] = $json_all_products;
       // upload all data in database table  

        $response=$this->Website_model->Update_Data('card_details',$inset_data,array('id'=>$cardid));
        if($response['status']==true){
          redirect('website/gallery'); 
          }else{
          $this->session->set_flashdata('err_msg',$response['msg']);
          redirect('website/payment'); 
        }   
    }


    public function gallery(){
        $data['title']="Gallery";
        $data['page']='gallery';
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/gallery');
    }


     public function save_gallery(){
       $cardid = $_SESSION['Curr_card_id'];  
       $img_arr = $_FILES['image'];
        // get all image in a associative array 
        $img_array_langth = count($_FILES['image']['name']);
        for ($i=0; $i < $img_array_langth; $i++){
           $img[] = array();
           $img[$i]['name'] = $img_arr['name'][$i];
           $img[$i]['type'] = $img_arr['type'][$i];
           $img[$i]['tmp_name'] = $img_arr['tmp_name'][$i];
           $img[$i]['error'] = $img_arr['error'][$i];  
           $img[$i]['size'] = $img_arr['size'][$i];            
        } 

        // upload all image and get array of image path 
         $i = 0;
        foreach ($img as $prod) {
             // code...
            $_FILES['gallery_img'] = $prod;
            $upload_path = './assets/gellary_img';
            $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
            $gallery_img = upload_file("gallery_img", $upload_path, $allowed_types, time());
            if ($gallery_img !='') {
                $data['all_image'][$i] = $gallery_img['path'];
            }
            ++$i;
         } 
           $all_image = $data['all_image'];
           $gel_img_arr['gallery_img'] =  json_encode($all_image,true); 

             $response=$this->Website_model->Update_Data('card_details',$gel_img_arr,array('id'=>$cardid));
             if($response['status']==true){
               redirect('website/preview_card/'.$cardid); 
               }else{
               $this->session->set_flashdata('err_msg',$response['msg']);
               redirect('website/gallery'); 
             } 
    } 


    public function preview_card(){
        $cardid = $this->uri->segment('3');  
        $data['title']='Preview Card';
        $data['page']='preview';
     
        $this->db->set('tot_view', 'tot_view + 1', FALSE);
        $this->db->where('id', $cardid);
        $this->db->update('card_details');




        $this->load->view('website/includes/header',$data);
        $data['CardDatails'] = $this->Website_model->get_where_data('card_details',array('id'=>$cardid));
        if($data['CardDatails']['card_type'] == 1 ){
         $this->load->view('website/pages/vcard1',$data);  
        }elseif($data['CardDatails']['card_type'] == 2){
         $this->load->view('website/pages/vcard2',$data);  
        }elseif($data['CardDatails']['card_type'] == 3){
         $this->load->view('website/pages/vcard3',$data);  
        }elseif($data['CardDatails']['card_type'] == 4){
         $this->load->view('website/pages/vcard3',$data);  
        }
    }

  
       public function validate_login(){
           $data = $this->input->post();
           $curl = curl_init();
           curl_setopt_array($curl, array(
             CURLOPT_URL => 'https://members.oflep.com/api/card_login',
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_ENCODING => '',
             CURLOPT_MAXREDIRS => 10,
             CURLOPT_TIMEOUT => 0,
             CURLOPT_FOLLOWLOCATION => true,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
             CURLOPT_CUSTOMREQUEST => 'POST',
             CURLOPT_POSTFIELDS => $data,
           ));
           $response = curl_exec($curl);
           curl_close($curl);
           $datas = json_decode($response,true);
             
            // echo "<pre>";
            // print_r($datas);die;

           if($datas['status'] == 1){

             if(isset($datas['packagedata']) ){
               $_SESSION['purchage_package'] = $datas['packagedata'];    
             }

             if(isset($datas['userdata']) ){
               $_SESSION['user_details'] = $datas['userdata'];    
             }

            $_SESSION['msg'] =  'Login Success!!';  
                   redirect('website/index');   
            }else{
               $_SESSION['msg'] =  'Not Login!!';   
                   redirect('website/index');    
            }
      }


      public function logout(){
         unset($_SESSION['purchage_package']);
         unset($_SESSION['user_details']);
         unset($_SESSION['cardok']);
         $_SESSION['msg'] =  'Logout Successfully!!'; 
         redirect('website/index');    
       }


                // public function validate_login(){
                //     $data = $this->input->post();
                //     // $data_json=json_encode($data);
                //     // echo PRE;print_r($data_json);die;
                //     // echo PRE;print_r($data_json);die;
                //    $url=API_URL.'/check_subscriptions';
                //    $curl = curl_init();
	              // 	curl_setopt_array($curl, array(
	              // 	  CURLOPT_URL => $url,
	              // 	  CURLOPT_RETURNTRANSFER => true,
	              // 	  CURLOPT_ENCODING => '',
	              // 	  CURLOPT_MAXREDIRS => 10,
	              // 	  CURLOPT_TIMEOUT => 0,
	              // 	  CURLOPT_FOLLOWLOCATION => true,
	              // 	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	              // 	  CURLOPT_CUSTOMREQUEST => 'POST',
	              // 	  CURLOPT_POSTFIELDS =>$data
	              // 	));
	              // 	$response = curl_exec($curl);
	              // 	curl_close($curl);
	              // 	$stdData = json_decode($response,true);
                //    print_r($stdData);
                //  }


    public function all_your_cards(){
         $where['userid'] = $_SESSION['user_details']['id'];
         $where['status'] = 1;
         $data['title']='All Cards';
         $data['page']='All Cards';
         $data['yourAllCardDatails'] =$this->Website_model->get_where_alldata('card_details',$where);
         $this->load->view('website/includes/header',$data);
         $this->load->view('website/pages/allYourCards');  
    }

  
    public function card_preview(){
         $cardid = $this->uri->segment('3');
         $data['title']='Card Preview';
         $data['page']='Card Preview';
         $this->db->set('tot_view', 'tot_view + 1', FALSE);
         $this->db->where('id', $cardid);
         $this->db->update('card_details');

        $data['CardDatails'] = $this->Website_model->get_where_data('card_details',array('id'=>$cardid));
       if($data['CardDatails']['card_type'] == 1 ){
        $this->load->view('website/pages/vcard1',$data);  
       }elseif($data['CardDatails']['card_type'] == 2){
        $this->load->view('website/pages/vcard2',$data);  
       }elseif($data['CardDatails']['card_type'] == 3){
        $this->load->view('website/pages/vcard3',$data);  
       }elseif($data['CardDatails']['card_type'] == 4){
        $this->load->view('website/pages/vcard3',$data);  
       }
    }

    
    public function edit_card_preview(){
        $cardid = $this->uri->segment('3');
        $data['title'] = 'Edit Card';
        $data['page'] = 'Edit Card';
        $data['cardid'] = $cardid;
        // $data['CardDatails'] = $this->Website_model->get_where_data('card_details',array('id'=>$cardid));
        // print_r($data['CardDatails']);die;
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/edit_companydetails');    
    } 
     
    public function edit_company_details(){
        $data = $this->input->post();
        $cardid = $data['cardid'];
        unset($data['cardid']);
        if($_FILES['c_logo']['name'] !=''){    
            $imgname=$_FILES['c_logo']['name'];
            $upload_path = './assets/c_logo';
            $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
            $c_logo = upload_file("c_logo", $upload_path, $allowed_types, $imgname.time());
            if ($c_logo['status'] == 1){
               $data['c_logo'] = $c_logo['path'];
            }else{
              $this->session->set_flashdata('err_msg',$c_logo['msg']);
                  redirect('website/edit_card_preview/'.$cardid); 
            }
        }

            if($_FILES['pdf1']['name'] !=''){
                 if($_FILES['pdf1']['type'] != 'application/pdf'){
                    redirect('website/edit_card_preview/'.$cardid);    
                 } 
                $imgname=$_FILES['pdf1']['name']; 
                $upload_path = './assets/pdf1';
                $allowed_types = 'pdf|PDF';    
                $pdf1 = upload_file("pdf1", $upload_path, $allowed_types, $imgname.time());
                if ($pdf1['status']== 1) {
                    $data['pdf1'] = $pdf1['path'];
                }else{
                $this->session->set_flashdata('err_msg',$pdf1['msg']);
                     redirect('website/edit_card_preview/'.$cardid);
                }
            }
        

            if($_FILES['pdf2']['name'] !=''){   
                if($_FILES['pdf2']['type'] != 'application/pdf'){
                     redirect('website/edit_card_preview/'.$cardid);    
                 }
                $imgname=$_FILES['pdf2']['name']; 
                $upload_path = './assets/pdf2';
                $allowed_types = 'pdf|PDF';    
                $pdf2 = upload_file("pdf2", $upload_path, $allowed_types, $imgname.time());
                 if ($pdf2['status'] == 1) {
                    $data['pdf2'] = $pdf2['path']; 
                }else{
                $this->session->set_flashdata('err_msg',$pdf2['msg']);
                    redirect('website/edit_card_preview/'.$cardid);   
                }
            }


        $response=$this->Website_model->Update_Data('card_details',$data,array('id'=>$cardid));
        if($response['status']==true){
          // print_r($this->db->insert_id());die;
          // $_SESSION['Curr_card_id'] = $this->db->insert_id(); 
            redirect('website/edit_sociallink/'.$cardid); 
          }else{
          $this->session->set_flashdata('err_msg',$response['msg']);
            redirect('website/edit_card_preview/'.$cardid); 
        }        

      }

      
      public function edit_sociallink(){
         $cardid = $this->uri->segment('3');  
         $data['title'] = 'Edit Card';
         $data['page'] = 'Edit Card';
         $data['cardid'] = $cardid;
         //  $data['CardDatails'] = $this->Website_model->get_where_data('card_details',array('id'=>$cardid));
         //  print_r($data['CardDatails']);die;
         $this->load->view('website/includes/header',$data);
         $this->load->view('website/pages/edit_sociallink');   


      }


      public function change_sociallink(){
        $data = $this->input->post();
        $cardid = $data['cardid'];
         unset($data['cardid']);
           // echo "<pre>";
           // print_r($data);die;
        $json_sociallink = json_encode($data,true);
        $inset_data['social_link'] = $json_sociallink;
        $response=$this->Website_model->Update_Data('card_details',$inset_data,array('id'=>$cardid));
        if($response['status']==true){
          redirect('website/edit_payment/'.$cardid); 
          }else{
         $this->session->set_flashdata('err_msg',$response['msg']);
          redirect('website/edit_sociallink/'.$cardid);              
        } 
      }  
    
  
      public function edit_payment(){
         $cardid = $this->uri->segment('3');  
         $data['title'] = 'Edit Card';
         $data['page'] = 'Edit Card';
         $data['cardid'] = $cardid;
         //  $data['CardDatails'] = $this->Website_model->get_where_data('card_details',array('id'=>$cardid));
         //  print_r($data['CardDatails']);die;
         $this->load->view('website/includes/header',$data);
         $this->load->view('website/pages/edit_payment');  
      }

 
      public function change_payment_details(){

       $data = $this->input->post();
       $cardid = $data['cardid'];
         unset($data['cardid']);
         
          if($_FILES['paytm_qr']['name'] !=''){    
                $upload_path = './assets/paytm_qr';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $paytm_qr = upload_file("paytm_qr", $upload_path, $allowed_types, 'paytm_qr'.time());
                 // print_r($paytm_qr);die;
                if ($paytm_qr['status'] =='') {
                   $this->session->set_flashdata('err_msg',$paytm_qr['msg']);
                    redirect('website/edit_payment/'.$cardid); 
                }else{
                    $data['paytm_qr'] = $paytm_qr['path'];
                }
            }

        if($_FILES['googlepay_qr']['name'] !=''){    
                $upload_path = './assets/googlepay_qr';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $googlepay_qr = upload_file("googlepay_qr", $upload_path, $allowed_types, 'googlepay_qr'.time());
                if ($googlepay_qr['status'] =='') {
                  $this->session->set_flashdata('err_msg',$googlepay_qr['msg']);
                  redirect('website/edit_payment/'.$cardid); 
                }else{
                    $data['googlepay_qr'] = $googlepay_qr['path'];
                }
            }

        if($_FILES['phonepay_qr']['name'] !=''){    
                $upload_path = './assets/phonepay_qr';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $phonepay_qr = upload_file("phonepay_qr", $upload_path, $allowed_types, 'phonepay_qr'.time());
                if ($phonepay_qr['status'] =='') {
                  $this->session->set_flashdata('err_msg',$phonepay_qr['msg']);
                    redirect('website/edit_payment/'.$cardid); 
                }else{
                     $data['phonepay_qr'] = $phonepay_qr['path'];
                }
        }

        $response=$this->Website_model->Update_Data('card_details',$data,array('id'=>$cardid));
        if($response['status']==true){
           redirect('website/edit_products/'.$cardid); 
        }else{
           $this->session->set_flashdata('err_msg',$response['msg']);
           redirect('website/edit_payment/'.$cardid); 
        }

      }
   

       public function edit_products(){
         $cardid = $this->uri->segment('3');  
         $data['title'] = 'Edit Card';
         $data['page'] = 'Edit Card';
         $data['cardid'] = $cardid;
         $this->load->view('website/includes/header',$data);
         $this->load->view('website/pages/edit_products');  
       }
   
 
       public function change_all_products(){
        $data = $this->input->post();
          $cardid = $data['cardid'];
          unset($data['cardid']); 
          // $cardid = 39;
          // get all image in a variable 
          $pro_img_arr = $_FILES['pro_img'];
          // get all image in a associative array 
         $img_array_langth = count($_FILES['pro_img']['name']);
         for ($i=0; $i < $img_array_langth; $i++){
           $pro_img[] = array();
           $pro_img[$i]['name'] = $pro_img_arr['name'][$i];
           $pro_img[$i]['type'] = $pro_img_arr['type'][$i];
           $pro_img[$i]['tmp_name'] = $pro_img_arr['tmp_name'][$i];
           $pro_img[$i]['error'] = $pro_img_arr['error'][$i];  
           $pro_img[$i]['size'] = $pro_img_arr['size'][$i];            
         } 
         
        // upload all image and get array of image path 
           $i = 0;
          foreach ($pro_img as $prod) {
            // code...
              $_FILES['prod_img'] = $prod;
              if($_FILES['prod_img']['name'] !=''){    
              $upload_path = './assets/pro_img';
              $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
              $prod_img = upload_file("prod_img", $upload_path, $allowed_types, time());
              if ($prod_img !=''){
                  $data['prod_img'][$i] = $prod_img['path'];
                  $data['proPrevImage'][$i] = $prod_img['path'];
               }
            }
              ++$i;
           }  

        //  make all products array to get details 

        $array_langth = count($data['pro_name']);
        for ($i=0; $i < $array_langth; $i++){
           $all_products[] = array();
           $all_products[$i]['prod_img'] = $data['proPrevImage'][$i];
           $all_products[$i]['pro_name'] = $data['pro_name'][$i];
           $all_products[$i]['price'] = $data['price'][$i];
           $all_products[$i]['discount'] = $data['discount'][$i];
           $all_products[$i]['pro_desp'] = $data['pro_desp'][$i];           
        } 
        // make all products array to get details and convert in json format  
        // $json_all_products = json_encode($all_products,true);
        // $alldata['all_products'] = $json_all_products;   

        // make all products array to get details and convert in json format  
        $json_all_products = json_encode($all_products,true);
        $inset_data['all_products'] = $json_all_products;

        // upload all data in database table  
        $response=$this->Website_model->Update_Data('card_details',$inset_data,array('id'=>$cardid));
        if($response['status']==true){
          redirect('website/edit_gallery/'.$cardid); 
          }else{
          $this->session->set_flashdata('err_msg',$response['msg']);
          redirect('website/edit_payment/'.$cardid); 
        }   

      }

   
      public function edit_gallery(){
         $cardid = $this->uri->segment('3');  
         $data['title'] = 'Edit Card';
         $data['page'] = 'Edit Card';
         $data['cardid'] = $cardid;
         $this->load->view('website/includes/header',$data);
         $this->load->view('website/pages/edit_gallery'); 
      }   
     
    
    public function change_gallery(){
         $data = $this->input->post();
         $cardid = $data['cardid'];
         unset($data['cardid']); 
        // $cardid = 39;
        //  save gallery image in website  
        $img_arr = $_FILES['image'];
        // get all image in a associative array 
        $img_array_langth = count($_FILES['image']['name']);
        for ($i=0; $i < $img_array_langth; $i++){
           $img[] = array();
           $img[$i]['name'] = $img_arr['name'][$i];
           $img[$i]['type'] = $img_arr['type'][$i];
           $img[$i]['tmp_name'] = $img_arr['tmp_name'][$i];
           $img[$i]['error'] = $img_arr['error'][$i];  
           $img[$i]['size'] = $img_arr['size'][$i];            
        } 
        // upload all image and get array of image path 
           $i = 0;
          foreach ($img as $prod){
        // code...
            $_FILES['gallery_img'] = $prod;
            if($_FILES['gallery_img']['name'] != ''){
            $upload_path = './assets/gellary_img';
            $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
            $gallery_img = upload_file("gallery_img", $upload_path, $allowed_types, time());
            if ($gallery_img !='') {
                $data['all_image'][$i] = $gallery_img['path'];
                $data['gelPrevImage'][$i] =  $gallery_img['path'];
            }
            }
            ++$i;
          }

           $all_image = $data['gelPrevImage'];
           $gel_img_arr['gallery_img'] =  json_encode($all_image,true); 
           $response=$this->Website_model->Update_Data('card_details',$gel_img_arr,array('id'=>$cardid));
             if($response['status']==true){
               redirect('website/preview_card/'.$cardid); 
               }else{
               $this->session->set_flashdata('err_msg',$response['msg']);
               redirect('website/edit_gallery/'.$cardid); 
           } 

    }   
 
 
       
   public function edit_card(){
        $cardid = $this->uri->segment('3');
        $data['title']='Edit Card';
        $data['page']='Edit Card';
        $data['CardDatails'] =$this->Website_model->get_where_data('card_details',array('id'=>$cardid));
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/edit_yourcard');
   } 
    
 

    public function cardCompanyDetailsEdit(){
      $data = $this->input->post();
      $cardid = $data['id'];
      // pack all data in alldata variable 
      $alldata['card_type'] = $data['card_type'];      
      $alldata['c_name'] = $data['c_name'];
      $alldata['about'] = $data['about'];
      $alldata['first_name'] = $data['first_name'];
      $alldata['designation'] = $data['designation'];
      $alldata['mobile_no'] = $data['mobile_no'];
      $alldata['whats_no'] = $data['whats_no'];
      $alldata['email_id'] = $data['email_id'];      
      $alldata['address'] = $data['address'];
      $alldata['website_url'] = $data['website_url'];


            if($_FILES['c_logo']['name'] !=''){    
                $upload_path = './assets/c_logo';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $c_logo = upload_file("c_logo", $upload_path, $allowed_types, time());
                if ($c_logo !='') {
                    $alldata['c_logo'] = $c_logo['path'];
                }
            }
            if($_FILES['pdf1']['name'] !=''){    
                $upload_path = './assets/pdf1';
                $allowed_types = 'pdf|PDF';    
                $pdf1 = upload_file("pdf1", $upload_path, $allowed_types, time());
                if ($pdf1 !='') {
                    $alldata['pdf1'] = $pdf1['path'];
                }
            }
            if($_FILES['pdf2']['name'] !=''){    
                $upload_path = './assets/pdf2';
                $allowed_types = 'pdf|PDF';    
                $pdf2 = upload_file("pdf2", $upload_path, $allowed_types, time());
                if ($pdf2 !='') {
                    $alldata['pdf2'] = $pdf2['path'];
                }
            }

         //  social like data packing 

        $array_langth = count($data['d_fb']);
        for ($i=0; $i < $array_langth; $i++) {
           $sociallink[] = array();
           $sociallink[$i]['d_fb'] = $data['d_fb'][$i];
           $sociallink[$i]['d_twitter'] = $data['d_twitter'][$i];
           $sociallink[$i]['d_instagram'] = $data['d_instagram'][$i];
           $sociallink[$i]['d_linkedin'] = $data['d_linkedin'][$i];
           $sociallink[$i]['d_youtube'] = $data['d_youtube'][$i];
           $sociallink[$i]['d_pinterest'] = $data['d_pinterest'][$i];
           $sociallink[$i]['d_yt_vid1'] = $data['d_yt_vid1'][$i];
           $sociallink[$i]['d_yt_vid2'] = $data['d_yt_vid2'][$i];
        }
          
       $json_sociallink = json_encode($sociallink,true);
       $alldata['social_link'] = $json_sociallink;
   
       //   payment details data 
      
      $alldata['paytm_no'] = $data['paytm_no'];
      $alldata['googlepay_no'] = $data['googlepay_no'];
      $alldata['phoneopay_no'] = $data['phoneopay_no'];
      $alldata['bank_name'] = $data['bank_name'];
      $alldata['ac_holder_name'] = $data['ac_holder_name'];
      $alldata['bank_ac_no'] = $data['bank_ac_no'];
      $alldata['bank_ifsc_code'] = $data['bank_ifsc_code'];
       
       


       if($_FILES['paytm_qr']['name'] !=''){    
                $upload_path = './assets/paytm_qr';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $paytm_qr = upload_file("paytm_qr", $upload_path, $allowed_types, time());
                if ($paytm_qr !='') {
                    if($_FILES['paytm_qr']['name'] !=''){    
                $upload_path = './assets/paytm_qr';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $paytm_qr = upload_file("paytm_qr", $upload_path, $allowed_types, time());
                if ($paytm_qr !='') {
                    $data['paytm_qr'] = $paytm_qr['path'];
                     $alldata['paytm_qr'] = $data['paytm_qr'];
                }
            }        $data['paytm_qr'] = $paytm_qr['path'];
                     $alldata['paytm_qr'] = $data['paytm_qr'];
                }
            }


        if($_FILES['googlepay_qr']['name'] !=''){    
                $upload_path = './assets/googlepay_qr';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $googlepay_qr = upload_file("googlepay_qr", $upload_path, $allowed_types, time());
                if ($googlepay_qr !='') {
                    $data['googlepay_qr'] = $googlepay_qr['path'];
                    $alldata['googlepay_qr'] = $data['googlepay_qr'];
                }
            }

        if($_FILES['phonepay_qr']['name'] !=''){    
                $upload_path = './assets/phonepay_qr';
                $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
                $phonepay_qr = upload_file("phonepay_qr", $upload_path, $allowed_types, time());
                if ($phonepay_qr !='') {
                    $data['phonepay_qr'] = $phonepay_qr['path'];
                    $alldata['phonepay_qr'] = $data['phonepay_qr'];  
                }
         }


         // get all image in a variable 
          $pro_img_arr = $_FILES['pro_img'];
          
         // get all image in a associative array 
         $img_array_langth = count($_FILES['pro_img']['name']);
         for ($i=0; $i < $img_array_langth; $i++){
           $pro_img[] = array();
           $pro_img[$i]['name'] = $pro_img_arr['name'][$i];
           $pro_img[$i]['type'] = $pro_img_arr['type'][$i];
           $pro_img[$i]['tmp_name'] = $pro_img_arr['tmp_name'][$i];
           $pro_img[$i]['error'] = $pro_img_arr['error'][$i];  
           $pro_img[$i]['size'] = $pro_img_arr['size'][$i];            
         } 
         
        // upload all image and get array of image path 
           $i = 0;
          foreach ($pro_img as $prod) {
            // code...
              $_FILES['prod_img'] = $prod;
              if($_FILES['prod_img']['name'] !=''){    
              $upload_path = './assets/pro_img';
              $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
              $prod_img = upload_file("prod_img", $upload_path, $allowed_types, time());
              if ($prod_img !=''){
                  $data['prod_img'][$i] = $prod_img['path'];
                  $data['proPrevImage'][$i] = $prod_img['path'];
                }
             }
              ++$i;
           }  


        //  make all products array to get details 

        $array_langth = count($data['pro_name']);
        for ($i=0; $i < $array_langth; $i++){
           $all_products[] = array();
           $all_products[$i]['prod_img'] = $data['proPrevImage'][$i];
           $all_products[$i]['pro_name'] = $data['pro_name'][$i];
           $all_products[$i]['price'] = $data['price'][$i];
           $all_products[$i]['discount'] = $data['discount'][$i];
           $all_products[$i]['pro_desp'] = $data['pro_desp'][$i];           
        } 

        // make all products array to get details and convert in json format  
        $json_all_products = json_encode($all_products,true);
        $alldata['all_products'] = $json_all_products;   


        //  save gallery image in website  
        $img_arr = $_FILES['image'];
        // get all image in a associative array 
        $img_array_langth = count($_FILES['image']['name']);
        for ($i=0; $i < $img_array_langth; $i++){
           $img[] = array();
           $img[$i]['name'] = $img_arr['name'][$i];
           $img[$i]['type'] = $img_arr['type'][$i];
           $img[$i]['tmp_name'] = $img_arr['tmp_name'][$i];
           $img[$i]['error'] = $img_arr['error'][$i];  
           $img[$i]['size'] = $img_arr['size'][$i];            
         } 

        // upload all image and get array of image path 
          $i = 0;
          foreach ($img as $prod) {
             // code...
            $_FILES['gallery_img'] = $prod;
            if($_FILES['gallery_img']['name'] != ''){
            $upload_path = './assets/gellary_img';
            $allowed_types = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';    
            $gallery_img = upload_file("gallery_img", $upload_path, $allowed_types, time());
            if ($gallery_img !='') {
                $data['all_image'][$i] = $gallery_img['path'];
                $data['gelPrevImage'][$i] =  $gallery_img['path'];
            }
            }
            ++$i;
          }
               
         $all_image = $data['gelPrevImage'];
         $alldata['gallery_img'] =  json_encode($all_image,true); 
         $response=$this->Website_model->Update_Data('card_details',$alldata,array('id'=>$cardid));

         if($response){
            redirect('website/preview_card/'.$cardid);         
         }else{
            redirect('website/preview_card/'.$cardid); 
         }

    }
     
    public function select_theme_not_access(){
          $_SESSION['msg'] =  'You Have not package To generate Card !!';  
         redirect('website/index'); 
     }

    public function sharecardview(){
       $cardid = $this->uri->segment('3');
       $data['title']='Edit Card';
       $data['page']='Edit Card';
       $this->db->set('tot_view', 'tot_view + 1', FALSE);
       $this->db->where('id', $cardid);
       $this->db->update('card_details');
       $data['CardDatails'] = $this->Website_model->get_where_data('card_details',array('id'=>$cardid));

       if($data['CardDatails']['card_type'] == 1 ){
        $this->load->view('website/pages/vcard1',$data);  
       }elseif($data['CardDatails']['card_type'] == 2){
        $this->load->view('website/pages/vcard2',$data);  
       }elseif($data['CardDatails']['card_type'] == 3){
        $this->load->view('website/pages/vcard3',$data);  
       }elseif($data['CardDatails']['card_type'] == 4){
        $this->load->view('website/pages/vcard3',$data);  
       }
    }

    public function card_ratings()
    {
        $data['title'] = 'Card Rating';
        $data['page'] = 'Card Rating';
        $userid = $_SESSION['user_details']['id'];
        $data['all_rating_data'] = $this->Website_model->get_where_alldata('card_rating',array('userid'=>$userid));
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/card_ratings');     
    }
 

    public function card_enquirys(){
        $data['title'] = 'Card Enquiry';
        $data['page']='Card Enquiry';
        $userid = $_SESSION['user_details']['id']; 
        $data['all_enquiry_data'] = $this->Website_model->get_where_alldata('card_enquiry',array('userid'=>$userid)); 
        $this->load->view('website/includes/header',$data);
        $this->load->view('website/pages/card_enquirys');
    }

    public function card_feedback_data(){
        $data = $this->input->post();
        $data['created_at'] = date("Y-m-d");
        $response = $this->Website_model->saveNew_data('card_rating',$data); 
        echo $response;
    }

    public function card_enquiry_data(){
        $data = $this->input->post();
        $data['created_at'] = date("Y-m-d");
        $response = $this->Website_model->saveNew_data('card_enquiry',$data); 
        echo $response; 
    }

    public function card_remove_it(){
      $cardid = $this->input->post(cardid);
       $response = $this->Website_model->Update_Data('card_details',array('status'=>0),array('id'=>$cardid)); 
          echo true;
    }

    public function quiry_remove_it(){
         $id = $this->uri->segment('3'); 
         $response = $this->Website_model->removethisdata('card_enquiry',array('id'=>$id)); 
          redirect('website/card_enquirys');    
    }

  public function rating_remove_it(){
         $id = $this->uri->segment('3'); 
         $response = $this->Website_model->removethisdata('card_rating',array('id'=>$id)); 
          redirect('website/card_ratings');    
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