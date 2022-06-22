<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BookLand</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php include("navbar2.php")?>
  <?php include("config.php")?>
  <?php
				
				$name=null;
                $address=null;
                $mobile=0;
                $pass=null;

				if(isset($_POST['submit'])){
					$name=$_POST['name'];
					$mobile=$_POST['phone'];
					$email=$_POST['email'];
					$address=$_POST['address'];
					$pass=$_POST['pass'];
					

					
						$con->query("INSERT INTO customer(name,password,email,address,phone)
						VALUES('$name','$pass','$email','$address',$mobile)") or die($con->error);
				
					
									
				}

				
		?>
  <main id="main" data-aos="fade-up">
 
  

  <div class="login-page">
        <div class="form">
            <form class="login-form" id="i1" method="post" action="register.php">
                <input type="text" placeholder="name" name="name"/>
                <input type="password" placeholder="password" name="pass"/>
                <input type="text" placeholder="email address" name="email"/>
                <textarea class="ab" name="address" placeholder="address"></textarea>
                <input type="text" placeholder="phone" name="phone"/>
                <input type="submit" value=create id="submit" name="submit"/>
                <p class="message">Already registered? <a class="dropdown-item" href="login.php">Sign In</a></p>
            </form>
        </div>
    </div>

   </main>


  




  <?php include("footer.php")?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>