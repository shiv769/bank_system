<?php 
$tempdata = $CardDatails;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta  property="og:title" content="<?= $tempdata['about']; ?>" />
    <meta  property="og:image" content="<?= base_url($tempdata['c_logo']); ?>"  />
	<meta  property="og:url"  content="<?= base_url('website/card_preview/'.$tempdata['id']); ?>" />
	<meta  property="og:site_name" content="Oflep Card" />
	<title>Oflep Card | Preview Card</title>
	<?php $this->load->view('website/includes/header-links.php'); ?>
	<link href="<?= base_url('assets/website/css/lightbox.css'); ?>" rel="stylesheet"/>
	<style type="text/css">
		#myDIV {
        	display: none;
    	}
    	#myDIV1 {
        	display: none;
    	}
    	#myDIV2 {
        	display: none;
    	}
    	#myDIV3 {
        	display: none;
    	}
    	#myDIV4 {
        	display: none;
    	}
    	#myDIV5 {
        	display: none;
    	}
    	#myDIV6 {
        	display: none;
    	}
    	#myDIV7 {
        	display: none;
    	}
    	#myDIV8 {
        	display: none;
    	}
    	#myDIV9 {
        	display: none;
    	}
    	#myDIV10 {
        	display: none;
    	}
    	#myDIV11 {
        	display: none;
    	}
   
      #editCardData{
          border: 1px solid red;
          background-color: #ffffffb3;
          /* border: 1px solid black; */
          /* opacity: 0.7;  */
          color: black;
      } 


      <?php 

         if($tempdata['card_type'] == 1){
         	$card_bg = base_url('assets/website/images/img/card/cards/op_design1.jpg');
         }elseif($tempdata['card_type'] == 2){
         	$card_bg = base_url('assets/website/images/img/card/cards/op_design2.jpg');  
         }elseif($tempdata['card_type'] == 3){
         	$card_bg = base_url('assets/website/images/img/card/cards/op_design3.jpg');  
         }elseif($tempdata['card_type'] == 4){
         	$card_bg = base_url('assets/website/images/img/card/cards/op_design4.jpg');  
         }else{
         	$card_bg = base_url('assets/website/images/img/bg4.jpg');	
         }

        ?>



    .wh {
             background:url(<?= $card_bg ?>);
             background-size: cover;

             padding-top: 10px;
             padding-bottom:30px;
             height: auto;
             width: 100%;
         }
         .wh .whimg{
             padding-top:39px;
         }
         .wh .whcomna{
             color:#fff;
             padding-top:10px;
         }
         .wh .whname{
             color:#fff
         }
         .wh .whdesig{
             color:#fff;
             padding-bottom:20px
         }
         .wh .whr1{
             padding-top:40px
         }
         .wh .col-3{
             max-width: 35%;
         }



