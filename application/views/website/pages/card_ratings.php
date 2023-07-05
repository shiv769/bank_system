<?php  
	// echo "<pre>";
	// print_r($all_rating_data);die;


?>   
<section class="pages" id="contact">
      <div class="container contactus">

                <div class="row">
                  <div class="col-md-12 col-lg-12 table-responsive-xl">
                    <table class="table data-table table-bordered text-center">
                       <thead>
                         <tr>    
                             <th>#</th>  
                             <th> Card Id </th>  
                             <th> Name </th>
                             <th> Email </th>
                             <th> Feedback </th>   
                             <th> Rating </th> 
                             <th> Created At </th>  
                             <!-- <th> Remove <th>   -->
                         </tr>
                       </thead>
                       <tbody>
                          <?php if(!empty($all_rating_data)){  $i=0; 
                           foreach($all_rating_data as $rating){ $i++;      ?>
                         <tr>
                          <th><?= $i; ?></th>
                          <td><?= $rating['card_id']; ?></td>
                          <td><?= $rating['name']; ?></td>
                          <td><?= $rating['email']; ?></td> 
                          <td><?= $rating['feedback']; ?></td>
                          <td><?= $rating['rating']; ?></td>
                          <td><?= date('d-m-Y',strtotime($rating['created_at'])); ?></td>
                          <!-- <td> <a href="<?= base_url('website/rating_remove_it/'.$rating['id']); ?>" class="btn btn-primary"> <i class="fa fa-trash"></i>  </a>   </td> -->
                        </tr>
                           <?php  }  }  ?>
                       </tbody>
                      </table>
                  </div>
                </div>
      </div>
    </section>
    <?php $this->load->view('website/includes/footer'); ?>
    <?php $this->load->view('website/includes/footer-links.php'); ?>
  </body>
</html>