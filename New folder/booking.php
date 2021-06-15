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
	
<?php
include "connection.php";
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
     
      
      <header class="site-navbar py-0 js-sticky-header site-navbar-target" role="banner" style="position:fixed; background:#343A40;>
        
        <div class="container-fluid">
          <div class="d-flex align-items-center">
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

            <div class="ml-auto w-25">
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
                    <div class="col-lg-6 mb-5">

                        <div class="container">
                        <h1  data-aos="fade-up" data-aos-delay="100">Book Your Peer </h1>
                        <!--  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Book To Learn</p> -->
                         <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Make Learning More Comfortable</p>
                       </div>
                        <div class="row container">
                          
                          <div class="col-4 col-sm-4">
                            <p data-aos="fade-up" data-aos-delay="300"><a href="#java-section" class="btn btn-primary py-3 px-5 btn-pill">JAVA</a></p>                     
                          </div>
                          <div class="col-4 col-sm-4">
                            <p data-aos="fade-up" data-aos-delay="300"><a href="#plsql-section" class="btn btn-primary py-3 px-5 btn-pill">PLSQL</a></p>                     
                          </div>
                          <div class="col-4 col-sm-4">
                            <p data-aos="fade-up" data-aos-delay="300"><a href="#c++-section" class="btn btn-primary py-3 px-5 btn-pill">C++</a></p>                     
                          </div>

                        </div>

                        <div class="row container">
                          
                          <div class="col-4 col-sm-4">
                            <p data-aos="fade-up" data-aos-delay="300"><a href="#sql-section" class="btn btn-primary py-3 px-5 btn-pill">SQL</a></p>                     
                          </div>
                          <div class="col-4 col-sm-4">
                            <p data-aos="fade-up" data-aos-delay="300"><a href="#html-section" class="btn btn-primary py-3 px-5 btn-pill">HTML</a></p>                     
                          </div>
                          <div class="col-4 col-sm-4">
                            <p data-aos="fade-up" data-aos-delay="300"><a href="#css-section" class="btn btn-primary py-3 px-5 btn-pill">CSS</a></p>                     
                          </div>
                        
                        </div>

                      </div>

                  <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                    <form action="complain.php" method="post" class="form-box">
                      <h3 class="h4 text-black mb-4">Complain</h3>
                      <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email Addresss">
                      </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <textarea class="form-control" name="message" id="" cols="30" rows="5" placeholder="Write your complain here."></textarea>
                  </div>
                </div>

                      <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-pill" value="Send">
                      </div>
                    </form>

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
              <h2 class="section-title" id="java-section">JAVA</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="owl-carousel col-12 nonloop-block-14">
              <?php
			  		$query="select * from teacherlogin where LOWER(Subject)='java'";
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
                  					<span class="course-price">₹20</span> 
                  					<h3><a href="#"><?php echo $name; ?></a></h3>
                  					<p><img src="fimages/logo.png" alt="Image"  height="100px" width="100px" class="p-1 px-5"></p>
                				</div>
                				<div class="d-flex border-top stats">
                 				<a href="filldetails.php?peer=<?php echo $user; ?>" target="_blank"><div class="py-3 px-4"></span>Book Your Peer</div></a>
                  
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




      
      <div class="site-section courses-title" id="courses-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title" id="c++-section">C++</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row">

            <div class="owl-carousel col-12 nonloop-block-14">
			<?php
			  		$query="select * from teacherlogin where LOWER(Subject)='c++'";
					$res=mysqli_query($con,$query);
					if(mysqli_num_rows($res) > 0){
						while($row=mysqli_fetch_array($res)){
							$name=$row['Name'];
							$img=$row['Img'];
							$user=$row['Email'];
							$_SESSION['tutor_id']=$user;
						?>
							<div class="course bg-white h-100 align-self-stretch">
                				<figure class="m-0">
                  					<img src="<?php echo 'fimages/'.$img; ?>" alt="Image"  height="250px" width="40px" class="p-5">
                				</figure>
                				<div class="course-inner-text py-4 px-4">
                  					<span class="course-price">₹20</span> 
                  					<h3><a href="#"><?php echo $name; ?></a></h3>
                  					<p><img src="fimages/logo.png" alt="Image"  height="100px" width="100px" class="p-1 px-5"></p>
                				</div>
                				<div class="d-flex border-top stats">
                 				<a href="filldetails.php?peer=<?php echo $user; ?>" target="_blank"><div class="py-3 px-4"></span>Book Your Peer</div></a>
                  
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




      
      <div class="site-section courses-title" id="courses-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title" id="plsql-section">PLSQL</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row">

            <div class="owl-carousel col-12 nonloop-block-14">
				<?php
			  		$query="select * from teacherlogin where LOWER(Subject)='plsql'";
					$res=mysqli_query($con,$query);
					if(mysqli_num_rows($res) > 0){
						while($row=mysqli_fetch_array($res)){
							$name=$row['Name'];
							$img=$row['Img'];
							$user=$row['Email'];
							$_SESSION['tutor_id']=$user;
						?>
							<div class="course bg-white h-100 align-self-stretch">
                				<figure class="m-0">
                  					<img src="<?php echo 'fimages/'.$img; ?>" alt="Image"  height="250px" width="40px" class="p-5">
                				</figure>
                				<div class="course-inner-text py-4 px-4">
                  					<span class="course-price">₹20</span> 
                  					<h3><a href="#"><?php echo $name; ?></a></h3>
                  					<p><img src="fimages/logo.png" alt="Image"  height="100px" width="100px" class="p-1 px-5"></p>
                				</div>
                				<div class="d-flex border-top stats">
                 				<a href="filldetails.php?peer=<?php echo $user; ?>" target="_blank"><div class="py-3 px-4"></span>Book Your Peer</div></a>
                  
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




      
      <div class="site-section courses-title" id="courses-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title" id="sql-section">SQL</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row">

            <div class="owl-carousel col-12 nonloop-block-14">
					<?php
			  		$query="select * from teacherlogin where LOWER(Subject)='sql'";
					$res=mysqli_query($con,$query);
					if(mysqli_num_rows($res) > 0){
						while($row=mysqli_fetch_array($res)){
							$name=$row['Name'];
							$img=$row['Img'];
							$user=$row['Email'];
							$_SESSION['tutor_id']=$user;
						?>
							<div class="course bg-white h-100 align-self-stretch">
                				<figure class="m-0">
                  					<img src="<?php echo 'fimages/'.$img; ?>" alt="Image"  height="250px" width="40px" class="p-5">
                				</figure>
                				<div class="course-inner-text py-4 px-4">
                  					<span class="course-price">₹20</span> 
                  					<h3><a href="#"><?php echo $name; ?></a></h3>
                  					<p><img src="fimages/logo.png" alt="Image"  height="100px" width="100px" class="p-1 px-5"></p>
                				</div>
                				<div class="d-flex border-top stats">
                 				<a href="filldetails.php?peer=<?php echo $user; ?>" target="_blank"><div class="py-3 px-4"></span>Book Your Peer</div></a>
                  
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



      
      <div class="site-section courses-title" id="courses-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title" id="html-section">HTML</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row">

            <div class="owl-carousel col-12 nonloop-block-14">
					<?php
			  		$query="select * from teacherlogin where LOWER(Subject)='html'";
					$res=mysqli_query($con,$query);
					if(mysqli_num_rows($res) > 0){
						while($row=mysqli_fetch_array($res)){
							$name=$row['Name'];
							$img=$row['Img'];
							$user=$row['Email'];
							$_SESSION['tutor_id']=$user;
						?>
							<div class="course bg-white h-100 align-self-stretch">
                				<figure class="m-0">
                  					<img src="<?php echo 'fimages/'.$img; ?>" alt="Image"  height="250px" width="40px" class="p-5">
                				</figure>
                				<div class="course-inner-text py-4 px-4">
                  					<span class="course-price">₹20</span> 
                  					<h3><a href="#"><?php echo $name; ?></a></h3>
                  					<p><img src="fimages/logo.png" alt="Image"  height="100px" width="100px" class="p-1 px-5"></p>
                				</div>
                				<div class="d-flex border-top stats">
                 				<a href="filldetails.php?peer=<?php echo $user; ?>" target="_blank"><div class="py-3 px-4"></span>Book Your Peer</div></a>
                  
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


  
      <div class="site-section courses-title" id="courses-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title" id="css-section">CSS</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row">

            <div class="owl-carousel col-12 nonloop-block-14">
					<?php
			  		$query="select * from teacherlogin where LOWER(Subject)='css'";
					$res=mysqli_query($con,$query);
					if(mysqli_num_rows($res) > 0){
						while($row=mysqli_fetch_array($res)){
							$name=$row['Name'];
							$img=$row['Img'];
							$user=$row['Email'];
							$_SESSION['tutor_id']=$user;
						?>
							<div class="course bg-white h-100 align-self-stretch">
                				<figure class="m-0">
                  					<img src="<?php echo 'fimages/'.$img; ?>" alt="Image"  height="250px" width="40px" class="p-5">
                				</figure>
                				<div class="course-inner-text py-4 px-4">
                  					<span class="course-price">₹20</span> 
                  					<h3><a href="#"><?php echo $name; ?></a></h3>
                  					<p><img src="fimages/logo.png" alt="Image"  height="100px" width="100px" class="p-1 px-5"></p>
                				</div>
                				<div class="d-flex border-top stats">
                 				<a href="filldetails.php?peer=<?php echo $user; ?>" target="_blank"><div class="py-3 px-4"></span>Book Your Peer</div></a>
                  
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
<?php
if(isset($_POST['subscribe'])){
	$email=$_POST['email'];
	
	try{
			$mail=new PHPMailer;
			$mail->isSMTP();
			$mail->Host='smtp.gmail.com';
			$mail->SMTPAuth=true;
			$mail->Username='peertutoringady@gmail.com';
			$mail->Password='YashDeepakAshish';
			$mail->Port=587;
			$mail->SMTPSecure='tls';
		
			$mail->setFrom('peertutoringady@gmail.com','PeerTutorial@noReply');
			$mail->addAddress($email);
			$mail->isHTML(true);
			$mail->Subject='Subscription';
			$mail->Body='<p>This email is send onbehalf of subscription on website PeerTutoring.</p><br>';
		
			if(!$mail->send()){
				echo $mail->ErrorInfo;
			}
			else{
				
			}
		
		}
	catch(\Exception $e){
		echo $e->getMessage();
	}
}

?>

            <div class="col-md-4">
              <h3>Subscribe</h3>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p> -->
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="footer-subscribe">
                <div class="d-flex mb-5">
                  <input type="text" name="email" class="form-control rounded-0" placeholder="Email">
                  <input type="submit" name="subscribe" class="btn btn-primary rounded-0"  value="Subscribe">
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