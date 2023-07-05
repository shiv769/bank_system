<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                        	<div class="col-md-12 col-lg-12 table-responsive">
                            	<table class="table data-table table-bordered text-center">
                                 <thead>
                                   <tr>    
                                       <th>#</th>  
                                       <th> Card Id </th>  
                                       <th> Userid </th>  
                                       <th> Card Type </th> 
                                       <th> Company Logo </th>  
                                       <th> About </th> 
                                       <th> Name </th> 
                                       <th> Designation </th>
                                       <th> Mobile No </th>
                                       <th> Whatsapp No </th>  
                                       <th> Email Id </th> 
                                       <th> Address </th> 
                                       <th> Website url </th>
                                       <th> PDF1 </th>
                                       <th> PDF2 </th>  
                                       <th> Social link </th> 
                                       <th> Paytm No </th> 
                                       <th> Paytm QR </th>
                                       <th> Googlepay No </th>
                                       <th> Googlepay QR  </th> 
                                       <th> Phonepay No </th> 
                                       <th> Phonepay QR </th>
                                       <th> Bank Name </th>
                                       <th> Account Holder Name </th> 
                                       <th> Bank Account No </th> 
                                       <th> Bank IFSC Code </th> 
                                       <th> All Products </th> 
                                       <th> Gallert's All  Image </th> 
                                       <th> Created At </th>                                       
                                   </tr>
                                 </thead>
                                 <tbody>
                                    <?php if(!empty($all_cards)){  $i=0; 
                                     foreach($all_cards as $card){ $i++;      ?>
                                   <tr>
                                    <th><?= $i; ?></th>
                                    <td><?= $card['id']; ?></td>
                                    <td><?= $card['userid']; ?></td>
                                    <td><?= $card['card_type']; ?></td>
                                    <td> <img src="<?= base_url($card['c_logo']); ?>" style="height: 100px;width: 100px;"> </td>
                                    <td><?= $card['about']; ?></td>
                                    <td><?= $card['first_name']; ?></td>
                                    <td><?= $card['designation']; ?></td>
                                    <td><?= $card['mobile_no']; ?></td>
                                    <td><?= $card['whats_no']; ?></td>
                                    <td><?= $card['email_id']; ?></td>
                                    <td><?= $card['address']; ?></td>
                                    <td><?= $card['website_url']; ?></td>
                                    <td><?= $card['pdf1']; ?></td>
                                    <td><?= $card['pdf2']; ?></td>
                                    <td>
                                     <form method="post" action="<?php echo base_url('adminpages/sociallink'); ?>">
                                     <input type="hidden" name="id" value="<?= $card['id']; ?>">  
                                     <button type="submit" class="btn btn-primary"> <i class="fa fa-eye" ></i>  </button>
                                     </form> 
                                    </td>
                                    <td><?= $card['paytm_no']; ?></td>
                                    <td><img src="<?= base_url($card['paytm_qr']); ?>" style="height: 100px;width: 100px;"> </td>
                                    <td><?= $card['googlepay_no']; ?></td>
                                    <td><img src="<?= base_url($card['googlepay_qr']); ?>" style="height: 100px;width: 100px;"> </td>
                                    <td><?= $card['phoneopay_no']; ?></td>
                                    <td><img src="<?= base_url($card['phonepay_qr']); ?>" style="height: 100px;width: 100px;"> </td>  
                                    <td><?= $card['bank_name']; ?></td>
                                    <td><?= $card['ac_holder_name']; ?></td>
                                    <td><?= $card['bank_ac_no']; ?></td>
                                    <td><?= $card['bank_ifsc_code']; ?></td>
                                    <td>
                                       <form method="post" action="<?php echo base_url('adminpages/Product_details'); ?>">
                                       <input type="hidden" name="id" value="<?= $card['id']; ?>">  
                                       <button type="submit" class="btn btn-primary"> <i class="fa fa-eye" ></i>  </button>
                                       </form>   
                                    </td>
                                    <td> <a href="<?php echo base_url('adminpages/gallery_imgs/'.$card['id']); ?>" class="btn btn-primary"> <i class="fa fa-eye" ></i></a> </td>
                                    <td><?= date('d-m-Y',strtotime($card['created_at'])); ?></td> 
                                  </tr>
                                     <?php  }  }  ?>
                                 </tbody>
                                </table>
                            </div>
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