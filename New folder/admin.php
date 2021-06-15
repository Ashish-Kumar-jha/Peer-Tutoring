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
      
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php
include "connection.php";
session_start();
if(isset($_SESSION['admin'])){


?>
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
            <div class="site-logo "><a href="admin.php"><img src="images/plogo.png" height="100px"></a></div>

            <div class="mx-auto text-center">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                  <li><a href="admin.php#home-section" class="nav-link">Home</a></li>
                  <li><a href="admin.php#courses-section" class="nav-link">Courses</a></li>
                  <li><a href="#team-section" class="nav-link">Team</a></li>
                  <li><a href="#tutor-section" class="nav-link">Teachers</a></li>
                  
                </ul>
              </nav>
            </div>
<!-- 
            <div class="mx-auto text-center">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                  <li><a href="#home-section" class="nav-link">Home</a></li>
                  <li><a href="#courses-section" class="nav-link">Courses</a></li>
                  <li><a href="#about-section" class="nav-link">About</a></li>
                  <li><a href="#teachers-section" class="nav-link">Team</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div> -->

            <div class="ml-auto w-25">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                  <li class="cta"><a href="logout.php?logout='set'" class="nav-link"><span>Logout</span></a></li>
                </ul>
              </nav>
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
            </div>
          </div>
        </div>
        
      </header>
<div class="row">
  <div class="col-12">
      <div class="intro-section" id="home-section">
        
        <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="row align-items-center">
                 
                  <div class="col-lg-4 mb-4">
                    <h1  data-aos="fade-up" data-aos-delay="100" class="text text-center">Peer Learners</h1>
                    <p class="mb-4 text text-center"  data-aos="fade-up" data-aos-delay="200" >Search For Peer Learners</p>
                    <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" action="SearchPeer.php" method="post">
                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    <input class="form-control form-control-sm ml-3 w-75" type="text" name="search" placeholder="Search For Peer Learners" aria-label="Search">
                   </form>
                  </div>


                  <div class="col-lg-4 mb-4">
                    <h1  data-aos="fade-up" data-aos-delay="100" class="text text-center">Peer Tutors</h1>
                    <p class="mb-4 text text-center"  data-aos="fade-up" data-aos-delay="200" class="">Search For Peer Tutors</p>
                    <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" action="SearchTutor.php" method="post">
                     <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                      <input class="form-control form-control-sm ml-3 w-75" type="text" name="search" placeholder="Search For Peer Tutors" aria-label="Search">
                   </form>
                  </div>


                  <div class="col-lg-4 mb-4">
                    <h1  data-aos="fade-up" data-aos-delay="100" class="text text-center">Booking Details</h1>
                    <p class="mb-4 text text-center"  data-aos="fade-up" data-aos-delay="200" class="">Search For Booking Id</p>
                    <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" action="SearchBooking.php" method="post">
                     <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                      <input class="form-control form-control-sm ml-3 w-75" type="text" name="search" placeholder="Search For Booking Id" aria-label="Search">
                   </form>                  
                  </div>



                  </div>
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
                  <img src="images/javan.png" alt="Image"  height="250px" width="40px" class="p-5">
                </figure>
                <div class="course-inner-text py-4 px-4">
                 
                  <h3><a href="#">JAVA</a></h3>
                  <p>JUST ANOTHER V A </p>
                </div>
                <div class="d-flex border-top stats">
                 <a href="knowmore.php#java-section">
                  <div class="py-3 px-4"></span>Know More</div>
                </a>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <img src="images/c++.png" alt="Image" height="250px" width="40px" class="p-5">
                </figure>
                <div class="course-inner-text py-4 px-4">
          
                  <h3><a href="#">C++</a></h3>
                  <p>C PLUS PLUS </p>
                </div>
                <div class="d-flex border-top stats">
                   <a href="knowmore.php#c++-section"><div class="py-3 px-4"></span>Know More</div></a>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                <img src="images/html.png" alt="Image"  height="250px" width="40px" class="p-5">
                </figure>
                <div class="course-inner-text py-4 px-4">
                  
                  <h3><a href="#">HTML</a></h3>
                  <p>HYPER TEXT MARKUP LANGUAGE </p>
                </div>
                <div class="d-flex border-top stats">
                  <a href="knowmore.php#html-section"><div class="py-3 px-4"></span>Know More</div></a>
                </div>
              </div>



              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                 <img src="images/css.png" alt="Image" height="250px" width="40px" class="p-5">
                </figure>
                <div class="course-inner-text py-4 px-4">
                  
                  <h3><a href="#">CSS</a></h3>
                  <p>CASCADING STYLE SHEETS </p>
                </div>
                <div class="d-flex border-top stats">
                   <a href="knowmore.php#css-section"><div class="py-3 px-4"></span>Know More</div></a>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <img src="images/sql.png" alt="Image"  height="250px" width="40px" class="p-5">
                </figure>
                <div class="course-inner-text py-4 px-4">
                  
                  <h3><a href="#">SQL</a></h3>
                  <p>STRUCTURED QUERY LANGUAGE</p>
                </div>
                <div class="d-flex border-top stats">
                   <a href="knowmore.php#sql-section"><div class="py-3 px-4"></span>Know More</div></a>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <img src="images/plsql.png" alt="Image"  height="250px" width="40px" class="p-5">
                </figure>
                <div class="course-inner-text py-4 px-4">
                 
                  <h3><a href="#">PLSQL</a></h3>
                  <p>PROCEDURAL LANGUAGE - SQL</p>
                </div>
                <div class="d-flex border-top stats">
                  <a href="knowmore.php#plsql-section"><div class="py-3 px-4"></span>Know More</div></a>
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






     <div class="site-section courses-title" id="tutor-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title" id="java-section">Peer Tutors</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="owl-carousel col-12 nonloop-block-14">
              		<?php
			  		$query="select * from teacherlogin";
					$res=mysqli_query($con,$query);
					if(mysqli_num_rows($res) > 0){
						while($row=mysqli_fetch_array($res)){
							$name=$row['Name'];
							$user=$row['Email'];
							$_SESSION['tutor_id']=$user;
							$img=$row['Img'];
						?>
							<div class="course bg-white h-100 align-self-stretch">
                				<figure class="m-0">
                  				<img src="<?php echo 'fimages/'.$img; ?>" alt="Image"  height="250px" width="40px" class="p-5">
                				</figure>
                				<div class="course-inner-text py-4 px-4">
                  					<h3><a href="#"><?php echo $name; ?><br>(ID:<?php echo $user;?>)</a></h3>
                  					<p><img src="fimages/logo.png" alt="Image"  height="100px" width="100px" class="p-1 px-5"></p>
                				</div>
                				
              				</div>
						<?php
						}
					}
			  ?>
              
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










      <div class="site-section" id="team-section">
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
                  <!-- <p class="position">Java Developer</p> -->
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="teacher text-center">
                <img src="fimages/deepak.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                <div class="py-2">
                  <h3 class="text-black">Deepak</h3>
                  <p class="position">Document Specialist</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
              <div class="teacher text-center">
                <img src="fimages/yash.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                <div class="py-2">
                  <h3 class="text-black">Yash</h3>
                  <p class="position">UI-UX</p>
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
                <li><a href="admin.php#home-section">Home</a></li>
                <li><a href="admin.php#courses-section">Courses</a></li>
                <li><a href="admin.php#about-section">About</a></li>
                <li><a href="admin.php#teachers-section">Team</a></li>
                <li><a href="admin.php#contact-section">contact</a></li>
              </ul>
            </div>

            <div class="col-md-4">
              <h3>Subscribe</h3>
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
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed by Ashish
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
	  	echo '<script>alert("Login first"); window.location="loginadmin.php";</script>';
	  }
	  
	  
	  ?>
    </body>
  </html>