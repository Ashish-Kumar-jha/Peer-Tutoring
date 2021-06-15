  <!DOCTYPE html>
  <html lang="en">
    <head>
      <title>PeerTutoring</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=josefin+Sans&display=swap">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
      <link rel="stylesheet" href="fonts/icomoon/style.css">

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/jquery-ui.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">

      <link rel="stylesheet" href="css/jquery.fancybox.min.css">

      <link rel="stylesheet" href="css/bootstrap-datepicker.css">

      <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

      <link rel="stylesheet" href="css/aos.css">

      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" href="images/llogo.png">


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
<script type="text/javascript">
  $(function(){
    $("#datepicker1").datepicker();
});
</script>

<script type="text/javascript">
  $(function(){
    $("#datepicker2").datepicker();
});
</script>
<style>
  .fa {
    color: white !important;
}
</style>

      
    </head>
<?php
session_start();
if(isset($_SESSION['user_id'])){
$tutor=$_GET['peer'];

?>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    
    <div class="site-wrap">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
     
      
      <header class="site-navbar py-0 js-sticky-header site-navbar-target" role="banner" style="position:fixed; background:#343A40;>
        
        <div class="container-fluid">
          <div class="d-flex align-items-center">
            <!-- <div class="site-logo mr-auto w-25"><a href="index.html">PeerTutoring</a></div> -->
            <div class="site-logo "><a href="indexafterlogin.php"><img src="images/plogo.png" height="100px"></a></div>

            <div class="mx-auto text-center">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                  <li><a href="indexafterlogin.php#home-section" class="nav-link">Home</a></li>
                  <li><a href="indexafterlogin.php#courses-section" class="nav-link">Courses</a></li>
                  <li><a href="indexafterlogin.php#about-section" class="nav-link">About</a></li>
                  <li><a href="indexafterlogin.php#teachers-section" class="nav-link">Team</a></li>
                  <li><a href="indexafterlogin.php#contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

              <div class="ml-auto w-35">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                  <li class="cta"><a href="studentprofile.php" class="nav-link"> <span>Profile</span></a> <a href="logout.php?logout='set'" class="nav-link"> <span>LOGOUT</span></a></li>
                  
                </ul>
              </nav>
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
            </div>
          </div>
        </div>
        
      </header>

      <div class="intro-section" id="home-section">
        
        <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="row align-items-center">
                  <div class="col-lg-6 mb-4">
                    <h1  data-aos="fade-up" data-aos-delay="100">Book Your Peer&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></h1>
                    <!-- <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Peer learning pedagogy is part of an active learning strategy</p> -->
                   <!--  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Best kind of learning happens when students are left alone</p> -->
<!--                     <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Peer learning can reduce fear of judgement, increase confidence</p>
                   <p class="mb-4"  data-aos="fade-up" data-aos-delay="200"><span class="badge badge-danger">Important</span>Write your skype id for video call</p>
 -->
                   <p class="mb-4"  data-aos="fade-up" data-aos-delay="200"><span class="badge badge-danger">Important</span>Write your skype id or your active contact no for Audio call or Video call with question</p>
                <div class="row">
                   <div col="col-12 col-lg-4">

<!--                         <span><p><i class="fa fa-phone fa-1x" aria-hidden="true"></i> - AUDIO      <span class="badge badge-warning">20/hr</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-tv fa-1x" aria-hidden="true"></i> - VIDEO         <span class="badge badge-warning">30/hr</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-user"></i> - OFFLINE  <span class="badge badge-warning">50/hr</span></p></span><br>
 -->


                  </div>
                </div>                       
                    
                  </div>

                  <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                    <form action="Payment.php" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4 text-center">Booking Details</h3>

               <div class="px-3 py-1 mt-2 text text-center ">
                  <label class="radio-inline"><input type="radio" name="optradio" value="Audio" checked>Audio</label>&nbsp;&nbsp;
                  <label class="radio-inline"><input type="radio" name="optradio" value="Video">Video</label>&nbsp;&nbsp;
                  <label class="radio-inline"><input type="radio" name="optradio" value="Offline">Offline</label>
               </div>
                      <div class="form-group">
                        <label>Starting Date</label>
						<input type="hidden" name="tutor" value="<?php echo $tutor; ?>">
						<input type="text" name="startDate" class="form-control" placeholder="Starting Date"  id="datepicker1">
                      </div>
                      <div class="form-group">
					  	<label>Upto</label>
                        <input type="text" name="endDate" class="form-control" placeholder="Upto"  id="datepicker2">
                      </div>
                      <div class="form-group row">
                        <div class="col-md-12">
                          <textarea class="form-control" name="ask" id="" cols="30" rows="3" placeholder="What You Want to Ask ?....."></textarea>
                        </div>
                       </div>
                      <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-pill text-center" value="Pay">
                      </div>
                    </form>

                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      
      
       
      <footer class="footer-section bg-white">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>Peer Tutoring</h3>
              <p>Peer tutoring is children helping other children to learn. Sometimes older children help younger children, while other times more able children can help less able children of the same age.</p>
            </div>

            <div class="col-md-3 ml-auto">
              <h3>Links</h3>
              <ul class="list-unstyled footer-links">
                <li><a href="indexafterlogin.php#home-section">Home</a></li>
                <li><a href="indexafterlogin.php#courses-section">Courses</a></li>
                <li><a href="indexafterlogin.php#about-section">About</a></li>
                <li><a href="indexafterlogin.php#teachers-section">Team</a></li>
                <li><a href="indexafterlogin.php#contact-section">contact</a></li>
              </ul>
            </div>

            <div class="col-md-4">
              <h3>Subscribe</h3>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p> -->
              <form action="#" class="footer-subscribe">
                <div class="d-flex mb-5">
                  <input type="text" class="form-control rounded-0" placeholder="Email">
                  <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
                </div>
              </form>
            </div>

          </div>

          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
              <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed by Ashish
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
              </div>
            </div>
            
          </div>
        </div>
      </footer>

    
      
    </div> <!-- .site-wrap -->

    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
	 <script src="js/aos.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
<?php
}
else{
	echo '<script>alert("Login First"); window.location="index.php"</script>';
}
?>
    </body>
  </html>