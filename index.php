 
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ePharma</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Noto+Serif&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


</head>

<body>
    <header>
        <div class="nav">
            <ul>
                <div>
                    <div class="search-container">
                        <form>
                            <a href="../index.html"><img src="./login/logo.png" alt="ePharma"></a>                           
                        </form>
                    </div>
                </div>
                <div>
 <?php   
session_start();  
if(isset($_SESSION["sess_user"])){  
?> <li><a href="./login/logout.php"><i class="fa fa-sign-in fa-lg"></i>Logout</a></li>
<?php  
}
else{
    ?><li><a href="./login/login.php"><i class="fa fa-sign-in fa-lg"></i> Login/Signup</a></li> 
<?php  
}  
?>  


                    <li><a href="./demo/index.php"><i class="fa fa-cart-plus fa-lg"></i> Cart</a></li>
                    <li><a href="./medicine/contents.php"><i class="fa fa-medkit fa-lg"></i> Order Medicines</a></li>
                    <li><a href="#"><i class="fa fa-info fa-lg"></i> Healthcare Products</a></li>

<?php  
if(isset($_SESSION["sess_user"])){  
?> <li><a href="./login/profile.php"><i class="fas fa-user-circle"></i><?=$_SESSION['sess_user'];?></a></li>
<?php  
}

?> 
                </div>
            </ul>
        </div>
    </header>
    <div style="text-align: center">
        <div class="select" style="width: 90%; margin-top: 40px; overflow-y: hidden;">
            <img class="mySlides" src="img/banner1.jpg" style="width:100%">
            <img class="mySlides" src="img/banner2.png" style="width:100%">
            <img class="mySlides" src="img/banner3.jpg" style="width:100%">

        </div>
    </div>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>


    <div id="container">
        <section>
            <div class="fixed-card">

                <div class="Item1">
                    <p><img src="./img/img1.jpeg" alt="pills"></p>
                    <h2>Order Medicines</h2>
                    <button class="order-now">Order Now</button>
                </div>
                <div class="Item1">
                    <p><img src="./img/img2.jpeg" alt="pills"></p>
                    <h2>Health Care Products</h2>
                    <button class="order-now">Order Now</button>
                </div>
                <div class="Item1">
                    <p><img src="./img/img3.jpeg" alt="pills"></p>
                    <h2>Personal Care</h2>
                   <a href="./personal care/personal.php"><button class="order-now">Order Now</button></a> 
                </div>

            </div>



            <div class="slider1">
                <!-- Slider main container -->
                <h2>Featured Brands</h2>
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="img/slide2.JPG" alt="">
                                <p>Khadi Essentials Basics Pure..</p>
                                <p>₹ 140.25</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="img/slide1.JPG" alt="">
                                <p>Khadi Essentials Basics Pure..</p>
                                <p>₹ 140.25</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="img/slide2.JPG" alt="">
                                <p>Khadi Essentials Basics Pure..</p>
                                <p>₹ 140.25</p>
                            </a>
                        </div>
                        <div class="swiper-slide"><a href="#">
                                <img src="img/slide1.JPG" alt="">
                                <p>Khadi Essentials Basics Pure..</p>
                                <p>₹ 140.25</p>
                            </a></div>
                        <div class="swiper-slide"><a href="#">
                                <img src="img/slide2.JPG" alt="">
                                <p>Khadi Essentials Basics Pure..</p>
                                <p>₹ 140.25</p>
                            </a></div>
                        <div class="swiper-slide"><a href="#">
                                <img src="img/slide1.JPG" alt="">
                                <p>Khadi Essentials Basics Pure..</p>
                                <p>₹ 140.25</p>
                            </a></div>
                        <div class="swiper-slide"><a href="#">
                                <img src="img/slide2.JPG" alt="">
                                <p>Khadi Essentials Basics Pure..</p>
                                <p>₹ 140.25</p>
                            </a></div>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="img/slide2.JPG" alt="">
                            <p>Khadi Essentials Basics Pure..</p>
                            <p>₹ 140.25</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="img/slide1.JPG" alt="">
                            <p>Khadi Essentials Basics Pure..</p>
                            <p>₹ 140.25</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script src="js/index.js"></script>
    </div>

    <!-- LONG OFFER STRIP -->
    <div id="long-offer">
        <div class="trial">
            <img src="./login/logo.png" alt="ePharma">
            <p id="p-text">Save upto 10% extra and a fast delivery!<br>
            </p>
        </div>
    </div>

    <div id="container">
        <div class="slider1">
            <!-- Slider main container -->
            <h2>Popular Healthcare Products</h2>
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="img/slide2.JPG" alt="">
                            <p>Khadi Essentials Basics Pure..</p>
                            <p>₹ 140.25</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="img/slide1.JPG" alt="">
                            <p>Khadi Essentials Basics Pure..</p>
                            <p>₹ 140.25</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="img/slide2.JPG" alt="">
                            <p>Khadi Essentials Basics Pure..</p>
                            <p>₹ 140.25</p>
                        </a>
                    </div>
                    <div class="swiper-slide"><a href="#">
                            <img src="img/slide1.JPG" alt="">
                            <p>Khadi Essentials Basics Pure..</p>
                            <p>₹ 140.25</p>
                        </a></div>
                    <div class="swiper-slide"><a href="#">
                            <img src="img/slide2.JPG" alt="">
                            <p>Khadi Essentials Basics Pure..</p>
                            <p>₹ 140.25</p>
                        </a></div>
                    <div class="swiper-slide"><a href="#">
                            <img src="img/slide1.JPG" alt="">
                            <p>Khadi Essentials Basics Pure..</p>
                            <p>₹ 140.25</p>
                        </a></div>
                    <div class="swiper-slide"><a href="#">
                            <img src="img/slide2.JPG" alt="">
                            <p>Khadi Essentials Basics Pure..</p>
                            <p>₹ 140.25</p>
                        </a></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script src="js/index.js"></script>
        </div>


        <div class="health-article">
            <h2>Health Articles</h2>
            <div class="box-eq">
                <div class="box" style="margin-left:0px;">

                    <div class="image-block">
                        <img src="img/article1.JPG" alt="horlicks">
                    </div>
                    <div class="info-content">
                        <p>Official Public Service Announcement on Coronavirus from the WHO. Learn about Symptoms,
                            Prevention, and Common FAQs on Coronavirus.<a
                                href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019?gclid=Cj0KCQiAnb79BRDgARIsAOVbhRoEO5LR8IQLcKZ3InUNxmJwBQvhEWLGBGwsrLvUYwVf-SCmbDX4pPoaAuXHEALw_wcB">
                                Read
                                More>></a></p>
                    </div>

                </div>
                <div class="box">
                    <div class="image-block">
                        <img src="img/article2.JPG" alt="horlicks">
                    </div>
                    <div class="info-content">
                        <p>Fish Oil, Vitamin D, and Exercise: How Helpful Are They?<a
                                href="https://www.medicinenet.com/script/main/art.asp?articlekey=248882"> Read
                                More>></a></p>
                    </div>

                </div>
                <div class="box">
                    <div class="image-block">
                        <img src="img/article3.JPG" alt="horlicks">
                    </div>
                    <div class="info-content">
                        <p>WIRED Health: Tech 2020: Latest advances and the fight against COVID-19<a
                                href="https://www.medicalnewstoday.com/articles/wired-healthtech-2020-latest-advances-and-the-fight-against-covid-19">
                                Read
                                More>></a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </section>
    </div>

    <footer>
        <div class="copyright">
            <p>&copy 2020 ePharma. All Rights Reserved</p>
        </div>
    </footer>



   
</body>

</html>
