    <img src="<?= base_url('assets/website/images/car.jpg'); ?>" width="100%">
    <section class="pages" id="career">
      <div class="container">
       <div class="row">
        <div class="col-md-12">
          <div class="career-form">
            <h3 style="color:rgb(41, 31, 109);font-weight: bold;">Fill Your Biodata Here</h3><hr style="border:1px solid #4b00ff;">
            <form method="post">
              <label>Enter Name : </label>
              <input type="text" name="name" class="form-control my-2 py-2" placeholder="Enter Name :" required>
              <label>Enter Email : </label>
              <input type="email" name="email" class="form-control my-2 py-2" placeholder="Enter email : " required="">
              <label>Enter Phone Number : </label>
              <input type="text" name="contact" class="form-control my-2 py-2" placeholder="Enter Contact no." required="">
              <label>Enter D.O.B. : </label>
              <input type="date" name="dob" class="form-control my-2 py-2" required="">
              <label>Enter Last Qualification : </label>
              <input type="text" name="qualification" class="form-control my-2 py-2" placeholder="Enter Last Qualification:" required="">
              <label>Enter Your Experience : </label>
              <input type="text" name="experience" class="form-control my-2 py-2" placeholder="Enter Experience :" required="">
              <label>Enter Designation : </label>
              <input type="text" name="designation" class="form-control my-2 py-2" placeholder="Enter Designation" required="">
              <label>Choose Your CV/Resume : </label>
              <input type="file" name="cv" class="form-control my-2" placeholder="Choose Cv" required="">
              <div class="">
                <center><button class="btn btn-success career-btn" type="submit" name="send-cv">Submit</button></center>
              </div> 
            </form>
          </div>
        </div>
       </div>
      </div>
    </section>
    <?php $this->load->view('website/includes/footer'); ?>
    <?php $this->load->view('website/includes/footer-links.php'); ?>
  </body>
</html>