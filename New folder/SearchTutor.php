  <!DOCTYPE html>
  <html lang="en">
    <head>
      <title>PeerTutoring</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      
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

      <!-- <link rel="stylesheet" href="css/style.css"> -->
      <link rel="stylesheet" href="css/profile.css">
      <link rel="icon" href="images/llogo.png">
      
    </head>
<?php
include "connection.php";
session_start();
if(isset($_SESSION['admin'])){
	$email=$_POST['search'];
	$query="select * from teacherlogin where Email='$email'";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_array($res);
		$name=$row['Name'];
		$college=$row['College'];
		$subject=$row['Subject'];
		$mobile=$row['Mobile_No'];
		$book=$row['Booked'];
		$file1=$row['College_ID'];
		$file2=$row['Img'];
		$file3=$row['Resume'];
	
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
     
      
      <header class="site-navbar py-0 js-sticky-header site-navbar-target" role="banner" style="position:fixed; background:#343A40;">
        
        <div class="container-fluid">
          <div class="d-flex align-items-center">
<div class="site-logo "><a href="admin.php"><img src="images/plogo.png" height="100px"></a></div>
            <div class="mx-auto text-center">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                  <li><a href="admin.php#home-section" class="nav-link">Home</a></li>
                  <li><a href="admin.php#courses-section" class="nav-link">Courses</a></li>
                  <li><a href="admin.php#about-section" class="nav-link">About</a></li>
                  <li><a href="admin.php#teachers-section" class="nav-link">Team</a></li>
                  <li><a href="admin.php#contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            <div class="ml-auto w-25">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                  
                </ul>
              </nav>
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
            </div>
          </div>
        </div>
        
      </header>

      <div class="intro-section " id="home-section">
        
        <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="row align-items-center ">


                  <div class="col-lg-12 ml-auto mt-5" data-aos="fade-up" data-aos-delay="500">
                    <form action="teachersprofile.php" method="post" class="form-box" enctype="multipart/form-data">
						<h3 class="h4 text-black mb-4" align="center">Tutor Details</h3>
                      <div class="text-center">
                       <img src="<?php echo "fimages/".$file2; ?>" alt="Image" id="output_img"  class="img-fluid w-50 rounded-circle    mb-2" style="max-width:150px">
                     </div>
                      <div class="form-group  mb-2">
                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $name; ?>" readonly="">
                      </div>
                      <div class="form-group mb-2">
                        <input type="mail" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" readonly>
                      </div>
                      <div class="form-group mb-2">
                        <input type="text" name="college" class="form-control" placeholder="College" value="<?php echo $college; ?>" readonly="">
                      </div>
                      <div class="form-group mb-2">
                        <input type="text" name="subject" class="form-control" placeholder="Teacher of JAVA" value="<?php echo $subject; ?>" readonly="">
                      </div>
                      <div class="form-group mb-2">
                        <input type="text" name="book" class="form-control" placeholder="No Of Times Booked" value="Booked : <?php echo $book; ?>" readonly>
                      </div>

                      <div class="form-group mb-2">
                        <input type="tel" name="mobile" class="form-control" placeholder="Contact no" value="<?php echo $mobile; ?>" readonly="">
                      </div>
                      
                    </form>

                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      

 



       
      <footer class="footer-section bg-white pt-5 mt-5">
        <div class="container">
          <div class="row mt-5">
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
	echo '<script>alert("Peer Tutor Id Is Incorrect"); window.location="admin.php";</script>';
	}

}
else{
	echo '<script>alert("Login first"); window.location="loginadmin.php";</script>';
	
}

?>
    </body>
  </html>