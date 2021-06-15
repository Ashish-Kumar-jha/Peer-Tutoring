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
	$cmd="Select * from login where User_ID='$email'";
	$res=mysqli_query($con,$cmd);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_array($res);
		$name=$row['Name'];
		$mob=$row['Mobile_no'];
		$college=$row['College'];
		$img="upload/".$row['Img'];
		$reg=$row['Registration_No'];
		$file1=$row['College_ID'];
		$file2=$row['Img'];
		

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
                  <li><a href="admin.php" class="nav-link">Home</a></li>
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
                    <form action="studentprofile.php" method="post" class="form-box" enctype="multipart/form-data">
						<h3 class="h4 text-black mb-4" align="center">Student Details</h3>
                      <div class="text-center">
                       <img src="<?php echo $img; ?>" id="output_img" alt="images/html.png"  class="img-fluid w-50 rounded-circle    mb-4" style="max-width:150px">
                     </div>
                      <div class="form-group">
                        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="Name" readonly="">
                      </div>
                      <div class="form-group">
                        <input type="mail" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Email" readonly>
                      </div>
                      <div class="form-group mb-4">
                        <input type="text" name="college" value="<?php echo $college; ?>" class="form-control" placeholder="College" readonly="">
                      </div>
                      <div class="form-group mb-4">
                        <input type="text" name="reg" value="<?php echo $reg; ?>" class="form-control" placeholder="Registration No" readonly="">
                      </div>

                      <div class="form-group mb-4">
                        <input type="tel" name="mobile" value="<?php echo $mob; ?>" class="form-control" placeholder="Contact no" readonly="">
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
		echo '<script>alert("Peer Id Is Incorrect"); window.location="admin.php";</script>';
	}

}
else{
	header("location:loginadmin.php");
}
?>
    </body>
  </html>