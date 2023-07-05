<?php  
//          echo "<pre>";
// print_r($tran_historys);die;
?>



 <section>
   <div class="container">
     <div class="row mt-5">
       
<ul class="nav justify-content-end">
 
  <li class="nav-item">
    <a href="<?= base_url('bank_system/logout'); ?>" class="btn  nav-link btn-success" style="color: white;">Login</a>
  </li>
</ul>


       <div class="col-md-6 col-12  mt-3">
         <!-- Button trigger modal -->
          
         <center>
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1"> Deposit </button>  
         </center> 
       </div>
       <div class="col-md-6 col-12  mt-3">
         <center>  
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2"> Withdraw </button>
         </center> 
       </div>
     </div>
   <div class="row justify-content-center mt-5"> 
           <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">So. No</th>
                       <th scope="col">txn key</th>
                       <th scope="col">user key</th>
                       <th scope="col">Amount</th>
                       <th scope="col">txn type</th>
                       <th scope="col">Created at</th>
                     </tr>
                   </thead>
                   <tbody>
                  <?php if(!empty($tran_historys)){  $i=0; 
                    foreach($tran_historys as $row){ $i++;      ?>
                     <tr>
                       <th> <?= $i; ?></th>
                       <td><?= $row['txn_key']; ?></td>
                       <td><?= $row['user_key']; ?></td>
                       <td><?= $row['amount']; ?></td>
                       <td><?= $row['txn_type']; ?></td>
                       <td><?= date('Y-m-d H:i:s',strtotime($row['created_at'])); ?></td>
                                         
                     </tr>
                  <?php  }  }  ?>

                   </tbody>
           </table>
     </div>
   </div>
 </section>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Deposit </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <h4>Total Balance : <?php echo $tot_cr - $tot_dr; ?></h4>
        <form action="<?= base_url('bank_system/deposit'); ?>" method="POST" >  
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="amount" placeholder="Amount!!" aria-label="Amount!!"  aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Deposit</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
 </div>
 

 <!-- Modal -->
 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Withdraw </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <h4>Total Balance : <?php echo $tot_cr - $tot_dr; ?></h4>
        <form action="<?= base_url('bank_system/withdraw'); ?>" method="POST" >  
           <div class="input-group mb-3">
              <input type="text" class="form-control" name="amount" placeholder="Amount!!" aria-label="Amount!!" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Withdraw</button>
           </div>
        </form>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>
