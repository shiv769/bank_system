






 <section>
   <div class="container">
     <div class="row mt-5">
       <div class="col-md-12 col-12 mt-3">
           <h3 class="text-center"> User / Banker Login </h3>
       </div>
   </div>
   <div class="row justify-content-center mt-5"> 
       <div class="col-md-6 col-12 mt-3">
         <form class="row g-3" method="post" action="<?= base_url('bank_system/logincheck'); ?>">
          <div class="col-md-12 col-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" placeholder="Enter Your Email!!" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-12 col-12">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password"  placeholder="Enter Your password!!" class="form-control" id="inputPassword4">
          </div>
          <div class="col-md-12 col-12">
          <center>
            <input type="submit" class="btn btn-primary" name="Sign_in" value="Sign in">
          </center> 
          </div>
         </form>
       </div>
     </div>
   </div>
 </section>

























