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
  <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

	
	


</head>

<body>

 
  <!-- ======= Header ======= -->
  <?php include("navbar2.php");?>
  <!-- End Header -->
  <!-- ======= Config ======= -->
  <?php include("config.php");?>
  <!-- End Config -->

<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $_SESSION['cname']=$_GET['name'];
        $result=$con->query("SELECT * FROM book WHERE cid=$id") 
				or die($con->error);
    }

?>

  <main id="main" data-aos="fade-up">

  <div class="p-5 text-center bg-light">
    <h1 class="mb-3"><?=$_SESSION['cname']?></h1>
  </div>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="row">
        <?php while($row=$result->fetch_assoc()):?>
            <div class="col-md-3">
                <div class="thumbnail">
                    <a href="book-details.php?id=<?=$row['id']?>">
                    <div class="card" style="width: 18rem;">
  	                    <img class="card-img-top" src="<?=$row['photo']?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['name']?></h5>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        <?php endwhile;?>    
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section>

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