<?php session_start()?>
<?php
			
      include("config.php");
			if(isset($_POST['submit'])){
				$name=$_POST['name'];
				$password=$_POST['pass'];

				$result=$con->query("SELECT * FROM customer 
				WHERE password='$password' AND name='$name'") 
				or die($con->error);

				$row=$result->fetch_assoc();

				$_SESSION['cid']=$row['id'];
        $_SESSION['cn']=$row['name'];
			}

		?>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Name: BookLand
  * Author: Shashini() & Tharika()
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
		<?php include("navbar.php");?>
  <!-- End Header -->

  <!-- ======= Config ======= -->
		<?php include("config.php");?>
  <!-- End Config -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>BookLand</span></h1>
      <h2>Order online and get the books delivered to your Doorstep</h2>
	<h1 class="sh">STAY HOME <span>STAY SAFE</span></h1>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">

    
    

    <!-- ======= Portfolio Section ======= -->
    



    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        

    <!-- select query -->    
	  <?php $result=$con->query("SELECT * FROM categories") or 
       die($con->error);
    ?>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php while($row=$result->fetch_assoc()):?>
          <a href="book-store.php?id=<?=$row['id']?>&name=<?=$row['name']?>">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?=$row['photo']?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?=$row['name']?></h4>
              <p>New</p>
            </div>
          </div>
          </a>
        <?php endwhile;?>

          

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        

        

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
	<?php include("footer.php");?>
  <!-- End Footer -->

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