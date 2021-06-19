<!--Thanks page-->
<!DOCTYPE html>
<html>

<head>
    <title>Thanks</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <header>
        <!-- NAVBAR  -->
        <div class="nav">
            <ul>
                <div>
                    <div class="search-container">
                        <form>
                            <a href="../index.php"><img src="../login/logo.png" alt="ePharma"></a>	
                           
                        </form>
                    </div>
                </div>
                <div>
                    <li><a href="./tp2/login/login.php"><i class="fa fa-sign-in fa-lg"></i> Login/Signup</a></li>
                    <li><a href="../demo/index.php"><i class="fa fa-cart-plus fa-lg"></i> Cart</a></li>
                    <li><a href="./tp2/medicine/contents.php"><i class="fa fa-medkit fa-lg"></i> Order Medicines</a></li>
                    <li><a href="#"><i class="fa fa-info fa-lg"></i> Healthcare Products</a></li>


                </div>
            </ul>
        </div>
    </header>
  <div id="container">
      <div class="content">
      <h1>Thankyou for ordering from ePharma!!!</h1>
          <br>
          <h1>Your order has been placed</h1>
          <br>         
          <hr>
          <h1>Customers who ordered this also ordered</h1>
            <div class="slider1">
                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="../img/med2.JPG" alt="">
                                <p>Savlon</p>
                                <p>₹ 140.25</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="../img/1.png" alt="">
                                <p>Harpic</p>
                                <p>₹ 140.25</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="../img/med4.JPG" alt="">
                                <p>Lizol</p>
                                <p>₹ 140.25</p>
                            </a>
                        </div>
                        <div class="swiper-slide"><a href="#">
                                <img src="../img/med5.JPG" alt="">
                                <p>Khadi Essentials Basics Pure..</p>
                                <p>₹ 140.25</p>
                            </a></div>
                        <div class="swiper-slide"><a href="#">
                                <img src="../img/med6.JPG" alt="">
                                <p>Surface disinfectant Spray</p>
                                <p>₹ 140.25</p>
                            </a></div>
                        <div class="swiper-slide"><a href="#">
                                <img src="../img/med3.JPG" alt="">
                                <p>Harpic 2 in 1</p>
                                <p>₹ 140.25</p>
                            </a></div>
                        <div class="swiper-slide"><a href="#">
                                <img src="../img/2.png" alt="">
                                <p>Lizol</p>
                                <p>₹ 140.25</p>
                            </a>
                        </div>
                </div>
            </div>
          </div>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
          <script src="../js/index.js"></script>
          <br>
          <h3>For consulting our physician contact.</h3>
          <p>+91-9819069131,022-25793456</p>
      </div>
    </div>
      <footer>
        <div class="copyright">
            <p>&copy 2020 ePharma. All Rights Reserved</p>
        </div>
    </footer>
</body>

</html>