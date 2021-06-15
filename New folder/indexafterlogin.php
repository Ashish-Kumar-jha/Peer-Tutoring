  <!DOCTYPE html>
  <html lang="en">
    <head>
      <title>PeerTutoring</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      
      <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
      <link rel="stylesheet" href="fonts/icomoon/style.css">

      <link rel="stylesheet" href="css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="css/jquery-ui.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">

      

      <link rel="stylesheet" href="css/bootstrap-datepicker.css">

      <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" href="images/llogo.png">
<style>
header{
	position:fixed;
	top:0;
	width:100%;
}
</style>
 
      
    </head>
<?php
		session_start();
		if(isset($_SESSION['user_id'])){
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
     
      
      <header class="site-navbar py-0 js-sticky-header site-navbar-target " role="banner" style="position:fixed; background:#343A40;">
        
        <div class="container-fluid">
          <div class="d-flex align-items-center">
            <!-- <div class="site-logo mr-auto w-25"><a href="index.html">PeerTutoring</a></div> -->
<div class="site-logo "><a href="indexafterlogin.php"><img src="images/plogo.png" height="100px"></a></div>
            <div class="mx-auto text-center">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                  <li><a href="indexafterlogin.php" class="nav-link">Home</a></li>
                  <li><a href="#courses-section" class="nav-link">Courses</a></li>
                  <li><a href="#about-section" class="nav-link">About</a></li>
                  <li><a href="#teachers-section" class="nav-link">Team</a></li>
                </ul>
              </nav>
            </div>

            <div class="ml-auto w-35">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
    <li class="cta"><a href="studentprofile.php" class="nav-link"> <span>Profile</a> <a href="logout.php" class="nav-link"><span>LOGOUT</span></a></li>
                  
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
              <div class="col-12 ">
                <div class="row align-items-center">
                  <div class="col-lg-12 mb-4 container ">
                    <h1  data-aos="fade-up" data-aos-delay="100">Welcome To Peer Tutoring</h1>
                    <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Make Learning More Comfortable</p>
                    <!-- <p data-aos="fade-up" data-aos-delay="300"><a href="#contact-section" class="btn btn-primary py-3 px-5 btn-pill">Contact Us</a></p> -->
                          
                          <div class="m-auto">
                            <p data-aos="fade-up" data-aos-delay="300"><a href="#contact-section" class="btn btn-primary py-3 px-5 btn-pill">Contact Us</a></p>                    
                          </div>
               


                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      
      <div class="site-section courses-title" id="courses-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title">Courses</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row">

            <div class="owl-carousel col-12 nonloop-block-14">

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <img src="images/javan.png" alt="Image"  height="250px" width="40px" class="p-5 ">
                </figure>
                <div class="course-inner-text py-4 px-4">
                  <span class="course-price">₹20</span> 
                  <h3><a href="#">JAVA</a></h3>
                  <p>JUST ANOTHER V A </p>
                </div>
                <div class="d-flex border-top stats">
                 <a href="knowmore.php#java-section"><div class="py-3 px-4"></span>Know More</div></a>
                  <a href="booking.php#java-section"><div class="py-3 px-4 w-60 ml-auto border-left"><span class="icon-chat"></span>Book Now</div></a>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <img src="images/c++.png" alt="Image" height="250px" width="40px" class="p-5">
                </figure>
                <div class="course-inner-text py-4 px-4">
                  <span class="course-price">₹20</span>
                  <h3><a href="#">C++</a></h3>
                  <p>C PLUS PLUS </p>
                </div>
                <div class="d-flex border-top stats">
                   <a href="knowmore.php#c++-section"><div class="py-3 px-4"></span>Know More</div></a>
                  <a href="booking.php#c++-section"> <div class="py-3 px-4 w-60 ml-auto border-left"><span class="icon-chat"></span>Book Now</div></a>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                 <img src="images/html.png" alt="Image"  height="250px" width="40px" class="p-5">
                </figure>
                <div class="course-inner-text py-4 px-4">
                  <span class="course-price">₹20</span>
                  <h3><a href="#">HTML</a></h3>
                  <p>HYPER TEXT MARKUP LANGUAGE </p>
                </div>
                <div class="d-flex border-top stats">
                  <a href="knowmore.php#html-section"><div class="py-3 px-4"></span>Know More</div></a>
                  <a href="booking.php#html-section"><div class="py-3 px-4 w-60 ml-auto border-left"><span class="icon-chat"></span>Book Now</div></a>
                </div>
              </div>



              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <a href="course-single.html"><img src="images/css.png" alt="Image" height="250px" width="40px" class="p-5"></a>
                </figure>
                <div class="course-inner-text py-4 px-4">
                  <span class="course-price">₹20</span>
                  <h3><a href="knowmore.php#css-section">CSS</a></h3>
                  <p>CASCADING STYLE SHEETS </p>
                </div>
                <div class="d-flex border-top stats">
                   <a href="knowmore.php#css-section"><div class="py-3 px-4"></span>Know More</div>
                  <a href="booking.php#css-section"> <div class="py-3 px-4 w-60 ml-auto border-left"><span class="icon-chat"></span>Book Now</div></a>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                 <img src="images/sql.png" alt="Image"  height="250px" width="40px" class="p-5">
                </figure>
                <div class="course-inner-text py-4 px-4">
                  <span class="course-price">₹20</span>
                  <h3><a href="#">SQL</a></h3>
                  <p>STRUCTURED QUERY LANGUAGE</p>
                </div>
                <div class="d-flex border-top stats">
                   <a href="knowmore.php#sql-section"><div class="py-3 px-4"></span>Know More</div></a>
                   <a href="booking.php#sql-section"><div class="py-3 px-4 w-60 ml-auto border-left"><span class="icon-chat"></span>Book Now</div></a>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <img src="images/plsql.png" alt="Image"  height="250px" width="40px" class="p-5">
                </figure>
                <div class="course-inner-text py-4 px-4">
                  <span class="course-price">₹20</span>
                  <h3><a href="#">PLSQL</a></h3>
                  <p>PROCEDURAL LANGUAGE - SQL</p>
                </div>
                <div class="d-flex border-top stats">
                  <a href="knowmore.php#plsql-section"><div class="py-3 px-4"></span>Know More</div></a>
                  <a href="booking.php#plsql-section"><div class="py-3 px-4 w-60 ml-auto border-left"><span class="icon-chat"></span>Book Now</div></a>
                </div>
              </div>

            </div>

           

          </div>
          <div class="row justify-content-center">
            <div class="col-7 text-center">
              <button class="customPrevBtn btn btn-primary m-1">Prev</button>
              <button class="customNextBtn btn btn-primary m-1">Next</button>
            </div>
          </div>
        </div>
      </div>


      <div class="site-section" id="about-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title">Peer Tutoring</h2>
              <p>Peer tutoring is children helping other children to learn. Sometimes older children help younger children, while other times more able children can help less able children of the same age.</p>
            </div>
          </div>
          <div class="row mb-5 align-items-center">
            <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
              <img src="images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
              <h2 class="text-black mb-4">You Are Excellent In Education</h2>
              <p class="mb-4">“Education is for improving the lives of others and for leaving your community and world better than you found it.”</p>

<!--               <div class="d-flex align-items-center custom-icon-wrap mb-3">
                <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
                <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap">
                <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
                <div><h3 class="m-0">150 Universities Worldwide</h3></div>
              </div> -->

            </div>
          </div>

          <div class="row mb-5 align-items-center">
            <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
              <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h2 class="text-black mb-4">Is online learning effective?</h2>
              <p class="mb-4">Online Learning is Just as Effective as Traditional Education, According to a New MIT Study. More than 7.1 million students are currently taking at least one online course.</p>

<!--               <div class="d-flex align-items-center custom-icon-wrap mb-3">
                <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
                <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap">
                <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
                <div><h3 class="m-0">150 Universities Worldwide</h3></div>
              </div>
 -->
            </div>
          </div>

          <div class="row mb-5 align-items-center">
            <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
              <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
              <h2 class="text-black mb-4">Why is peer learning important?</h2>
              <p class="mb-4">Peer learning should be mutually beneficial and involve the sharing of knowledge, ideas and experience between the participants. ... They develop skills in organizing and planning learning activities, working collaboratively with others, giving and receiving feedback and evaluating their own learning.</p>

             <!--  <div class="d-flex align-items-center custom-icon-wrap mb-3">
                <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
                <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap">
                <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
                <div><h3 class="m-0">150 Universities Worldwide</h3></div>
              </div> -->

            </div>
          </div>

        </div>
      </div>

      <div class="site-section" id="teachers-section">
        <div class="container">

          <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title">Our Team</h2>
              <p class="mb-5">"None of us, including me, ever do great things. But we can all do small things, with great love, and together we can do something wonderful."</p>
            </div>
          </div>

          <div class="row">

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="teacher text-center">
                <img src="fimages/ashish.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                <div class="py-2">
                  <h3 class="text-black">Ashish</h3>
                   <p class="position">Web & Java  Developer</p>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p> -->
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="teacher text-center">
                <img src="fimages/deepak.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                <div class="py-2">
                  <h3 class="text-black">Deepak</h3>
                  <p class="position">Document Specialist</p>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p> -->
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
              <div class="teacher text-center">
                <img src="fimages/yash.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                <div class="py-2">
                  <h3 class="text-black">Yash</h3>
                  <p class="position">UI-UX</p>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

 <!--      <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-8 text-center testimony">
              <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
              <h3 class="mb-4">Jerome Jensen</h3>
              <blockquote>
                <p>&ldquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem soluta sit eius necessitatibus voluptate excepturi beatae ad eveniet sapiente impedit quae modi quo provident odit molestias! Rem reprehenderit assumenda &rdquo;</p>
              </blockquote>
            </div>
          </div>
        </div>
      </div> -->

      <div class="site-section pb-0">

        <div class="future-blobs">
          <div class="blob_2">
            <img src="images/blob_2.svg" alt="Image">
          </div>
          <div class="blob_1">
            <img src="images/blob_1.svg" alt="Image">
          </div>
        </div>
        <div class="container">
          <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
            <div class="col-lg-7 text-center">
              <h2 class="section-title">Why Peer Learning ?</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">

              <div class="p-4 rounded bg-white why-choose-us-box">

                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                  <div><h3 class="m-0">Students receive more time for individualized learning.</h3></div>
                </div>

                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                  <div><h3 class="m-0">Direct interaction between students promotes active learning.</h3></div>
                </div>

                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                  <div><h3 class="m-0">Peer teachers reinforce their own learning by instructing others.</h3></div>
                </div>

                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                  <div><h3 class="m-0">Students feel more comfortable and open when interacting with a peer.</h3></div>
                </div>

                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                  <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                  <div><h3 class="m-0">Teachers receive more time to focus on the next lesson.</h3></div>
                </div>

              </div>


            </div>
            <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
              <img src="images/person_transparent.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

      



      <div class="site-section bg-light" id="contact-section">
        <div class="container">

          <div class="row justify-content-center">
            <div class="col-md-7">


              
              <h2 class="section-title mb-3">Message Us</h2>
              <!-- <p class="mb-5">Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p> -->
            
              <form method="post" data-aos="fade" action="sendMessage.php">
                <div class="form-group row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                    <input type="text" name="first" class="form-control" placeholder="First name">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="last" class="form-control" placeholder="Last name">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <textarea class="form-control" name="message" id="" cols="30" rows="5" placeholder="Write your message here."></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    
                    <input type="submit" name="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Send Message">
                  </div>
                </div>

              </form>
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
                <li><a href="#home-section">Home</a></li>
                <li><a href="#courses-section">Courses</a></li>
                <li><a href="#about-section">About</a></li>
                <li><a href="#teachers-section">Team</a></li>
              </ul>
            </div>

            <div class="col-md-4">
              <h3>Subscribe</h3>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p> -->
              <form action="#" class="footer-subscribe">
                <div class="d-flex mb-5">
                  <input type="text" class="form-control rounded-0" placeholder="Email">
                  <input type="submit" class="btn btn-primary rounded-0"  value="Subscribe">
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
			header("location:index.php");
		}
	?>
    </body>
  </html>