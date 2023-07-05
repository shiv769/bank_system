	<?php $this->load->view('website/includes/menu1.php'); ?>
	<div class="food mt-0">
      	<div class="container">
        	<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;"> Which Card You Want To Choose ? </h2>
			<hr style="border:1px solid rgb(255 0 0)">
        	<div class="row align-items-center">
          		<div class="col-md-3">
          			<a href="<?= base_url('website/select_theme_data/1'); ?>">
          				<div class="food-item zoom wow slideInRight" data-wow-duration="2s">
                			<img src="<?= base_url('assets/website/images/img/a1.png'); ?>" width="100%" style="border-radius: 20px;">
                			<h2 style="font-size: 16px;margin-top: 0px;" class="btn btn-danger">For Business</h2>
              			</div>	
          			</a>
            	</div>
          		<div class="col-md-3">
            		<a href="<?= base_url('website/select_theme_data/2'); ?>">
              			<div class="food-item zoom wow slideInLeft" data-wow-duration="2s" >
                			<img src="<?= base_url('assets/website/images/img/a2.png'); ?>" width="100%" style="border-radius: 20px;">
                			<h2 style="font-size: 16px;margin-top: 0px;" class="btn btn-danger">For Personal</h2>
              			</div>
            		</a>
          		</div>
          		<div class="col-md-3">
            		<a href="<?= base_url('website/select_theme_data/3'); ?>">
              			<div class="food-item zoom wow slideInRight" data-wow-duration="2s">
                			<img src="<?= base_url('assets/website/images/img/a3.png'); ?>" width="100%" style="border-radius: 20px;">
                			<h2 style="font-size: 16px;margin-top: 0px;" class="btn btn-danger">For Commercial</h2>
              			</div>
            		</a>
          		</div>
          		<div class="col-md-3">
            		<a href="<?= base_url('website/select_theme_data/4'); ?>">
              			<div class="food-item zoom wow slideInLeft" data-wow-duration="2s">
                			<img src="<?= base_url('assets/website/images/img/a4.png'); ?>" width="100%" style="border-radius: 20px;">
                			<h2 style="font-size: 16px;margin-top: 0px;" class="btn btn-danger">For Personal</h2>
              			</div>
            		</a>
          		</div>
        	</div>
      	</div>
    </div>
	<?php $this->load->view('website/includes/footer'); ?>
    <?php $this->load->view('website/includes/footer-links.php'); ?>
</body>
</html>