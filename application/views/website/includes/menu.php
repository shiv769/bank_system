<?php 
// if(!isset($_GET['page']) || $_GET['page']==''){
//   $page='home';
// }else{
//   $page=$_GET['page'];
// }
?>


<section class="top-strip">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <span><i class="fas fa-mobile-alt"></i> &nbsp;&nbsp;+91-9113442865</span>
      </div>
      <div class="col-md-4">
        <span><i class="far fa-envelope"></i>&nbsp;&nbsp;oflepcard@gmail.com</span>
      </div>
      <div class="col-md-4">
        <div class="social-icon">
          <span><i class="fab fa-facebook-f"></i>&nbsp;&nbsp;<i class="fab fa-whatsapp"></i>&nbsp;&nbsp;<i class="fab fa-instagram"></i>&nbsp;&nbsp;<i class="fab fa-twitter">&nbsp;&nbsp;<i class="fab fa-youtube"></i></i></span>
        </div>
      </div>
      
      <div class="clearfix"></div>
    </div>
  </div>
</section>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url('assets/website/images/oflepcard_logo2.png'); ?>" style="max-width: 100px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
        <li class="nav-item <?php if($page == 'home') { echo "active"; } ?>" >
          <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item  <?php if($page == 'about') { echo "active"; } ?>">
          <a class="nav-link" href="<?= base_url('website/about'); ?>">About Us</a>
        </li>
        <li class="nav-item <?php if($page == 'career') { echo "active"; } ?>">
          <a class="nav-link" href="<?= base_url('website/career'); ?>">Career</a>
        </li>
        
        <li class="nav-item <?php if($page == 'contact') { echo "active"; } ?>">
          <a class="nav-link" href="<?= base_url('website/contact'); ?>">Contact Us</a>
        </li>
        <li class="nav-item <?php if($page == 'login') { echo "active"; } ?>">
         <?php  if(isset($_SESSION['user_details']) ){   ?>
          <a class="nav-link" href="<?= base_url('website/logout'); ?>">LogOut</a>
           <?php   }else{  ?>
          <a class="nav-link" href="<?= base_url('website/login'); ?>">Login</a>
           <?php  }  ?>  
        </li>
        <li class="nav-item">
          <?php  if(isset($_SESSION['user_details']) ){   ?>
         <a class="nav-link" href="<?= base_url('website/all_your_cards'); ?>">Your All Card</a>
           <?php   }else{  ?>
         <a class="nav-link" href="#">Your All Card</a>
           <?php  }  ?>  
        </li>
        <li class="nav-item">
          <a class="nav-link btn" data-toggle="modal" data-target="#exampleModal" style="color: #290000;background: #e68734;" href="">Get Started</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choose Your Card Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post" enctype="multipart/form-data" onsubmit="window.alert('Your CV is uploaded Successfuly!')">
          <input type="text" name="name" placeholder="Name :" class="form-control py-4 mb-3" required="">
          <input type="tel" maxlength="10" name="Mobile No" placeholder="Mobile No :" class="form-control py-4 mb-3" required="">
          <input type="text" name="address" placeholder="Address :" class="form-control py-4 mb-3" required="">
          <div class="form-group">
                  <select id="cars" name="cars" class="form-control">
                    <option>CHOOSE SERVICE TYPE</option>
                    <option>For Business</option>
                    <option>For Personal</option>
                  </select>
                </div>
          <textarea name="address" placeholder="Remark :" class="form-control py-4 my-3" required></textarea>
          <button type="submit" class="my-4 btn btn-success btn-lg btn-block" name="Sendcv">Send</button>
        </form>
      </div>
      
    </div>
  </div>
</div>