</style>
</head>
<body>






	<section class="comp" id="home">
		<center><div id="sfcd2fzf6lkgfz2qd9apc9ebfghg9qba37j"></div></center>
	<script type="text/javascript" src="https://counter9.stat.ovh/private/counter.js?c=d2fzf6lkgfz2qd9apc9ebfghg9qba37j&down=async" async></script>
	<noscript>
		<a href="#" title="web counter">
			<img src="https://counter9.stat.ovh/private/freecounterstat.php?c=d2fzf6lkgfz2qd9apc9ebfghg9qba37j" border="0" title="web counter" alt="web counter">
		</a>
	</noscript>
		<div class="container-fluid">
		<hr style="border:1px solid rgb(255 0 0)">
			<div class="row justify-content-center">
				<div class="col-md-4">
					<center class="wh">
						<img class="whimg" src="<?= base_url($tempdata['c_logo']); ?>" width="30%">
						<h3 class="whcomna"><?= $tempdata['c_name'];  ?> </h3>
						<h5 class="whname"> <?= $tempdata['first_name'];  ?> </h5>
						<h5 class="whdesig"> <?= $tempdata['designation'];  ?> </h5>
						<div class="row justify-content-center whr1">
							<div class="col-md-4 col-4">
								<p class="btn btn-danger" style="color:#fff"> <a href="tel:+91<?= $tempdata['mobile_no']; ?>" style="color: white!important;"> <i class="fa fa-phone" style="transform: rotate(90deg);"></i></a> </p>
							</div>
							<div class="col-md-4 col-4">
								<p class="btn btn-danger" style="color:#fff"><a target="_blank" href="https://wa.me/+91<?= $tempdata['whats_no']; ?>" style="color: white!important;">  <i class="fab fa-whatsapp"></i> </a> </p>
							</div>
							<div class="col-md-4 col-4">
								<p class="btn btn-danger" style="color:#fff"><a href="mailto:<?= $tempdata['email_id']; ?>" style="color: white!important;"><i class="far fa-envelope"></i></a> </p>
							</div>
						</div>

						<div class="row justify-content-center" style="padding-top:30px">
							<div class="col-md-1 col-2">
								<p class="btn btn-danger" style="border-radius: 20px;"><i class="fa fa-phone" style="transform: rotate(90deg);"></i></p>
							</div>
							<div class="col-md-5 col-6">
								<p style="text-align:left;color: black;padding: 5px 5px 5px 15px;font-size: 12px;">+91<?= $tempdata['mobile_no'];  ?> </p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-1 col-2">
								<p class="btn btn-danger" style="border-radius: 20px;"><i class="far fa-envelope" ></i></p>
							</div>
							<div class="col-md-5 col-6">
								<p style="text-align:left;color: black;padding: 5px 5px 5px 15px;font-size: 12px;"> <?= $tempdata['email_id'];  ?> </p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-1 col-2">
								<p class="btn btn-danger" style="border-radius: 20px;"><i class="far fa-map" ></i></p>
							</div>
							<div class="col-md-5 col-6">
								<p style="text-align:left;color: black;padding: 5px 5px 5px 15px;font-size: 12px;"><?= $tempdata['address']; ?></p>
							</div>
						</div>

						<div class="row justify-content-center" style="padding-top:30px">
							<div class="col-md-6 col-6">
							<a href="tel:+91<?= $tempdata['mobile_no']; ?>" >
								<p style="text-align:center;color: white;background: red;"class="fa fa-download btn btn-danger btn-block">Contacts</p>
							</a>	
							</div>
							<div class="col-md-6 col-6">
							 <p style="text-align:center;color: white;background: red;"class=" btn btn-danger fa fa-share btn-block">Share</p>
							</div>
							<div class="col-md-4 col-4" style="padding-top:30px">
					   		  <a href="https://api.whatsapp.com/send?text=<?= base_url('website/sharecardview/'.$tempdata['id']); ?>" target="_blank"> <i class="fab fa-whatsapp zoom"style="background:#444da6;padding: 10px;color: #fff;font-size: 30px;"></i>    </a>	
							</div>
							<div class="col-md-4 col-4" style="padding-top:30px">
						      <a href="https://twitter.com/send?url=<?= base_url('website/sharecardview/'.$tempdata['id']); ?>" target="_blank" >
							   <i class="fab fa-twitter zoom"style="background:#444da6;padding: 10px;color: #fff;font-size: 30px;"></i>    </a>
							</div>
							<div class="col-md-4 col-4" style="padding-top:30px">
						    	<a href="http://www.facebook.com/share.php?u=<?= base_url('website/sharecardview/'.$tempdata['id']); ?>" target="_blank" > <i class="fab fa-facebook zoom"style="background:#444da6;padding: 10px;color: #fff;font-size: 30px;"></i>   </a>
							</div>
						</div>	
					</center>
				</div>
			</div>
		</div>
	</section>

