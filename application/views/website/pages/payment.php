<?php $this->load->view('website/includes/menu1.php'); ?>

	<section class="comp">
		<div class="container">
			<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:rgb(41, 31, 109);font-weight: bold; text-align: center;">Payment Details</h2><hr style="border:1px solid rgb(255 0 0)">
			<div class="row">
				<div class="col-md-12">
					<div class="compde">
						<form action="<?=  base_url('website/save_payment_details');  ?>" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">PayTm Number</p>
										<input type="text" name="paytm_no" maxlength="20" placeholder="Paytm Number" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">PayTm Qr Code</p>
										<input class="form-control" type="file" name="paytm_qr">
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Google Pay Number</p>
										<input type="text" name="googlepay_no" maxlength="20" placeholder="Google Pay Number" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Google Pay Qr Code</p>
										<input class="form-control" type="file" name="googlepay_qr">
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">PhonePe Number</p>
										<input type="text" maxlength="20" placeholder="PhonePe Number" name="phoneopay_no" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">PhonePe Qr Code</p>
										<input class="form-control" type="file" name="phonepay_qr">
									</div>	
								</div>
							</div>
							<h4>Bank Account Details</h4>
							<div class="row">
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Bank Name</p>
										<input type="text" name="bank_name" maxlength="100" placeholder="Bank Name. Ex. HDFC, SBI etc" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Account Holder Name</p>
										<input type="text" name="ac_holder_name" maxlength="100" placeholder="Account holder name" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Bank Account Number</p>
										<input type="text" name="bank_ac_no" maxlength="100" placeholder="Account Number" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p style="color:rgb(41, 31, 109);font-weight: bold;">Bank IFSC Code</p>
										<input type="text" name="bank_ifsc_code" maxlength="100" placeholder="IFSC Code" class="form-control">
									</div>	
								</div>
							</div>
							  <button type="Submit" class="form-control btn btn-success" >Submit</button>  
						</form>	
					</div>
  				</div>	
			</div>
		</div>
	</section>	

	<?php $this->load->view('website/includes/footer'); ?>
    <?php $this->load->view('website/includes/footer-links.php'); ?>
</body>
</html>