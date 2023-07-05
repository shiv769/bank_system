    <section class="pages" id="contact">
      <div class="container contactus">
 
    <div class="row">
     <div class="col-md-6 mb-3">
     <center>  <a href="<?= base_url('website/card_ratings'); ?>" class="btn btn-primary"> All Card's Rating </a> </center>  
     </div>
     <div class="col-md-6 mb-3">
         <center> <a href="<?= base_url('website/card_enquirys'); ?>" class="btn btn-primary">All Card's Enquiry Data</a></center>  
     </div>
    </div>

                <div class="row">
                  <div class="col-md-12 col-lg-12 table-responsive">
                    <table class="table data-table table-bordered text-center">
                       <thead>
                         <tr>    
                             <th>#</th>  
                             <th> Card Id </th>  
                             <th> Card Type </th> 
                             <th> Created At </th>    
                             <th> Preview </th>      
                             <th> Edit </th>
                             <th> Remove <th>  
                         </tr>
                       </thead>
                       <tbody>
                          <?php if(!empty($yourAllCardDatails)){  $i=0; 
                           foreach($yourAllCardDatails as $card){ $i++;      ?>
                         <tr>
                          <th><?= $i; ?></th>
                          <td><?= $card['id']; ?></td>
                          <td><?= $card['card_type']; ?></td>
                          <td><?= date('d-m-Y',strtotime($card['created_at'])); ?></td>
                          <td><a href="<?= base_url('website/card_preview/'.$card['id']); ?>" class="btn btn-primary"> <i class="fa fa-eye"></i></a></td> 
                          <td><a href="<?= base_url('website/edit_card_preview/'.$card['id']); ?>" class="btn btn-primary"> <i class="fa fa-edit"></i></a></td>
                          <td><span  data-id="<?= $card['id']; ?>" class="conformdeleteit btn btn-primary" > <i class="fa fa-trash"></i> </span> </td>   
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
 $(document).ready(function(){

 
$('body').on('click','.conformdeleteit',function(){
       // debugger;
          var cardid = $(this).data('id');
       // Ask for confirmation
          const confirmed = confirm('Are you sure you want to delete this Card?');
       // Check if user confirmed
       if (confirmed) {
        $.ajax({
            url: "<?= base_url('website/card_remove_it'); ?>",
            type: "POST",
            data: {
                cardid: cardid
            },
           success:function(data){
                 location.reload(true); 
             }
         });
       }
    });

 

});


</script>