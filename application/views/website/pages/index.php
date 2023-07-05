<?php

if(isset($_SESSION['purchage_package'])){
$purchage_package = $_SESSION['purchage_package'];  
$purchage_package = $purchage_package[0];
}



// print_r($_SESSION['purchage_package']);die;



// check , user have any package 
 if(isset($purchage_package)){
// check user have 3 or 4 package   
foreach ($purchage_package as $package){

if($package['to_package'] == 1 ){
   $_SESSION['cardok']  = 1;
}

if($package['to_package'] == 4){
   $_SESSION['cardok']  = 4;
}


}
}



?>


    <div class="banner">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url('assets/website/images/bbbbban1.jpg'); ?>" class="d-block w-100" alt="ban2">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/website/images/bbbbban1.jpg'); ?>" class="d-block w-100" alt="ban3">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/website/images/bbbbban1.jpg'); ?>" class="d-block w-100" alt="ban1">
          </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    <section class="banner-bottom">
      <div class="container">
        <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold;">Oflep Card</h2><hr style="border:1px solid rgb(255 0 0)">
        <div class="row">
          <div class="col-md-8 wow  fadeInUpBig animated" data-wow-duration="3s">
            <p>Friends, if you want to start any kind of business or startup, but you do not have enough funds, then you dont have to worry. Oflep Card" is a platform where there are many investors for your startup or business who are ready to provide financial help for your creative ideas. Our aim is to invite startup plans or bussiness ideas through Oflep Card or people starting a startup can join, to provide a reliable platform which they lack. So join us today with maximum work with minimum risk and take a new flight of your dreams.</p>
            <div class="adj-btn">
              <a href="<?= base_url('website/about'); ?>" class="btn" style="background: #291f6d; color: white;">Read More...</a>
            </div>
          </div>
          <div class="col-md-4">
            <img  class="wow slideInLeft img-fluid zoom" data-wow-duration="2s" src="<?= base_url('assets/website/images/card1.png'); ?>">
          </div>
        </div>
      </div>
    </section>

    <section class="part">
    <div class="container-fluid">
      <center><h2 style="padding-bottom: 20px;">Our Available Card Templates</h2></center>
      
      <div class="row">
        <div class="col-md-12">         
          <div class="owl-carousel owl-theme"id="carouselE">
            <div class="item">
              <center><img class="food-item zoom" src="<?= base_url('assets/website/images/img/a1.png'); ?>" width="100%" alt="dbms"></center>
            </div>
            <div class="item">
              <center><img class="food-item zoom" src="<?= base_url('assets/website/images/img/a2.png'); ?>" width="100%" alt="dbms"></center>
            </div>
            <div class="item">
              <center><img class="food-item zoom" src="<?= base_url('assets/website/images/img/a3.png'); ?>" width="100%" alt="dbms"></center>
            </div>
            <div class="item">
              <center><img class="food-item zoom" src="<?= base_url('assets/website/images/img/a4.png'); ?>" width="100%" alt="dbms"></center>
            </div>
            <div class="item">
              <center><img class="food-item zoom" src="<?= base_url('assets/website/images/img/a5.png'); ?>" width="100%" alt="dbms"></center>
            </div>
            <div class="item">
              <center><img class="food-item zoom" src="<?= base_url('assets/website/images/img/a6.png'); ?>" width="100%" alt="dbms"></center>
            </div>
            <div class="item">
              <center><img class="food-item zoom" src="<?= base_url('assets/website/images/img/a7.png'); ?>" width="100%" alt="dbms"></center>
            </div>
            <div class="item">
              <center><img class="food-item zoom" src="<?= base_url('assets/website/images/img/a8.png'); ?>" width="100%" alt="dbms"></center>
            </div>
            <div class="item">
              <center><img class="food-item zoom" src="<?= base_url('assets/website/images/img/a9.png'); ?>" width="100%" alt="dbms"></center>
            </div>
            <div class="item">
              <center><img class="food-item zoom" src="<?= base_url('assets/website/images/img/a10.png'); ?>" width="100%" alt="dbms"></center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <section class="bbcc">
      <div class="container">
        <h2 class="text-center" style="color:#291f6d;font-weight: bold;">Digital Card Is Beneficial For</h2><hr style="border:1px solid rgb(255 0 0)">
        <div class="row">
          <div class="col-md-3">
            <div class="cc zoom">
              <h5>Business Owners</h5>
              <p>Being a Digital marketer is one thing and being a Expert in it is another. We have dedicated staff handling each field of Digital Marketing..</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="cc zoom">
              <h5>Sales Professionals</h5>
              <p>Being a Digital marketer is one thing and being a Expert in it is another. We have dedicated staff handling each field of Digital Marketing.</p> 
            </div>
          </div>
          <div class="col-md-3">
            <div class="cc zoom">
              <h5>Software & IT</h5>
              <p>Being a Digital marketer is one thing and being a Expert in it is another. We have dedicated staff handling each field of Digital Marketing.</p> 
            </div>
          </div>
          <div class="col-md-3">
            <div class="cc zoom">
              <h5>Marketing Agencies</h5>
              <p>Being a Digital marketer is one thing and being a Expert in it is another. We have dedicated staff handling each field of Digital Marketing.</p> 
            </div>
          </div>

          <div class="col-md-3">
            <div class="cc zoom">
              <h5>Consultants</h5>
              <p>Being a Digital marketer is one thing and being a Expert in it is another. We have dedicated staff handling each field of Digital Marketing.</p>   
            </div>
          </div>
          <div class="col-md-3">
            <div class="cc zoom">
              <h5>Events and Travels</h5>
              <p>Being a Digital marketer is one thing and being a Expert in it is another. We have dedicated staff handling each field of Digital Marketing.</p>    
            </div>
          </div>
          <div class="col-md-3">
            <div class="cc zoom">
              <h5>Real Estate </h5>
              <p>Being a Digital marketer is one thing and being a Expert in it is another. We have dedicated staff handling each field of Digital Marketing.</p> 
            </div>
          </div>
          <div class="col-md-3">
            <div class="cc zoom">
              <h5>Education Training</h5>
              <p>Being a Digital marketer is one thing and being a Expert in it is another. We have dedicated staff handling each field of Digital Marketing.</p>      
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="food mt-0">
      <div class="container">
        <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Which Card You Want To Choose ?</h2><hr style="border:1px solid rgb(255 0 0)">
        <div class="row align-items-center">
          <div class="col-md-3">
            <a href="<?php if(isset($_SESSION['user_details'])){ 
                               if(isset($_SESSION['cardok'])){
                               if($_SESSION['cardok'] == 3){
                                echo base_url('website/select_theme'); 
                              }elseif ($_SESSION['cardok'] = 4) { 
                                  echo  base_url('website/select_theme');
                              }else{ echo base_url('website/select_theme_not_access');  }
                              }else{ echo base_url('website/select_theme_not_access');  }
                               }else{   echo base_url('website/login');  }   ?>">

              <div class="food-item zoom wow slideInRight" data-wow-duration="2s">
                  <img src="<?php echo base_url('assets/website/images/img/a1.png');  ?>" width="100%" style="border-radius: 20px;">
                  <h2 style="font-size: 16px;margin-top: 0px;" class="btn btn-danger">For Business</h2>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="<?php if(isset($_SESSION['user_details'])){ 
                               if(isset($_SESSION['cardok'])){
                               if($_SESSION['cardok'] == 3){
                                echo base_url('website/select_theme'); 
                              }elseif ($_SESSION['cardok'] = 4) { 
                                  echo  base_url('website/select_theme');
                              }else{ echo base_url('website/select_theme_not_access');  }
                              }else{ echo base_url('website/select_theme_not_access');  }
                               }else{   echo base_url('website/login');  }   ?>">
              <div class="food-item zoom wow slideInLeft" data-wow-duration="2s" >
                 <img src="<?php echo base_url('assets/website/images/img/a2.png');  ?>" width="100%" style="border-radius: 20px;">
                 <h2 style="font-size: 16px;margin-top: 0px;" class="btn btn-danger">For Personal</h2>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="<?php if(isset($_SESSION['user_details'])){ 
                               if(isset($_SESSION['cardok'])){
                               if($_SESSION['cardok'] == 3){
                                echo base_url('website/select_theme'); 
                              }elseif ($_SESSION['cardok'] = 4) { 
                                  echo  base_url('website/select_theme');
                              }else{ echo base_url('website/select_theme_not_access');  }
                              }else{ echo base_url('website/select_theme_not_access');  }
                               }else{   echo base_url('website/login');  }   ?>">
              <div class="food-item zoom wow slideInRight" data-wow-duration="2s">
                 <img src="<?= base_url('assets/website/images/img/a3.png'); ?>" width="100%" style="border-radius: 20px;">
                 <h2 style="font-size: 16px;margin-top: 0px;" class="btn btn-danger">For Commercial</h2>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="<?php if(isset($_SESSION['user_details'])){ 
                               if(isset($_SESSION['cardok'])){
                               if($_SESSION['cardok'] == 3){
                                echo base_url('website/select_theme'); 
                              }elseif ($_SESSION['cardok'] = 4) { 
                                  echo  base_url('website/select_theme');
                              }else{ echo base_url('website/select_theme_not_access');  }
                              }else{ echo base_url('website/select_theme_not_access');  }
                               }else{   echo base_url('website/login');  }   ?>" >
              <div class="food-item zoom wow slideInLeft" data-wow-duration="2s">
                  <img src="<?= base_url('assets/website/images/img/a4.png'); ?>" width="100%" style="border-radius: 20px;">
                  <h2 style="font-size: 16px;margin-top: 0px;" class="btn btn-danger">For Personal</h2>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- <section class="service">
      <div class="overlay">
        <div class="container">
          <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Some Of Our Card Styles</h2><hr style="border:1px solid rgb(255 0 0)">
          <div class="row">
            <div class="col-md-11 m-auto services">
              <div class="row">
                <div class="col-md-3 wow slideInLeft" data-wow-duration="3s">
                  <div class="service-type">
                    <img src="images/r3.jpg" alt="cctv" class="img-fluid zoom">
                    <p>Project 1</p>
                  </div>
                </div>
                <div class="col-md-3 wow  fadeInUpBig animated" data-wow-duration="2s">
                  <div class="service-type">
                    
                    <img src="images/r3.jpg" alt="cctv" class="img-fluid zoom">
                    <p>Project 2</p>
                  </div>
                </div>
                <div class="col-md-3 wow  fadeInUpBig animated" data-wow-duration="2s">
                  <div class="service-type">
                   
                    <img src="images/r3.jpg" alt="cctv" class="img-fluid zoom">
                    <p>Project 3</p>
                  </div>
                </div>
                <div class="col-md-3 wow slideInRight" data-wow-duration="3s">
                  <div class="service-type">
                    
                    <img src="images/r3.jpg" alt="cctv" class="img-fluid zoom">
                    <p>Project 4</p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<!--     <section class="testimonial">
      <div class="container">
        <h2>Testimonial</h2><hr>
        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" data-pause="false">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/dummy.png" class="d-block img-fluid" alt="ban3">
              <p>We introduce ourselves as dedicated Security and service agent duly run “Oflep Card” a registered under Government of Jharkhand and ISO 9001:2008 (QMS) & OHSAS 18001:2007 certified company.</p>
            </div>
            <div class="carousel-item">
              <img src="images/dummy.png" class="d-block img-fluid" alt="ban1">
              <p>We introduce ourselves as dedicated security and services agent duly run Parmar Services & Development a register under government of Jharkhand.Our firm as all types manpower organization as</p>
            </div>
            <div class="carousel-item">
              <img src="images/dummy.png" class="d-block img-fluid" alt="ban2">
              <p>We introduce ourselves as dedicated Security and service agent duly run “Oflep Card” a registered under Government of Jharkhand and ISO 9001:2008 (QMS) & OHSAS 18001:2007 certified company.</p>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section> -->
    <section class="faq">
      <div class="container">
        <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Frequently Asked Questions</h2><hr style="border:1px solid rgb(255 0 0)">
        <div class="accordion">
          <div class="accordion-item">
            <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">How Does Oflep Card Work ?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>After Registration on Oflep Card's portal, according to your business ideas, find a perfect and suitable investor for your business. After registration Oflep Card will help you out in reaching your destination in your StartUp</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">How To Get Register In Oflep Card ?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>For Registration just click the link <a href="https://www.oflep.com">oflep.com</a> which will redirect to our official Website .</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">In The Time Of Registration What Documents Are Mandatory ?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>
                <ul>
                  <li>Color Photograph</li>
                  <li>Address Proof</li>
                  <li>DR only for business plan creator ( In PDF Format )</li>
                  <li>Id Proof</li>
                </ul>
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How The Investor Will Get The Benefit ?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>In Oflep Card, many innovative ideas are there for your good business plans which will be provided to you. Here you can make less loss and more profit in short period of time. After investment any investor can regularly inspect and can scale his bussiness in a proper manner.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How The StartUp Creator Will Get The Benefit ?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>If you are a business planner, but financially weak & not able to start your business then if you are able to do your diligence, then there are many types of investor startup business available for you, in which it gets low risk and high profit is guaranted.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Will the downturn in the share market affect the business ?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>No, like other companies, your money will not be invested any other matter. Money will be yours and it will be invested in your bussines only. For that reason the downturn will not affect your Business.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Why Choose Oflep Card ?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>If you want to start a business and you have plans, then you will not have to go to bank for the loan. Startup in your area can also be made available for investors, and then the bussiness will be done under your supervision.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How to get any information related to Oflep Card ?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>For any other type of information you can get information through our Registered Branch Office Of Oflep Card or you can Call Us at +91-123456789 </p>
            </div>
          </div>
        </div>
      </div>  
    </section>

     
        <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" style="background: #dee4fc;">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="wow slideInLeft" data-wow-duration="2s" style="color:#291f6d;font-weight: bold; text-align: center;">Our Clients Says</h2><hr style="border:1px solid rgb(255 0 0)">
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="<?= base_url('assets/website/images/testi1.jpg'); ?>" alt="Image" width="50%!important;">
                        </div>
                        <div class="testimonial-text">
                            <p>
                               "I am pleased with the performance of Oflep Card. The management responds quickly to questions and needs"
                            </p>
                            <h3>Satya Singh</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="<?= base_url('assets/website/images/testi1.jpg'); ?>" alt="Image" width="50%!important;">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                "I am pleased with the performance of Oflep Card. The management responds quickly to questions and needs"
                            </p>
                            <h3>Amit Singh</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="<?= base_url('assets/website/images/testi1.jpg'); ?>" alt="Image" width="50%!important;">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                "I am pleased with the performance of Oflep Card. The management responds quickly to questions and needs"
                            </p>
                            <h3>Rahul Singh</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="<?= base_url('assets/website/images/testi1.jpg'); ?>" alt="Image" width="50%!important;">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                "I am pleased with the performance of Oflep Card. The management responds quickly to questions and needs"
                            </p>
                            <h3>Piyush Singh</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $this->load->view('website/includes/footer'); ?>
    <?php $this->load->view('website/includes/footer-links.php'); ?>
    <script src="<?= base_url('assets/website/owlcarousel/owl.carousel.min.js'); ?>"></script>

   <script>
      $(document).ready(function(){
        var owl = $('#carouselE');
        owl.owlCarousel({
            loop:true,
            nav:false,
            margin:10,
            autoplay:true,
            autoplayTimeout:1000,
            responsive:{
                0:{
                    items:1
                },
                375:{
                    items:2
                },
                600:{
                    items:3
                },            
                960:{
                    items:6
                },
                1200:{
                    items:8
                }
            }
        });
      });
    </script>
     
        <script src="<?= base_url('assets/website/lib/wow/wow.min.js'); ?>"></script>
        <script src="<?= base_url('assets/website/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
        <script src="<?= base_url('assets/website/js/main.js'); ?>"></script>
        <script type="text/javascript">
          const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
        </script>
</html>