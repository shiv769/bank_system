<?php
$all_products = $all_Product_details['all_products'];
$all_product = json_decode($all_products,true);
//  echo "<pre>";
//  print_r($all_product);die;
?>
<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                         <div class="row">
                               <?php if(!empty($all_product)){  $i=0; 
                                foreach($all_product as $product){ $i++;  ?>         
     	                         <div class="col-md-3 col-6">
			                    		<div class="card zoom">
			                    			<img src="<?= base_url($product['prod_img']); ?>" class="card-img-top" alt="...">
			                    		  	<div class="card-body">
			                    		    	<h5 class="card-title"> <?= $product['pro_name']; ?> </h5><br>
			                    		    	<button onclick="myFunction()" class="btn btn-danger">Product Details</button>
			                    				<p id="myDIV" class="card-text"><?= $product['pro_desp']; ?></p>
			                    		    	<div class="row">
			                    		    		<div class="col-md-12 col-12">
			                    		            <span><strike style="color: red"> &#8377; <?= $product['price']; ?> </strike></span>
			                    		            <span style="color: green">	&#8377; <?= $product['discount']; ?></span>
				            	    		        </div>	
			                    		    		<div class="col-md-6 col-6">
			                    		    			<p class="btn btn-danger btn-sm btn-block">Buy</p>
			                    		    		</div>
			                    		    		<div class="col-md-6 col-6">
			                    		    			<p class="btn btn-danger btn-sm btn-block">Order</p>
			                    		    		</div>
			                                	</div>
			                    		  	</div>
			                    		</div>
			                    	</div>
                                 <?php  }  }  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
  </section>    
<script>
  $(document).ready(function(e){
     var table=$('.data-table').DataTable({
         scrollCollapse: true,
         autoWidth: false,
         responsive: true,
         columnDefs: [{
             targets: "no-sort",
             orderable: false,
         }],
         "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
         "language": {
             "info": "_START_-_END_ of _TOTAL_ entries",
             searchPlaceholder: "Search"
         },
     });
  }); 
</script>