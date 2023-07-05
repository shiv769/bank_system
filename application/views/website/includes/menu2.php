 
<center>
	<div class="container">
		<ul class="nav nav-pills" style="float: center;">
			<!-- <li class="nav-item  <?php if($page == 'selecttheme') { echo "active"; } ?>">
          		<a class="nav-link btn zoom" style="border:1px solid #291f6d;margin: 5px;" href="#">Select Theme</a>
        	</li> -->
        	<li class="nav-item  <?php if($page == 'compdetails') { echo "active"; } ?>">
            <a class="nav-link btn zoom" style="border:1px solid #291f6d;margin: 5px;" href="<?= base_url('website/edit_card_preview/'.$cardid); ?>" >Company Details</a>
        	</li>
        	<li class="nav-item  <?php if($page == 'sociallink') { echo "active"; } ?>">
          	<a class="nav-link btn zoom" style="border:1px solid #291f6d;margin: 5px;" href="<?= base_url('website/edit_sociallink/'.$cardid); ?>" >Social Links</a>
        	</li>
        	<li class="nav-item  <?php if($page == 'payment') { echo "active"; } ?>">
          	<a class="nav-link btn zoom" style="border:1px solid #291f6d;margin: 5px;" href="<?= base_url('website/edit_payment/'.$cardid); ?>" >Payment Option</a>
        	</li>
        	<li class="nav-item  <?php if($page == 'productser') { echo "active"; } ?>">
          	<a class="nav-link btn zoom" style="border:1px solid #291f6d;margin: 5px;" href="<?= base_url('website/edit_products/'.$cardid); ?>">Products</a>
        	</li>
        	<li class="nav-item  <?php if($page == 'gallery') { echo "active"; } ?>">
          		<a class="nav-link btn zoom" style="border:1px solid #291f6d;margin: 5px;" href="<?= base_url('website/edit_gallery/'.$cardid); ?>">Gallery</a>
        	</li>
        	<li class="nav-item  <?php if($page == 'preview') { echo "active"; } ?>">
          		<a class="nav-link btn zoom" style="border:1px solid #291f6d;margin: 5px;" href="<?= base_url('website/preview_card/'.$cardid); ?>">Preview Card</a>	
        	</li>
		</ul>	
	</div>
</center>
