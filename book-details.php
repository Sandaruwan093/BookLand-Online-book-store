
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
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 

  <!-- ======= Header ======= -->
  <?php include("navbar2.php");?>
<!-- End Header -->


  <!-- ======= Config ======= -->
  <?php include("config.php");?>
<!-- End Config -->

  <main id="main" data-aos="fade-up">

<?php

    if(isset($_GET['id'])){
        $_SESSION['bid']=$_GET['id'];
        $id=$_GET['id'];
        $result=$con->query("SELECT * FROM book WHERE id=$id") 
				or die($con->error);
    }

?>    

    <!-- ======= Portfolio Details Section ======= -->
    <?php if($row=$result->fetch_assoc()):?>
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6">
            <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <img src="<?= $row['photo']?>" alt="">
                </div>
            <div class="swiper-pagination"></div>
            </div>
            </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3><?= $row['name']?></h3>
              <h4>More Information</h4>
              <ul>
                   

                <li><strong>Language</strong>: <?=$row['language']?></li>
                <li><strong>Author</strong>: <?=$row['author']?></li>
                <li><strong>Publisher</strong>: <?=$row['publisher']?></li>
                <li><strong>Price</strong>: Rs <?=$row['Price']?></li>

                    
              </ul>
              <div class="b">  
              <form method="post" action="book-details.php?id=<?=$row['id']?>&name=<?=$row['name']?>">
					      <input type="number" name="quantity">
					      <input type="submit" name="submit" value="Add to Carts">
				      </form>
            </div>
            </div>
			
            <div class="portfolio-description">
              <h2>Detail</h2>
              <p>
              <?=$row['detail']?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <?php endif;?><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php

			
      $result1=$con->query("SELECT * FROM cart") 
        or die($con->error);
      $r1=$result1->fetch_assoc();
  
      if(isset($_POST['submit'])){
        if($r1==null){
          $id=$_GET['id'];
          $Q=$_POST['quantity'];
        
          $con->query("INSERT INTO cart(id,bookid,quantity)
          VALUES(1,$id,$Q)") or die($con->error);
          header("Location: ");
        }else{
          try{
            $id=$_GET['id'];
            $Q=$_POST['quantity'];
        
            $con->query("INSERT INTO cart(id,bookid,quantity)
            VALUES(1,$id,$Q)") or die($con->error);
            header("Location: ");
          }catch(mysqli_sql_exception $e){
            header("Location: ");
          }

        }
      }
    ?>









  <!-- ======= Footer ======= -->
  <?php include("footer.php")?>
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