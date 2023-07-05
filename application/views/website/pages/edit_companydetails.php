<?php $this->load->view('website/includes/menu2.php'); ?>
<?php
$CardDatails = $this->Website_model->get_where_data('card_details',array('id'=>$cardid));
 //    echo "<pre>"; 
 // print_r($CardDatails);die;
?>
    <section class="comp">
		<div class="container">
		   <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:rgb(41, 31, 109);font-weight: bold; text-align: center;">Company Details</h2><hr style="border:1px solid rgb(255 0 0)">
			<div class="row">
				<div class="col-md-12">
					<div class="compde">
						<form action="<?= base_url('website/edit_company_details'); ?>" method="post" enctype="multipart/form-data">
							<div class="input_box">
							   <center>   
							         <h4>LOGO</h4>
                                 <img src="<?= base_url($CardDatails['c_logo']); ?>"  style="height:100px;width: 100px;">
							   </center>
							</div>
							<div class="input_box">
							 <p style="color:rgb(41, 31, 109);font-weight: bold;"> Company Logo <span class="text-danger">*</span></p>
							 <input type="hidden" name="cardid" value="<?= $cardid; ?>">
							 <input class="form-control" type="file" name="c_logo" accept="image/*" rquired>
							</div>
                            <div class="input_box">
							 <p style="color:rgb(41, 31, 109);font-weight: bold;"> Company Name <span class="text-danger">*</span></p>
							 <input class="form-control" type="text" name="c_name" value="<?= $CardDatails['c_name']; ?>" accept="image/*" rquired>
							</div>
							<div class="input_box">
							 <p style="color:rgb(41, 31, 109);font-weight: bold;"> About Us <span class="text-danger">*</span> </p>
							 <textarea maxlength="800" name="about"  placeholder="About your company/business"  required="" class="form-control"><?= $CardDatails['about']; ?></textarea>
							</div>	
							<div class="row">
								<div class="col-md-6">
									<div class="input_box">
									  <p style="color:rgb(41, 31, 109);font-weight: bold;"> First Name
								        <span class="text-danger">*</span> </p>
									  <input class="form-control" name="first_name"  value="<?= $CardDatails['first_name']; ?>" type="text" maxlength="20" placeholder="Enter First Name" required>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
									 <p style="color:rgb(41, 31, 109);font-weight: bold;">Designation <span class="text-danger">*</span> </p>
									 <input class="form-control" name="designation" value="<?= $CardDatails['designation']; ?>" type="text" maxlength="20" placeholder="Enter Position/Designation (Ex. Manager etc.)"required>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input_box">
									  <p style="color:rgb(41, 31, 109);font-weight: bold;">Mobile No <span class="text-danger">*</span></p>
									  <input class="form-control" name="mobile_no" value="<?= $CardDatails['mobile_no']; ?>" type="number" maxlength="12" placeholder="Enter Mobile No" required>  
									</div>		
								</div>
								<div class="col-md-6">
									<div class="input_box">
									 <p style="color:rgb(41, 31, 109);font-weight: bold;">WhatsApp No <span class="text-danger">*</span> </p>
									 <input class="form-control" value="<?= $CardDatails['whats_no']; ?>" name="whats_no" type="number" maxlength="13" placeholder="Enter WhatsApp Number" required>
									</div>	
								</div>
							</div>
							<div class="input_box">
								<p style="color:rgb(41, 31, 109);font-weight: bold;">Email Id <span class="text-danger">*</span> </p>
								<input class="form-control" type="email" name="email_id" value="<?= $CardDatails['email_id']; ?>" maxlength="100" placeholder="Email Address" required>
							</div>
							<div class="input_box">
								<p style="color:rgb(41, 31, 109);font-weight: bold;">Address <span class="text-danger">*</span> </p>
								<textarea maxlength="200" name="address"    placeholder="Full Address"  required="required" class="form-control"><?= $CardDatails['address']; ?></textarea>
							</div>
							<div class="input_box">
								<p style="color:rgb(41, 31, 109);font-weight: bold;">Website</p>
								<input class="form-control" name="website_url" value="<?= $CardDatails['website_url']; ?>" type="text" maxlength="200" placeholder="Website (Optional)" >
							</div>
							<div class="row" style="display: none;">
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">PDF 1 (Max Size 5 Mb)(only PDF) </p>
										<input class="form-control" type="file" name="pdf1" accept="application/pdf" >
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">PDF 2 (Max Size 5 Mb)(only PDF) </p>
										<input class="form-control" type="file" name="pdf2" accept="application/pdf" >
									</div>	
								</div>
							</div>
                            <button type="submit" class="form-control btn btn-success">Change</button>
						</form>	
					</div>
  				</div>	
			</div>
		</div>
	</section>
	<?php $this->load->view('website/includes/footer'); ?>
    <?php $this->load->view('website/includes/footer-links'); ?>
</body>
</html>