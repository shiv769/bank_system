
 <section>
   <div class="container">
     <div class="row mt-5">

        <ul class="nav justify-content-end">
         <li class="nav-item">
           <a href="<?= base_url('bank_system/logout'); ?>" class="btn  nav-link btn-success" style="color: white;">Login</a>
         </li>
        </ul>

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

 