<?php $this->load->view('website/includes/menu1.php'); ?>
<section class="comp">
	<div class="container">
		<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:rgb(41, 31, 109);font-weight: bold; text-align: center;">All Your Social Links</h2><hr style="border:1px solid rgb(255 0 0)">
			<div class="row">
				<div class="col-md-12">
					<div class="compde">
						<form action="<?= base_url('website/save_sociallink'); ?>" method="post" enctype="multipart/form-data">
							<div class="row m-1">
								<div class="col-md-6">
									<div class="input_box">
									  <p class="input_field_title">Facebook Link</p>
									  <input type="text" name="d_fb" maxlength="200" placeholder="facebook Link" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
									   <p class="input_field_title">Twitter Link</p>
									   <input type="text" name="d_twitter" maxlength="200" placeholder="Twitter Link " class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
									   <p class="input_field_title">Instagram Link </p>
									   <input type="text"name="d_instagram" maxlength="200"placeholder="Instagram Link" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p class="input_field_title">LinkedIn Link</p>
										<input type="text" name="d_linkedin" maxlength="200" placeholder="Linked in Link" class="form-control" >
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
									<p class="input_field_title">Youtube Link</p>
									<input type="text" name="d_youtube" maxlength="200" placeholder="Youtube Page Link" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p class="input_field_title">Pinterest Link</p>
										<input type="text" name="d_pinterest" maxlength="200" placeholder="Pinterest Link"  class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p class="input_field_title">Youtube Video Link (Optional)</p>
										<input type="text" maxlength="200" name="d_yt_vid1[]" placeholder="1st Youtube Video Link " class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="input_box">
										<p class="input_field_title">Youtube Video Link (Optional)</p>
										<input type="text" maxlength="200" name="d_yt_vid2[]" placeholder="2nd Youtube Video Link" class="form-control">
									</div>	
								</div>
							  <hr>	
							</div>
                           <div class="col-md-12">
                           <div class="input_fields_wrap mb-2">	
                           </div>
                            <hr> <button class="add_field_button btn btn-secondary mb-1">Add More</button>
                           </div>
			          <button type="submit" class="form-control btn btn-success">Submit</button>   	
				  </form>	
					</div>
  				</div>	
			</div>
		</div>
	</section>

	<?php $this->load->view('website/includes/footer'); ?>
    <?php $this->load->view('website/includes/footer-links.php'); ?>

<script type="text/javascript">
  $(document).ready(function() {
  var max_fields  = 100; //maximum input boxes allowed
  var wrapper   = $(".input_fields_wrap"); //Fields wrapper
  var add_button  = $(".add_field_button"); //Add button ID
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
   e.preventDefault();
   if(x < max_fields){     //max input box allowed
     x++;   //text box increment
     $(wrapper).append('<div class="row"><div class="col-md-6"><div class="input_box"><p class="input_field_title">Youtube Video Link (Optional)</p><input type="text" maxlength="200" name="d_yt_vid1[]" placeholder="1st Youtube Video Link " class="form-control"></div></div><div class="col-md-6"><div class="input_box"><p class="input_field_title">Youtube Video Link (Optional)</p><input type="text" maxlength="200" name="d_yt_vid2[]" placeholder="2nd Youtube Video Link" class="form-control"></div></div><hr><a href="#" class="remove_field">Remove</a></div>');  //add input box
   }
  });
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>

</body>
</html>