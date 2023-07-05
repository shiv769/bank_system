<div class="container" style="min-height: 45rem;">
        <div class="row" >
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    LOGIN YOUR CREDENTIALS
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post"  action="<?= base_url('website/validate_login'); ?>">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="number" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password"  class="form-control">
                            </div>

                            <div class="col-lg-12 loginbttm">
                          <center> <button type="submit"  class="btn btn-outline-primary">Login</button> </center> 
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
      </div>
      <?php $this->load->view('website/includes/footer'); ?>
    <?php $this->load->view('website/includes/footer-links.php'); ?>
     <!-- JavaScript Libraries -->
        <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script> -->
        <script src="<?= base_url('assets/website/lib/wow/wow.min.js'); ?>"></script>
        <script src="<?= base_url('assets/website/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
        <!-- <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script> -->
        <!-- Contact Javascript File -->
        <!-- <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script> -->
        <!-- Template Javascript -->
        <script src="<?= base_url('assets/website/js/main.js'); ?>"></script>
        
</html>