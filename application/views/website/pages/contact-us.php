<img src="<?= base_url('assets/website/images/AW_1920600-contact.jpg'); ?>" width="100%">
    <section class="pages" id="contact">

      <div class="container contactus">
        <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:rgb(41, 31, 109);font-weight: bold;"><center>Contact Us</center></h2><hr style="border:1px solid rgb(255 0 0)">
        <div class="row">
          
          <div class="col-md-6">
            <div class="Address">
              <h2 class="wow slideInRight" data-wow-duration="2s" style="color:rgb(41, 31, 109);font-weight: bold;">Official Address</h2><hr style="border:1px solid rgb(255 0 0)">
              
              <p><i style="color:rgb(41, 31, 109);" class="fa fa-map"></i>&nbsp;&nbsp;Ranchi, Jharkhand</p>
              <p><i style="color:rgb(41, 31, 109);" class="far fa-envelope"></i>&nbsp;&nbsp; oflepcard@gmail.com</p>
              <p><i style="color:rgb(41, 31, 109);" class="fas fa-mobile-alt"></i>&nbsp;+91-123456789</p>
            <p><i style="color:rgb(41, 31, 109);" class="fas fa-mobile-alt"></i>&nbsp;+91-123456789</p>
            </div>
            <div class="map">
              <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:rgb(41, 31, 109);font-weight: bold;">Google Map</h2><hr style="border:1px solid rgb(255 0 0)">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117223.79371946886!2d85.25128628737446!3d23.343189225723506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e104aa5db7dd%3A0xdc09d49d6899f43e!2sRanchi%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1645095828010!5m2!1sen!2sin" width="100%" height="2290" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:rgb(41, 31, 109);font-weight: bold;">Any Query</h2><hr style="border:1px solid rgb(255 0 0)">
            <form>
            <input type="text" name="name" placeholder="Enter Name :" required>
          <!-- </div>
          <div class="col-md-6"> -->
            <input type="email" name="email" placeholder="Enter Email :" required>
         <!--  </div>
          <div class="col-md-6"> -->
            <input type="text" name="contact" placeholder="Enter Contact No. :" required>
          <!-- </div>
          <div class="col-md-6"> -->
            <input type="text" name="subject" placeholder="Enter Subject :" required>
          <!-- </div>
          <div class="col-md-12" -->
            <textarea rows="3" placeholder="Enter Message : " required></textarea>
          <!-- </div>
          <div class="col-md-3"> -->
            <button class="btn-success" type="submit">Send Query</button>
          </div>
          <div class="clearfix"></div>
        </div>
        
        
      </div>
    </section>
    <?php $this->load->view('website/includes/footer'); ?>
    <?php $this->load->view('website/includes/footer-links.php'); ?>
  </body>
</html>