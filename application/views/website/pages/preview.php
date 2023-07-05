<?php  
$temedataid =  $cardid; 
$tempdata = $this->db->get_where('card_details',array('id'=>$temedataid))->row_array();
// print_r($_SESSION['user_details']['userid']);die;
$social_links = json_decode($tempdata['social_link'],true);
// echo "<pre>";
// print_r($social_links['d_yt_vid2']);die;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta  property="og:title" content="<?= $tempdata['about']; ?>" />
    <meta  property="og:image" content="<?= base_url($tempdata['c_logo']); ?>"  />
	<meta  property="og:url"  content="<?= base_url('website/sharecardview/'.$tempdata['id']); ?>" />
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


	<?php 
	             if($tempdata['card_type'] == 1){
                 	$card_bg = base_url('assets/website/images/img/cardtheme/a1.png');
                 }elseif($tempdata['card_type'] == 2){
                 	$card_bg = base_url('assets/website/images/img/cardtheme/a2.png');  
                 }elseif($tempdata['card_type'] == 3){
                 	$card_bg = base_url('assets/website/images/img/cardtheme/a3.png');  
                 }elseif($tempdata['card_type'] == 4){
                 	$card_bg = base_url('assets/website/images/img/cardtheme/a4.png');  
                 }else{
                 	$card_bg = base_url('assets/website/images/img/cardtheme/a4.png');	
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
		<center> <div id="sfcd2fzf6lkgfz2qd9apc9ebfghg9qba37j"></div> </center>
	<script type="text/javascript" src="https://counter9.stat.ovh/private/counter.js?c=d2fzf6lkgfz2qd9apc9ebfghg9qba37j&down=async" async></script>
	<noscript>
		<a href="#" title="web counter">
			<img src="https://counter9.stat.ovh/private/freecounterstat.php?c=d2fzf6lkgfz2qd9apc9ebfghg9qba37j" border="0" title="web counter" alt="web counter">
		</a>
	</noscript>
		<div class="container-fluid">
			<h3 class="wow slideInLeft" data-wow-duration="2s" style="color:rgb(41, 31, 109);font-weight: bold; text-align: center;">Your Card Is Here <a href="<?= base_url('website/edit_card_preview/'.$tempdata['id']); ?>">Edit Card</a>  </h3>  <hr style="border:1px solid rgb(255 0 0)">
			<div class="row justify-content-center">
				<div class="col-md-4">
					<center class="wh">
					  <img class="whimg" src="<?= base_url($tempdata['c_logo']); ?>" width="30%">
						<h3 class="whcomna"><?= $tempdata['c_name'];  ?> </h3>
						<h5 class="whname"> <?= $tempdata['first_name'];  ?> </h5>
						<h5 class="whdesig"> <?= $tempdata['designation'];  ?> </h5>
						<div class="row justify-content-center whr1">
							<div class="col-md-4 col-4">
								<p class="btn btn-danger"> 
								 <a href="tel:+91<?= $tempdata['mobile_no']; ?>" style="color: white!important;"> <i class="fa fa-phone" style="transform: rotate(90deg);"></i></a>
								 </p>
							</div>
							<div class="col-md-4 col-4">
								  <p class="btn btn-danger"> 
									<a target="_blank" href="https://wa.me/+91<?= $tempdata['whats_no']; ?>" style="color: white!important;"> <i class="fab fa-whatsapp"></i> </a> 
								 </p>
							</div>
							<div class="col-md-4 col-4">
								<p class="btn btn-danger"><a href="mailto:<?= $tempdata['email_id']; ?>" style="color: white!important;"><i class="far fa-envelope"></i></a> </p>
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
							<a href="tel:+91<?= $tempdata['mobile_no']; ?>" ><p style="text-align:center;color: white;background: red;"class="fa fa-download btn btn-danger btn-block">Contacts</p></a>	
							</div>
							<div class="col-md-6 col-6">
                           <p style="text-align:center;color: white;background: red;"class=" btn btn-danger fa fa-share btn-block"> 
                           <a href="https://api.whatsapp.com/send?text=<?= base_url('website/sharecardview/'.$tempdata['id']); ?>" target="_blank" style="color: white;">Share</a></p>
							</div>

							<div class="col-md-4 col-4" style="padding-top:30px">
					   		  <a href="https://api.whatsapp.com/send?text=<?= base_url('website/sharecardview/'.$tempdata['id']); ?>" target="_blank"> <i class="fab fa-whatsapp zoom"style="background:#444da6;padding: 10px;color: #fff;font-size: 30px;"></i> </a>	
							</div>

							<div class="col-md-4 col-4" style="padding-top:30px">
						      <a href="https://twitter.com/send?url=<?= base_url('website/sharecardview/'.$tempdata['id']); ?>" target="_blank" >
							       <i class="fab fa-twitter zoom" style="background:#444da6;padding: 10px;color: #fff;font-size: 30px;"></i> </a>
							</div>

							<div class="col-md-4 col-4" style="padding-top:30px">
						    	<a href="http://www.facebook.com/share.php?u=<?= base_url('website/sharecardview/'.$tempdata['id']); ?>" target="_blank" >
						    	       <i class="fab fa-facebook zoom"style="background:#444da6;padding: 10px;color: #fff;font-size: 30px;"></i>     </a>
							</div>
						</div>	
					</center>
				</div>
			</div>
		</div>
	</section>

	<section class="abt" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
			   <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">About Us</h2><hr style="border:1px solid rgb(255 0 0)">
			     <p style="text-align:justify;"> <?= $tempdata['about']; ?> </p>
				</div>
				<div class="col-md-6">
				   <h2 class="wow slideInRight" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Scan QR Code</h2>
					 <hr style="border:1px solid rgb(255 0 0);">
				   <center>					
				     <img src='<?= base_url($tempdata['qrcode']); ?>' alt="Select image" id="showPreviewLogo1" class="zoom" onclick="clickFocus(1)" width="50%">
				   </center>
				</div>
			</div>
		</div>
	</section>

	<section class="produc" id="pro">
		<div class="container">
			<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Products</h2><hr style="border:1px solid rgb(255 0 0)">
			<div class="row">
                    <?php   
                       $all_products = json_decode($tempdata['all_products'],true);
                       if($all_products != null  ){ 
                       foreach ($all_products as $product) {     
                    ?>
			        	<div class="col-md-3 col-12">
			        		<div class="card zoom">
			        			<img src="<?= base_url($product['prod_img']); ?>" class="card-img-top" alt="...">
			        		  	<div class="card-body">
			        		    	<h5 class="card-title"><?= $product['pro_name']; ?></h5>
			        		    	<p>Product Details</p>
			        				<p class="card-text"><?= $product['pro_desp']; ?></p>
			        		    	<div class="row">
			        		    		<div class="col-md-12 col-12">
			        		            <span><strike style="color: red"> &#8377; <?= $product['price']; ?> </strike></span>
			        		            <span style="color: green">	&#8377; <?= $product['discount']; ?></span>
					    		        </div>	
			        		    		<div class="col-md-6 col-6">
			        		    			<a href="https://wa.me/+91<?= $tempdata['mobile_no']; ?>?text=<?php echo "Product name ="; echo $product['pro_name']; echo ", Product Details = "; echo $product['pro_desp'];  echo ", Product Price = "; echo $product['discount']; echo ", Buy Now";  ?>" target="_blank" class="btn btn-danger btn-sm btn-block">Buy</a>
			        		    		</div>
			        		    		<div class="col-md-6 col-6">
			        		    			<a href="https://wa.me/+91<?= $tempdata['mobile_no']; ?>?text=<?php echo "Product name ="; echo $product['pro_name']; echo ", Product Details = "; echo $product['pro_desp'];  echo ", Product Price = "; echo $product['discount']; echo ", Order Now"; ?>" target="_blank" class="btn btn-danger btn-sm btn-block">Order</a>
			        		    		</div>
			        		    	</div>
			        		  	</div>
			        		</div>
			        	</div>
                    <?php  } }else{  ?>    
                    <h3 class="center"> No Products </h3>
		        <?php  }  ?>    	
			</div>
		</div>
	</section>
	<section class="produc youtubeflag" id="youtube">
		<div class="container">
			<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Youtube Videos</h2><hr style="border:1px solid rgb(255 0 0)">
			<div class="row">
		    <?php  
             $youtubeflag = 0;
             $social_links = json_decode($tempdata['social_link'],true);
			 if($social_links['d_yt_vid1'] != null || $social_links['d_yt_vid1'] != ''){ 
			 $youtubeflag = 1;
			  $array_langth = count($social_links['d_yt_vid1']);
              for ($i=0; $i < $array_langth; $i++) {
                  // print_r($social_links['d_yt_vid1'][$i]);die;
            ?>
           <div class="col-md-4 col-12" style="margin-top: 10px;">
             <iframe width="100%" height="345" src="<?= $social_links['d_yt_vid1'][$i]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
           </div>   
            <?php   }   }  ?>    
           <?php  
			 if($social_links['d_yt_vid2'] != null || $social_links['d_yt_vid2'] != ''){ 
			  $youtubeflag = 1; 	
              $array_langth = count($social_links['d_yt_vid2']);
              for ($i=0; $i < $array_langth; $i++) {
            ?>
           <div class="col-md-4 col-12" style="margin-top: 10px;">
             <iframe width="100%" height="345" src="<?= $social_links['d_yt_vid2'][$i]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
           </div>   
            <?php    }    }    ?>   
			</div>
		</div>
	</section>
  
	<section class="produc" id="gal">
		<div class="container">
        <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Image Gallery</h2><hr style="border:1px solid rgb(255 0 0)">
        <div class="row">  
	      <?php  
	      $gal = 0; 
          $gallery_imgs = json_decode($tempdata['gallery_img'],true);  
		  if($tempdata['gallery_img'] != null){
			$gal = 1; 
			$gallery_array_length = count($gallery_imgs); 
          for($i=0; $i < $gallery_array_length; $i++){ 
          ?>
          <div class="col-md-3 col-12">
            <div class="gallery-image">
              <a href="<?= base_url($gallery_imgs[$i]); ?>" data-lightbox="image-1" data-title="">
              	<img src="<?= base_url($gallery_imgs[$i]); ?>" alt="gallery1" class="img-fluid zoom">
              </a>
            </div>
          </div>
	     <?php  } }else{   ?>    
           <h3 class="center"> No Gallery </h3>
         <?php   }   ?>   
            <div class="clearfix"></div>
        </div>
      </div>
	</section>

	<section class="produc" id="pay">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Payment Details</h2><hr style="border:1px solid rgb(255 0 0)">
					<div class="input_box">
					      <p style="color:rgb(41, 31, 109);font-weight: bold;">PayTm Number : <span style="color:black;font-weight: 500;"><?= $tempdata['paytm_no'];  ?></span></p>
					</div>
					<div class="input_box">
						<p style="color:rgb(41, 31, 109);font-weight: bold;">Google Pay Number : <span style="color:black;font-weight: 500;"><?= $tempdata['googlepay_no'];  ?></span></p>
					</div>
					<div class="input_box">
						<p style="color:rgb(41, 31, 109);font-weight: bold;">PhonePay Number : <span style="color:black;font-weight: 500;"><?= $tempdata['phoneopay_no'];  ?></span></p>
					</div>
					<h4>Bank Account Details</h4>
					<div class="input_box">
						  <p style="color:rgb(41, 31, 109);font-weight: bold;">Bank Name : <span style="color:black;font-weight: 500;"><?= $tempdata['bank_name'];  ?></span></p>
					</div>
					<div class="input_box">
						<p style="color:rgb(41, 31, 109);font-weight: bold;">Account Holder Name : <span style="color:black;font-weight: 500;"><?= $tempdata['ac_holder_name'];  ?></span></p>
					</div>
					<div class="input_box">
						<p style="color:rgb(41, 31, 109);font-weight: bold;">Bank Account Number : <span style="color:black;font-weight: 500;"><?= $tempdata['bank_ac_no'];  ?></span></p>
					</div>
					<div class="input_box">
						<p style="color:rgb(41, 31, 109);font-weight: bold;">Bank IFSC Code : <span style="color:black;font-weight: 500;"><?= $tempdata['bank_ifsc_code'];  ?></span></p>
					</div>
				</div>
				<div class="col-md-6">
					<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Scan To Google Pay</h2><hr style="border:1px solid rgb(255 0 0)">
					<center>
						<img src="<?php  if($tempdata['googlepay_qr'] == '' ){ echo base_url('assets/website/images/img/dummy.png'); }else{ echo base_url($tempdata['googlepay_qr']); } ?>" alt="Select image" class="zoom" width="50%">
					</center>
				</div>


	            <div class="col-md-6">
					<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Scan To Phone Pay</h2><hr style="border:1px solid rgb(255 0 0)">
					<center>
						<img src="<?php  if($tempdata['phonepay_qr'] == '' ){ echo base_url('assets/website/images/img/dummy.png'); }else{ echo base_url($tempdata['phonepay_qr']); } ?>" alt="Select image" class="zoom" width="50%">
					</center>
				</div>

	            <div class="col-md-6">
					<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Scan To Paytm</h2><hr style="border:1px solid rgb(255 0 0)">
					<center>
						<img src="<?php  if($tempdata['paytm_qr'] == '' ){ echo base_url('assets/website/images/img/dummy.png'); }else{ echo base_url($tempdata['paytm_qr']); } ?>" alt="Select image" class="zoom" width="50%">
					</center>
				</div>




			</div>
		</div>
	</section>

	<section class="produc  mmb" id="feed">
		<div class="container">
			<div class="row">
				
				<div class="col-md-6 mb-3">
					<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Feedback Rating</h2><hr style="border:1px solid rgb(255 0 0)">
					<form action="#" method="POST">
						<div class="row">
							<div class="col-md-6">
								<div class="input_box">
									<p style="color:rgb(41, 31, 109);font-weight: bold;">Name</p>
									<input class="form-control" name="name" id="rating_name" type="text" maxlength="20" placeholder="Enter Name" required>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="input_box">
									<p style="color:rgb(41, 31, 109);font-weight: bold;">Email Id</p>
									<input class="form-control" type="email" id="rating_email" name="email" maxlength="100" placeholder="Email Address" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input_box">
									<p style="color:rgb(41, 31, 109);font-weight: bold;">Feedback</p>
									<textarea type="text" maxlength="800" name="feedback" id="rating_feedback" placeholder="About Your Feedback"  required class="form-control"></textarea>
								</div>	
							</div>
						</div>
                        <div class="col-md-12 mt-3 mb-5">
                        	<div class="input_box">
                              <input type="hidden" name="userid" id="rating_userid" value="<?= $tempdata['userid']; ?>">				
                             <input type="hidden" name="card_id" id="rating_card_id" value="<?= $tempdata['id']; ?>">		
						     <input type="hidden" name="rating" id="rated" class="rating" value="">
                            <center style="margin-top: 10px;margin-bottom: 10px;">
							    <i class="fa fa-star" id="rate1" > </i>
                                <i class="fa fa-star" id="rate2" > </i>
                                <i class="fa fa-star" id="rate3" > </i>
                                <i class="fa fa-star" id="rate4" > </i>
                                <i class="fa fa-star" id="rate5" > </i>
							</center>		
                        	</div> 
                        </div>
						<input class="form-control btn btn-success" id="submit_raing" type="button" value="submit">
					</form>	
				</div>

				<div class="col-md-6 mb-3">
					<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Contact Us</h2><hr style="border:1px solid rgb(255 0 0)">
					<form action="#">
						<div class="row">
							<div class="col-md-6">
								<div class="input_box">
									<p style="color:rgb(41, 31, 109);font-weight: bold;">Name</p>
								     <input type="hidden" name="userid" id="con_userid" value="<?= $tempdata['userid']; ?>">		
									<input type="hidden" name="card_id" id="con_card_id" value="<?= $tempdata['id']; ?>">		
									<input class="form-control" type="text" name="name" id="con_name" maxlength="20" placeholder="Enter Name" required>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="input_box">
									<p style="color:rgb(41, 31, 109);font-weight: bold;">Mobile No</p>
									<input class="form-control" type="number" name="mob_no" id="con_mob_no" maxlength="100" placeholder="Mobile No" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input_box">
									<p style="color:rgb(41, 31, 109);font-weight: bold;">Email Id</p>
									<input class="form-control" type="email"  name="email" id="con_email" maxlength="100" placeholder="Email Address" required>
								</div>
							</div>
							<div class="col-md-12 mb-2">
								<div class="input_box">
									<p style="color:rgb(41, 31, 109);font-weight: bold;">Any Querry</p>
									<textarea type="text" maxlength="800" name="enquery" id="con_enquery" placeholder="About Your Querry"  required class="form-control"></textarea>
								</div>	
							</div>
						</div>
						<input class="form-control btn btn-success" type="button" id="con_submit" value="submit">
					</form>	
				</div>
			</div>
		</div>
	</section>

	
	<?php  //  $this->load->view('website/includes/footer');   ?>

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
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script>
$(document).ready(function(){

   var youtubeflag = '<?= $youtubeflag; ?>';
    // alert(youtubeflag);
   if(youtubeflag == 1){
   	 $('.youtubeflag').show();
   }else{
   	 $('.youtubeflag').hide();
   }
   
  var gal = '<?= $gal; ?>';
    // alert(youtubeflag);
   if(gal == 1){
   	 $('#gal').show();
   }else{
   	 $('#gal').hide();
   }
   





       $('body').on('click','#submit_raing',function(){
         // debugger;
       	  var userid=$("#rating_userid").val();
          var name=$("#rating_name").val();
          var email=$("#rating_email").val();
          var feedback=$("#rating_feedback").val();
          var card_id=$("#rating_card_id").val();
          var rating=$(".rating").val(); 
        $.ajax({
            url: "<?= base_url('website/card_feedback_data'); ?>",
            type: "POST",
            data: {
            	userid:userid,
                name: name,
                email: email,
                feedback:feedback,
                card_id:card_id,
                rating:rating
            },
           success:function(data){
           	   if(data == 1){
              	 alert("Rating Data Saved!!");
           	   }
                location.reload(true);
               }
        });
    });


    $('body').on('click','#con_submit',function() {
        var userid=$("#con_userid").val();	
        var card_id=$('#con_card_id').val();  
        var name=$('#con_name').val(); 
        var mob_no=$('#con_mob_no').val();
        var email=$('#con_email').val();
        var enquery=$('#con_enquery').val();  
        $.ajax({
            url: "<?= base_url('website/card_enquiry_data'); ?>",
            type: "POST",
            data: {
                userid:userid,
            	card_id:card_id,
                name:name,
                mob_no:mob_no,
                email:email,
                enquery:enquery
            },
           success:function(data){
           	   if(data == 1){
              	 alert("Enquiry Data Saved!!");
           	   }
                location.reload(true);
               }
        });

    });


    $('body').on('click','#rate1',function(){
            var rating = 1; 
            $('#rated').val(rating);
            if(rating == 1){
             $('#rate1').css('color','orange');
             $('#rate2').css('color','gray');
             $('#rate3').css('color','gray');              
             $('#rate4').css('color','gray');              
             $('#rate5').css('color','gray');	
            }
    });
     $('body').on('click','#rate2',function(){
            var rating = 2;
              $('#rated').val(rating);
              if(rating == 2){
              $('#rate1').css('color','orange');
              $('#rate2').css('color','orange');
              $('#rate3').css('color','gray');              
              $('#rate4').css('color','gray');              
              $('#rate5').css('color','gray');
              }
    });
 $('body').on('click','#rate3',function(){
            var rating = 3;
            $('#rated').val(rating);
            if(rating == 3){
              $('#rate1').css('color','orange');
              $('#rate2').css('color','orange');
              $('#rate3').css('color','orange');              
              $('#rate4').css('color','gray');              
              $('#rate5').css('color','gray');
              }
    });
 $('body').on('click','#rate4',function(){
            var rating = 4;
              $('#rated').val(rating);
              if(rating == 4){
              $('#rate1').css('color','orange');
              $('#rate2').css('color','orange');
              $('#rate3').css('color','orange');              
              $('#rate4').css('color','orange');              
              $('#rate5').css('color','gray');
            }
    });
 $('body').on('click','#rate5',function(){
            var rating = 5;
            $('#rated').val(rating);
             if(rating == 5){
              $('#rate1').css('color','orange');
              $('#rate2').css('color','orange');
              $('#rate3').css('color','orange');              
              $('#rate4').css('color','orange');              
              $('#rate5').css('color','orange');
             }
    });
});
</script>







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
		function myFunction1() {
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