<section class="comp" >
<div class="container"> 
<div class="row" >
  <div class="col-md-12">
   <form action="<?= base_url('website/cardCompanyDetailsEdit') ?>" method="POST" enctype="multipart/form-data"> 
   <div class="row mt-2 mb-2 " id="editCardData">
              
        <div class="col-md-12 col-12">
            <center> <h2> Company Details </h2> </center>  
        </div>


   	  <div class="col-md-6 col-6 mb-2">
   	  	<label > <center> Card Type </center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
          <select class="form-select form-control" name="card_type" aria-label="Default select example">
             <option value="<?= $tempdata['card_type'];  ?>" selected><?= $tempdata['card_type']; ?></option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option> 
             <option value="5">5</option>              
             <option value="6">6</option>
          </select>   
         <input type="hidden" name="id" value="<?= $tempdata['id'] ?>" class="form-control">   	  	
      </div> 


      <!-- <div class="col-md-12 col-12"> 
       <center> 
          <img src="<?= base_url($tempdata['c_logo']); ?>" style="height: 200px;width: 200px;">   
       </center>
          </div>
      -->

   	  <div class="col-md-6 col-6 mb-2">
   	  	<label> <center>Company Logo</center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="file" name="c_logo" class="form-control" >   	
      </div>      

   	  <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> Company Name</center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="text" name="c_name" value="<?= $tempdata['c_name'] ?>" class="form-control" >   	
      </div>  

   	  <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> About Us</center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="text" name="about" value="<?= $tempdata['about'] ?>" class="form-control" >   	
      </div> 

   	  <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> First Name </center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="text" name="first_name" value="<?= $tempdata['first_name'] ?>" class="form-control" >   	
      </div> 

   	  <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> Designation </center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="text" name="designation" value="<?= $tempdata['designation'] ?>" class="form-control" >   	
      </div>

   	  <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> Mobile No </center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="text" name="mobile_no" value="<?= $tempdata['mobile_no'] ?>" class="form-control" >   	
      </div>

      <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> WhatsApp No </center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="text" name="whats_no" value="<?= $tempdata['whats_no'] ?>" class="form-control" >   	
      </div>

      <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> Email Id </center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="text" name="email_id" value="<?= $tempdata['email_id'] ?>" class="form-control" >   	
      </div>

      <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> Address </center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="text" name="address" value="<?= $tempdata['address'] ?>" class="form-control" >   	
      </div>

      <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> Website </center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="text" name="website_url" value="<?= $tempdata['website_url'] ?>" class="form-control" >   	
      </div>

      <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> PDF 1 (Max Size 5 Mb) </center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="file" name="pdf1" class="form-control" >   	
      </div>

      <div class="col-md-6 col-6 mb-2">
   	  	<label> <center> PDF 2 (Max Size 5 Mb) </center> </label>
   	  </div> 
      <div class="col-md-6 col-6 mb-2">
        <input type="file" name="pdf2" class="form-control" >   	
      </div>
   </div>  

				    		<div class="row mt-2 mb-2" id="editCardData">
                      <?php   
                          if($tempdata['social_link'] != null  ){ 
                             $social_links = json_decode($tempdata['social_link'],true); 
                         foreach ($social_links as $social) {     
                      ?>
                       <div class="col-md-12 col-12">
                          <center> <h2> Social links </h2> </center>  
                       </div>
								       <div class="col-md-6">
								       	<div class="input_box">
								       	  <p class="input_field_title">Facebook Link</p>
								       	  <input type="text" name="d_fb[]" value="<?= $social['d_fb']; ?>"  maxlength="200" placeholder="facebook Link" class="form-control">
								       	</div>	
								       </div>
								       <div class="col-md-6">
								      	<div class="input_box">
								      	   <p class="input_field_title">Twitter Link</p>
								      	   <input type="text" name="d_twitter[]" value="<?= $social['d_twitter']; ?>" maxlength="200" placeholder="Twitter Link " class="form-control">
								      	</div>	
								       </div>
							       	 <div class="col-md-6">
							       		<div class="input_box">
							       		   <p class="input_field_title">Instagram Link </p>
							       		   <input type="text"name="d_instagram[]" value="<?= $social['d_instagram']; ?>" maxlength="200"placeholder="Instagram Link" class="form-control">
							       		</div>
							       	 </div>
								<div class="col-md-6">
									<div class="input_box">
										<p class="input_field_title">LinkedIn Link</p>
										<input type="text" name="d_linkedin[]" value="<?= $social['d_linkedin']; ?>" maxlength="200" placeholder="Linked in Link" class="form-control" >
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
									<p class="input_field_title">Youtube Link</p>
									<input type="text" name="d_youtube[]" value="<?= $social['d_youtube']; ?>" maxlength="200" placeholder="Youtube Page Link" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p class="input_field_title">Pinterest Link</p>
										<input type="text" name="d_pinterest[]" value="<?= $social['d_pinterest']; ?>" maxlength="200" placeholder="Pinterest Link"  class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p class="input_field_title">Youtube Video Link (Optional)</p>
										<input type="text" maxlength="200" name="d_yt_vid1[]" value="<?= $social['d_yt_vid1']; ?>" placeholder="1st Youtube Video Link " class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p class="input_field_title">Youtube Video Link (Optional)</p>
										<input type="text" maxlength="200" name="d_yt_vid2[]" value="<?= $social['d_yt_vid2']; ?>" placeholder="2nd Youtube Video Link" class="form-control">
									</div>	
								</div>
							  <hr>	
							     <?php  } }  ?>
							</div>
				          
              <div  class="row mt-2 mb-2" id="editCardData" >
                    
               <div class="col-md-12 col-12">
                   <center> <h2> payment Details </h2> </center>  
               </div>

								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">PayTm Number</p>
										<input type="text" name="paytm_no" maxlength="20" placeholder="Paytm Number" value="<?= $tempdata['paytm_no']; ?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">PayTm Qr Code</p>
										<input class="form-control" type="file" name="paytm_qr">
									</div>	
								</div>
	

								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Google Pay Number</p>
										<input type="text" name="googlepay_no" value="<?= $tempdata['googlepay_no']; ?>" maxlength="20" placeholder="Google Pay Number" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Google Pay Qr Code</p>
										<input class="form-control" type="file" name="googlepay_qr">
									</div>	
								</div>

								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">PhonePe Number</p>
										<input type="text" maxlength="20" placeholder="PhonePe Number" value="<?= $tempdata['phoneopay_no']; ?>" name="phoneopay_no" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">PhonePe Qr Code</p>
										<input class="form-control" type="file" name="phonepay_qr">
									</div>	
								</div>
                

                <div class="col-md-12 col-12">
						     	<h4>Bank Account Details</h4>
                </div>


								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Bank Name</p>
										<input type="text" name="bank_name" value="<?= $tempdata['bank_name']; ?>" maxlength="100" placeholder="Bank Name. Ex. HDFC, SBI etc" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Account Holder Name</p>
										<input type="text" name="ac_holder_name" value="<?= $tempdata['ac_holder_name']; ?>" maxlength="100" placeholder="Account holder name" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Bank Account Number</p>
										<input type="text" name="bank_ac_no" value="<?= $tempdata['bank_ac_no']; ?>" maxlength="100" placeholder="Account Number" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Bank IFSC Code</p>
										<input type="text" name="bank_ifsc_code" value="<?= $tempdata['bank_ifsc_code']; ?>" maxlength="100" placeholder="IFSC Code" class="form-control">
									</div>	
								</div>
              </div>
               
              <div  class="row mt-2 mb-2" id="editCardData" >

               <div class="col-md-12 col-12">
                   <center> <h2> Product Details </h2> </center>  
               </div>

                	  <div class="col-md-12">
                      <div class="input_fields_wrap row mb-2">
	                    <?php   
                            $all_products = json_decode($tempdata['all_products'],true);

			                   if($all_products != null  ){ 
                            foreach ($all_products as $product){   
                       ?>
                       <div class="col-md-4 col-12">
							         <label class="input_field_title">Product Name</label>
							         <input type="text" name="pro_name[]" value="<?= $product['pro_name']; ?>" maxlength="200" placeholder="Product/Service Name" class="form-control">
							         <label class="input_field_title" >Price</label>
							         <input type="text" name="price[]" value="<?= $product['price']; ?>" maxlength="200" placeholder="Price" class="form-control">
							         <label class="input_field_title">Discount</label>
							         <input type="text" name="discount[]" value="<?= $product['discount']; ?>" maxlength="200" placeholder="Discount" class="form-control">
							         <label class="input_field_title">Product Description</label>
							         <textarea maxlength="800" placeholder="Product Description"  required="" name="pro_desp[]" class="form-control"><?= $product['pro_desp']; ?></textarea>
							         <center> <img src="<?= base_url($product['prod_img']); ?>" alt="Select image" id="showPreviewLogo1"
							          class="zoom gell_img_size" style="height: 200px;width: 200px;">  </center>
							         <label class="input_field_title">Product Image</label>
							     	  <input type="file" name="pro_img[]" id="clickMeImage1" class="form-control" onchange="readURL1(this);" accept="image/*" >
							     	 <input type="hidden" name="proPrevImage[]"  value="<?= $product['prod_img'];  ?>"  >
							     	</div> 
                      <?php   }  }   ?>
                      </div>  
                    </div>
                  </div>

                <div class="row mt-2 mb-2"  id="editCardData" >
                 
               <div class="col-md-12 col-12">
                   <center> <h2> Gallery </h2> </center>  
               </div>

                <?php   
		                 if($tempdata['gallery_img'] != null  ){ 
                     $gallery_imgs = json_decode($tempdata['gallery_img'],true);  
                     $gallery_array_length = count($gallery_imgs); 
                     for($i=0; $i < $gallery_array_length; $i++){ 
                ?>
                 <div class="col-md-4 mt-4">
                 	<!-- <label class="input_field_title">Your Images</label> -->
		                 <center> <img src="<?= base_url($gallery_imgs[$i]); ?>" alt="Select image" id="showPreviewLogo1" class="zoom gell_img_size" style="height: 200px;width: 200px;" >  </center>
									   <div class="input_box">
                     </div>
								    <input type="file" name="image[]" id="clickMeImage1"  class="form-control mt-3" onchange="readURL1(this);"  accept="image/*"  >
								     <input type="hidden" name="gelPrevImage[]"  value="<?= $gallery_imgs[$i];  ?>" >
								 </div>
                 <?php   }  }   ?>
                </div>
         <div class="col-md-12 col-12 mb-2">
             <center> <button type="submit" class="btn btn-primary"> Change </button> </center>
         </div>

   </form>
  </div> 	


