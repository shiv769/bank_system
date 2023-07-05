<?php $this->load->view('website/includes/menu1.php'); ?>
	
	<section class="comp">
		<div class="container">
			<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:rgb(41, 31, 109);font-weight: bold; text-align: center;">All Your Products</h2><hr style="border:1px solid rgb(255 0 0)">
			<div class="row">
				<div class="col-md-12">
					<div class="compde">
						<form action="<?= base_url('website/save_all_products'); ?>" method="post" enctype="multipart/form-data">
							<div class="row">
                 <div class="col-md-12">
                 <div class="input_fields_wrap row mb-2">
                  <div class="col-md-4">
							    <label class="input_field_title">Product Name</label>
							    <input type="text" name="pro_name[]" maxlength="200" placeholder="Product/Service Name" class="form-control">
							    <label class="input_field_title" >MRP Price</label>
							    <input type="text" name="price[]" maxlength="200" placeholder="MRP Price" class="form-control">
							    <label class="input_field_title">Selling Price</label>
							    <input type="text" name="discount[]" maxlength="200" placeholder="Selling Price" class="form-control">
							    <label class="input_field_title">Product Description</label>
							    <textarea maxlength="800" placeholder="Product Description" required="" name="pro_desp[]" class="form-control"></textarea>
							    <label class="input_field_title">Product Image</label>
								  <input type="file" name="pro_img[]" id="clickMeImage1" class="form-control" onchange="readURL1(this);" accept="image/*" >
								</div> 
               </div>    <hr>
               <button class="add_field_button btn btn-secondary mb-1">Add More</button>
               </div>
							</div>
               <button class="form-control btn btn-success" type="submit">Submit</button>
						</form>	
					</div>
  				</div>	
			</div>
		</div>
	</section>

	<?php $this->load->view('website/includes/footer'); ?>
  <?php $this->load->view('website/includes/footer-links.php'); ?>

<script type="text/javascript">
	function clickFocus(vbl){
	  $('#clickMeImage'+vbl).click();
     }
</script>

<script type="text/javascript">
  $(document).ready(function() {
  var max_fields  = 100; //maximum input boxes allowed
  var wrapper   = $(".input_fields_wrap"); //Fields wrapper
  var add_button  = $(".add_field_button"); //Add button ID
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){     //max input box allowed
         x++;              //text box increment
      $(wrapper).append('<div class="col-md-4"><label class="input_field_title">Product Name</label><input type="text" name="pro_name[]" maxlength="200" placeholder="Product/Service Name" value=""class="form-control"><label  class="input_field_title">MRP Price</label><input type="text" name="price[]" maxlength="200" placeholder="MRP Price" value=""class="form-control"><label  class="input_field_title">Selling Price</label><input type="text" name="discount[]" maxlength="200" placeholder="Selling Price" value=""class="form-control"><label  class="input_field_title">Product Description</label><textarea type="text" name="pro_desp[]" maxlength="800" placeholder="Product Description" required="" class="form-control"></textarea><label  class="input_field_title">Product Image</label><input type="file" name="pro_img[]" id="clickMeImage2" class="form-control" accept="image/*"><hr><a href="#" class="remove_field">Remove</a></div>');   //add input box
    }
  });
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>



</body>
</html>