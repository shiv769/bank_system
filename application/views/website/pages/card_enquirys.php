<?php  
// echo "<pre>";
// print_r($all_enquiry_data);die;
?>

    <section class="pages" id="contact">
      <div class="container contactus">

                <div class="row">
                  <div class="col-md-12 col-lg-12 table-responsive">
                    <table class="table data-table table-bordered text-center">
                       <thead>
                         <tr>    
                             <th>#</th>  
                             <th> Card Id </th>  
                             <th> Name </th>
                             <th> Mobile No </th> 
                             <th> Email </th> 
                             <th> Enquiry </th> 
                             <th> Created At </th>  
                             <!-- <th> Remove <th>                                 -->
                         </tr>
                       </thead>
                       <tbody>
                          <?php if(!empty($all_enquiry_data)){  $i=0; 
                           foreach($all_enquiry_data as $enquiry){ $i++;      ?>
                         <tr>
                          <th><?= $i; ?></th>
                          <td><?= $enquiry['card_id']; ?></td>
                          <td><?= $enquiry['name']; ?></td>
                          <td><?= $enquiry['mob_no']; ?></td>
                          <td><?= $enquiry['email']; ?></td>     
                          <td><?= $enquiry['enquery']; ?></td>
                          <td><?= date('d-m-Y',strtotime($enquiry['created_at'])); ?></td>
                     <!-- <td> <a href="<?= base_url('website/quiry_remove_it/'.$enquiry['id']); ?>" class="btn btn-primary"> <i class="fa fa-trash"></i>  </a>   </td>   -->
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