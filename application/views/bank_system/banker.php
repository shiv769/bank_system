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
                       <th scope="col">user key</th>
                       <th scope="co">Email</th>
                       <th scope="col">All Transaction</th>
            
                       <th scope="col">Created at</th>
                     </tr>
                   </thead>
                   <tbody>
                  <?php if(!empty($allCustomers)){  $i=0; 
                    foreach($allCustomers as $row){ $i++;        ?>
                     <tr>
                       <th> <?= $i; ?></th>
                       <td><?= $row['user_key']; ?></td>
                       <td><?= $row['email']; ?></td>
                       <td> 
                        <form action="<?= base_url('bank_system/alltansaction'); ?>" method="post">
                           <input type="hidden" name="user_key" value="<?= $row['user_key']; ?>"> 
                           <input type="submit" name="alltrans" value="Show" class="btn btn-success">  
                        </form> 
                      </td>
               
                       <td><?= date('Y-m-d H:i:s',strtotime($row['created_at'])); ?></td>
                                         
                     </tr>
                  <?php  }  }  ?>

                   </tbody>
           </table>
     </div>
   </div>
 </section>
 