</div>
</div>  	
</section>


	<?php //  $this->load->view('website/includes/footer');   ?>
<!--     <section class="footer">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 wow  fadeInUpBig animated" data-wow-duration="2s">
            <h3>Stay Connected</h3><hr style="border:1px solid white">
            <p><i class="far fa-map"></i>&nbsp;Near Classic Furniture, Sagra, Sadar, Pratapgarh Uttar Pradesh, Pin Code : 230001</p>
            <p><i class="far fa-envelope"></i>&nbsp;official@oflep.com</p>
            <p><i class="fas fa-mobile-alt"></i>&nbsp;+91-9113442865</p>
            <p><i class="fas fa-mobile-alt"></i>&nbsp;+91-6306544754</p>
          </div>
           <div class="clearfix"></div>
        </div>
      </div>
    </section> -->

    <section class="copyrights top_design" >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 wow slideInLeft" data-wow-duration="3s">
            <span>Copyrights &copy; 2022. Oflep Card. Ltd. All Rights Reserved.</span>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>


  <?php $this->load->view('website/includes/footer-links.php'); ?>
	<script src="<?= base_url('assets/website/js/lightbox.js'); ?>"></script>

	<script>
		function myFunction() {
		  var x = document.getElementById("myDIV");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction1(){
		  var x = document.getElementById("myDIV1");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction2() {
		  var x = document.getElementById("myDIV2");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction3() {
		  var x = document.getElementById("myDIV3");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction4() {
		  var x = document.getElementById("myDIV4");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction5() {
		  var x = document.getElementById("myDIV5");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction6() {
		  var x = document.getElementById("myDIV6");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction7() {
		  var x = document.getElementById("myDIV7");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction8() {
		  var x = document.getElementById("myDIV8");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction9() {
		  var x = document.getElementById("myDIV9");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction10() {
		  var x = document.getElementById("myDIV10");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
	<script>
		function myFunction11() {
		  var x = document.getElementById("myDIV11");
		  if (x.style.display != "block") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
	</script>
</body>
</html>