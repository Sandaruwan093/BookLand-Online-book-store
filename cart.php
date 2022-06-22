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

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      
       <h1 style="text-align:center">Cart</h1>
        
    </section><!-- End Breadcrumbs -->
    <?php 
			

		
			if(isset($_POST['Submit'])){
			
				$id=$_POST['id'];
				$Q=$_POST['quantity'];
					
				$con->query("UPDATE cart SET quantity=$Q WHERE bookid=$id")
					 or die($con->error);
				
									
				$id=null;		
			}
		

			if(isset($_POST['submit'])){
			
				$id=$_POST['id'];
			
					
				$con->query("DELETE FROM cart WHERE bookid=$id")
					 or die($con->error);
									
				$id=null;		
			}

			$result=$con->query("SELECT *FROM cart")
				or die($con->error);

		?>

    <section class="inner-page">
      <div class="container">
      <div class="row">
            <div class="col-lg-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>

                    </thead>
                    <?php 
                        $Total=0;
					    $quantity=0;
				    ?>
                    <tbody>
                    <?php while($row=$result->fetch_assoc()):?>
                        <?php 
					        $id=$row['bookid'];
					        $result1=$con->query("SELECT *FROM book WHERE
						        id=$id")or die($con->error);
				        ?>	
                        <tr>
                        <?php if($r=$result1->fetch_assoc()):?>
                            <td><img src="<?=$r['photo']?>" height="200px"></td>
                            <td>
                                <?=$r['name']?><br><br>
						        <form method="post">
							        <input type="hidden" name="id" value=<?=$row['bookid']?>>

							        <input type="submit" name="submit" style=" width:90px; background-color:red;" value="Remove">
						        </form>
					        </td>
                            <td>Rs.
                                <p id="each"><?=$r['Price']?></p>
                            </td>
                            <td>
                                <div class="b">
                                    <form method="post" action="cart.php">
							            <input type="hidden" name="id" value=<?=$row['bookid']?>>
							            <input type="number" name="quantity" min=0 value=<?=$row['quantity']?>>
							            <input type="submit" name="Submit" style="width:50px" value="Add">	
						            </form>
                                </div>
                            </td>
                            
                            <?php
						        $price=$r['Price'];
						        $quantity=$row['quantity'];
						        $subTotal=$price*$quantity;
						        $Total+=$subTotal;
						
					        ?>
                            <td>Rs.
                                <p id="total"><?=$subTotal?></p>
                            </td>
                        <?php endif;?>    
                        </tr>
                    <?php endwhile;?>
                    </tbody>

                </table>
            </div>
            <div class="col-lg-4">
                <div class="container px-4" style="margin-top: 37px;">
                    <div class="row gx-5 ">
                        <div class="col ">
                            <div class="p-3 border bg-light ">
                                <h3>Cart Total</h3>
                                <hr style="color:white; ">
                                <div class="d-flex justify-content-between mb-1 small ">
                                    <span>Subtotal</span> <span>Rs.<?=$Total?></span>
                                </div>
                                <hr style="color:white; ">
                                <div class="d-flex justify-content-between mb-1 small ">
                                    <span>Total</span> <span>Rs.<?=$Total?></span>
                                </div>
                                <br>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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