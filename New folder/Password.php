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
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" href="images/llogo.png">
      
    </head>
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
            <div class="site-logo "><a href="index.php"><img src="images/plogo.png" height="100px"></a></div>
            <div class="mx-auto text-center">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                  <li><a href="index.php#home-section" class="nav-link">Home</a></li>
                  <li><a href="index.php#courses-section" class="nav-link">Courses</a></li>
                  <li><a href="index.php#about-section" class="nav-link">About</a></li>
                  <li><a href="index.php#teachers-section" class="nav-link">Team</a></li>
                  <li><a href="index.php#contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            <div class="ml-auto w-25">
              <nav class="site-navigation position-relative text-right" role="navigation">
                
              </nav>
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
            </div>
          </div>
        </div>
        
      </header>
<?php
	include "connection.php";
		
	if(isset($_POST['change'])){
		if($_POST['password'] == $_POST['cpassword']){
			$email=$_POST['email'];
			$check=$_POST['check'];
			$password=sha1($_POST['password']);
			$password=crypt($email,$password);
			if($check == 1){
				$query="update login set Password='$password' where User_ID='$email'";
				if(mysqli_query($con,$query)){
					echo '<script>alert("Password Changed Successfully"); window.location="index.php"</script>';
				}
			}
			else if($check == 2){
				$query="update teacherlogin set Password='$password' where Email='$email'";
				if(mysqli_query($con,$query)){
					echo '<script>alert("Password Changed Successfully"); window.location="index.php"</script>';
				}
			}
			else if($check == 3){
				$query="update admin set Password='$password' where Email='$email'";
				if(mysqli_query($con,$query)){
					echo '<script>alert("Password Changed Successfully"); window.location="index.php"</script>';
				}
			}	
		}
		
	}
?>
      <div class="intro-section" id="home-section">
        
        <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                  
                    <form action="Password.php" method="post" class="form-box">
                      <h3 class="h4 text-black mb-4"></h3>
                      <div class="form-group">
					  	<input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
						<input type="hidden" name="check" value="<?php echo $_GET['check']; ?>">
                        <input type="text" name="password" class="form-control" placeholder="Enter new Password" value="">
                      </div>
					  <div class="form-group">
                        <input type="text" name="cpassword" class="form-control" placeholder="Enter Password Again">
                      </div>
                      <div class="form-group">
                        <input type="submit" name="change" class="btn btn-primary btn-pill" value="Reset Password">
						
                      </div>
                    </form>

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
                <li><a href="#home-section">Home</a></li>
                <li><a href="#courses-section">Courses</a></li>
                <li><a href="#about-section">About</a></li>
                <li><a href="#teachers-section">Team</a></li>
                <li><a href="#contact-section">contact</a></li>
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
      
    </body>
  </html>