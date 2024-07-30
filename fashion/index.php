<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASHION HUB</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="product_info.js"></script>
    <link rel="shortcut icon" href="logo/logofix.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2c1374ac29.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav>
        <div class="social-call">
            <div class="social">
                <a href="https://www.facebook.com/shubhman.bayas"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/shubhambayas4"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com/itz_yours_shubh?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                <a href="https://youtube.com/channel/UCIrDUMIoKNcNMuiTpw5rgZQ"><i class="fab fa-youtube"></i></a>
             
            </div>
            <div class="phone">
                <span>Call +123456789</span>
            </div>
            <div class="name">

            </div>
         
        </div>
        <!-- Menu Bar -->
        <div class="navigation">

            <a href="#" class="logo">
                <img src="logo/logo6.png" alt="Error">
                <!-- <i class="fas fa-vector-square"></i> -->
            </a>

            <!-- menu icon -->
            <div class="toggle">

            </div>


            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="category.php?category=tshirts">T-SHIRTS</a>
                    
                    <span class="sale-lable">SALE</span>
                </li>
                <li><a href="category.php?category=shirts">SHIRTS</a></li>
                <li><a href="category.php?category=jeans">JEANS</a></li>
                <li><a href="category.php?category=jackets">JACKETS</a></li>
            </ul>

            <div class="right-menu">
                <div class="con"><a href="javascript:void(0);" class="search">
                        <i class="fas fa-search"></i>
                    </a></div>
                <div class="con"> <a href="javascript:void(0);" class="user">
                        <i class="far fa-user"></i>
                    </a></div>
                <!-- cart icon -->
                <div class="con"><a href="cart.php">
                        <i class="fas fa-shopping-cart">
                            <!-- no of products -->
                            
                        </i>
                    </a>
                </div>

            </div>
            <div class="logout" onclick="logout();">
            <i class="fa fa-sign-out"></i>
           </div>
        </div>
        
    </nav>
<!-- slofder -->
<script src="id.js"></script>
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <a href="category.php?category=shirts">
      <img src="images/men-fashion-banner-2.png" style="width:100%">
    </a>
      <div class="text"></div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <a href="category.php?category=shoes">
      <img src="images/fash3.jpg" style="width:100%">
    </a>
      <div class="text"></div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <a href="category.php?category=tshirt">
      <img src="images/banner1.jpg" style="width:100%">
    </a>
      <div class="text"></div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
     
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
</div>
<script>
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

</script>
    <!-- search bar -->
    <div class="search-bar">
        <!-- search input -->
        <div class="search-input">
            <!-- input -->
            <input type="text " placeholder="Search For Products" />
            <!-- cancel btn -->
            <a href="javascript:void(0);" class=" search-cancel">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>

    <!-- login and sign up form -->
    <div class="form">
        <?php require 'db\insert.php'; ?>
        <!-- login -->
        <div class="login-form">
            <!-- cancel btn -->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!-- heading -->
            <strong>Log In</strong>
            <!-- inputs -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                <input type="email" placeholder="Example@gmail.com" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <!-- submit btn -->
                <input name="login-submit" type="submit" value="log In">
            </form>
            <!-- forget and sign up button -->
            <div class="form-btns">

                <a href="javascript:void(0);" class="forget">forget password?</a>
                <a href="javascript:void(0);" class="sign-up-btn">Create Account</a>
            </div>
        </div>


        <!-- Sign up -->
        <div class="sign-up-form">
            <!-- cancel btn -->
            <a href="#" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!-- heading -->
            <strong>Sign Up</strong>
            <!-- inputs -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                <input type="text" placeholder="Full Name" name="fullname" required>
                <input type="email" placeholder="Example@gmail.com" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <!-- submit btn -->
                <input name="sign-up-submit" type="submit" value="Sign Up">
            </form>
            <!-- forget and sign up button -->
            <div class="form-btns">
                <a href="javascript:void(0);" class="already-account">Already have Account?</a>

            </div>
        </div>

    </div>

<!--Section: Block Content-->
    

    <div class="feature-heading">
        <h2>Featured Categories</h2>
    </div>

    <ul id="autoWidth" class="cs-hidden">
        <!-- 1               -->
        <li class="item">

            <!-- Feature Box -->
            <div class="feature-box">
                <a href="category.php?category=tshirts">
                    <img src="images//tshirt.webp" alt="">
                </a>
            </div>
            <!-- text -->
            <span>T-Shirt</span>

        </li>
        <!-- 1               -->
        <li class="item">

            <!-- Feature Box -->
            <div class="feature-box">
                <a href="category.php?category=shirts">
                    <img src="images//shirts.webp" alt="">
                </a>
            </div>
            <!-- text -->
            <span>Shirt</span>

        </li>
        <!-- 1               -->
        <li class="item">

            <!-- Feature Box -->
            <div class="feature-box">
                <a href="category.php?category=jeans">
                    <img src="images//trosure.webp" alt="">
                </a>
            </div>
            <!-- text -->
            <span>Jeans</span>

        </li>
        
       
        
        <!-- 1               -->
        <li class="item">

            <!-- Feature Box -->
            <div class="feature-box">
                <a href="category.php?category=jackets">
                    <img src="images//jacket0.webp" alt="">
                </a>
            </div>
            <!-- text -->
            <span>Jackets</span>

        </li>
        <!-- 1               -->
        <li class="item">

            <!-- Feature Box -->
            <div class="feature-box">
                <a href="category.php?category=shoes">
                    <img src="images//shoes/shoes1.webp" alt="">
                </a>
            </div>
            <!-- text -->
            <span>Shoes</span>

        </li>

    </ul>
    <hr>

    <!-- New Arrival -->
    <section class="new-arrival">
        <div class="arrival-heading">
            <strong>New Arrival</strong>
            <p>We Provide You New Design Fashion Clothes</p>
        </div>

        <!-- Product container -->
        <div class="product-container">
            <!-- product box 1 ---------------------------------------------------------------------->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="category.php?category=tshirts" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                   <a href="category.php?category=tshirts"> <img src="images/tshirt1.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=tshirts" class="p-name">DrawString T-shirt</a>
                    <span class="p-price"> Rs. 494</span>
                    <span>Rs.<strike>1099</strike> </span>
                    
                </div>
                
            </div>
            <!-- <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span> -->

            <!-- product box 2 -------------------------------------------------------------------------->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="category.php?category=shirts" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="category.php?category=shirts"><img src="images/roadster1.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=shirts" class="p-name">Roadster Shirt</a>
                    <span class="p-price"> Rs. 799</span>
                    <span>Rs.<strike>1299</strike> </span>
                </div>

            </div> <!-- product box 3 --------------------------------------------------------------------->
            <div class="product-box">
                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="category.php?category=shirts" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="category.php?category=shirts"><img src="images/dennison.webp"></a>
                    
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=shirts" class="p-name">DENNISON</a>
                    <span class="p-price"> Rs. 1499</span>
                    <span>Rs.<strike>2099</strike> </span>
                </div>

            </div> <!-- product box 4 -------------------------------------------------------------->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="category.php?category=jackets" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="category.php?category=jackets"><img src="images/adidas.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=jackets" class="p-name">Adidas</a>
                    <span class="p-price"> Rs. 2199</span>
                    <span>Rs.<strike>3999</strike> </span>
                </div>

            </div> <!-- product box 5 ----------------------------------------------------------------->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="category.php?category=jackets" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                   <a href="category.php?category=jackets"> <img src="images/voxati.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=jackets" class="p-name">Voxati Jacket</a>
                    <span class="p-price"> Rs. 1400</span>
                    <span>Rs.<strike>2199</strike> </span>
                </div>
            </div> <!-- product box 6 ----------------------------------------------------------------->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="category.php?category=jeans" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="category.php?category=jeans"><img src="images/jeans/jeans25.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=jeans" class="p-name"> Harvard</a>
                    <span class="p-price"> Rs. 2999</span>
                    <span>Rs.<strike>3150</strike> </span>
                </div>
            </div>
            <!-- product box 7 ------------------------------------------------------------------------>
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="category.php?category=shoes" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                   <a href="category.php?category=shoes"> <img src="images/shoes/shoes12.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=shoes" class="p-name">Mactree</a>
                    <span class="p-price"> Rs. 799</span>
                    <span>Rs.<strike>2150</strike> </span>
                </div>
            </div>
            <!-- product box 8 -->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="category.php?category=jackets" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                   <a href="category.php?category=jackets"> <img src="images/simon.webp"> </a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=jackets" class="p-name">Simon Denim</a>
                    <span class="p-price"> Rs. 999</span>
                    <span>Rs.<strike>1999</strike> </span>
                </div>
            </div>

            <!-- product box 9 -->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="tshirts.html" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                  <a href="category.php?category=tshirts">  <img src="images/t-shirts/t-shirt6.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=tshirts" class="p-name">HERE&NOW</a>
                    <span class="p-price"> Rs. 489</span>
                    <span>Rs.<strike>799</strike> </span>
                </div>
            </div>
            <!-- product box 10 -->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="category.php?category=jackets" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="category.php?category=jackets"><img src="images/t-base.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=jackets" class="p-name">T-Base</a>
                    <span class="p-price"> Rs. 1997</span>
                    <span>Rs.<strike>2699</strike> </span>
                </div>
            </div>
        </div>
        
    </section>
    <hr>
    <section class="parent-sale">
        <!-- sale box 1-->
        <section class="sale">
            <!-- sale box -->
            <div class="sale-box">
                <!-- img -->
                <li class="item-a">
                    <div class="banner-box f-slide-2">

                        <!-- slider text container -->
                        <div class="slider-text-container">

                            <div class="f-slider-text">

                                <span>Limited Offer</span>
                                <strong>30% OFF<br>with <font>promo code</font></strong>
                                <a href="category.php?category=shoes" class="f-slider-btn">Shop now</a>
                            </div>
                        </div>
                    </div>

                    <!-- text
                <a href="#">
                    <div class="sale-text">
                        <strong>SHOES</strong>
                        <span> SALE off 25%</span>
                    </div>
                </a> -->
            </div>
        </section>

        <!-- sale box 2 -->
        <section class="sale">
            <!-- sale box -->
            <div class="sale-box">
                <!-- img -->
                <img src="images/shoes.webp" alt="">
                <!-- text -->
                <a href="#">
                    <div class="sale-text">
                        <strong>SHOES</strong>
                        <span> SALE off 25%</span>
                    </div>
                </a>
            </div>
        </section>

        <!-- sale box 3-->
        <section class="sale">
            <!-- sale box -->
            <div class="sale-box">
                <!-- img -->
                <img src="images/shoes2.webp" alt="">

                <!-- text -->
                <a href="#">
                    <div class="sale-text">
                        <strong>SHOES</strong>
                        <span> SALE off 25%</span>
                    </div>

                </a>
            </div>

        </section>

    </section>

    <hr>

    <!-- New Arrival -->
    <section class="new-arrival">
        <div class="arrival-heading">
            <strong>Feature Items</strong>
            <p>We Provide You New Design Fashion Clothes</p>
        </div>

        <!-- Product container -->
        <div class="product-container">
            <!-- product box 1 --------------------------------------------------------------->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="category.php?category=tshirts"><img src="images/tshirt1.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=tshirts" class="p-name">DrawString T-shirt</a>
                    <span class="p-price"> Rs. 494</span>
                    <span>Rs.<strike>1099</strike> </span>
                </div>
            </div>
            <!-- product box 2 ------------------------------------------------------------------->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="category.php?category=shirts"><img src="images/roadster1.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=shirts" class="p-name">Roadster Shirt</a>
                    <span class="p-price"> Rs. 799</span>
                    <span>Rs.<strike>1299</strike> </span>
                </div>
            </div> <!-- product box 3 -------------------------------------------------------------->
            <div class="product-box">

                <!-- img -->
                <div class="product-img">
                    <!-- add cart -->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="category.php?category=shirts"><img src="images/dennison.webp"></a>
                </div>
                <!-- details -->
                <div class="product-details">
                    <a href="category.php?category=shirts" class="p-name">DENNISON</a>
                    <span class="p-price"> Rs. 1499</span>
                    <span>Rs.<strike>2099</strike> </span>
                </div>
            </div>


    </section>
    <hr>

    <!-- services -->
    <section class="services">
        <!-- services box 1-->
        <div class="services-box">
            <i class="fas fa-shipping-fast"></i>
            <span>Free Shipping</span>
            <p>Free Shipping for all US Orders</p>
        </div>
        <!-- services box 2-->
        <div class="services-box">
            <i class="fas fa-headphones-alt"></i>
            <span>Support 24/7</span>
            <p>We Support 24 hrs a day</p>
        </div>
        <!-- services box 3-->
        <div class="services-box">
            <i class="fas fas fa-sync"></i>
            <span>100% Money Return</span>
            <p>30 Days replacement applicable</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <span class="copyright">
            @Copyright 2020
        </span>
        <!-- Suscribe -->
        <div class="subscribe">
            <form>
                <input type="email" placeholder="Example@gmail.com" required>
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <!-- <div class="chip">
  <img src="images/avtar.png" alt="Person" width="96" height="96">
 Shubham Bayas
</div> -->
    </footer>
<!-- <div class="personal">
    <span>Developed by Shubham Bayas</span>
</div> -->

    <!-- jQuery -->
    <script src="js/jQuery.js"></script>
    <!-- Script -->
    <script type="text/javascript">
        // for Search bar
        $(document).on('click', '.search', function () {
            $('.search-bar').addClass('search-bar-active')
        });

        $(document).on('click', '.search-cancel', function () {
            $('.search-bar').removeClass('search-bar-active')
        });


        // login Sign up form
        $(document).on('click', '.user, .already-account', function () {
            $('.form').addClass('login-active').removeClass('sign-up-active')
        });

        $(document).on('click', '.sign-up-btn', function () {
            $('.form').addClass('sign-up-active').removeClass('login-active')
        });


        $(document).on('click', '.form-cancel', function () {
            $('.form').removeClass('login-active').removeClass('sign-up-active')
        });

        // For Responsive menu-------------------------------
        $(document).ready(function () {
            $('.toggle').click(function () {
                $('.toggle').toggleClass('active')
                $('.navigation').toggleClass('active')
            })
        })

        // // full slider script
        // $(document).ready(function () {
        //     $('#adaptive').lightSlider({
        //         adaptiveHeight: true,
        //         item: 1,
        //         slideMargin: 0,
        //         loop: true
        //     });
        // });
        // // Feature Slider
        // $(document).ready(function () {
        //     $('#autoWidth').lightSlider({
        //         autoWidth: true,
        //         loop: true,
        //         onSliderLoad: function () {
        //             $('#autoWidth').removeClass('cS-hidden');
        //         }
        //     });
        // });

        // For Fix menu when scroll
        $(window).scroll(function () {
            if ($(document).scrollTop() > 50) {
                $('.navigation').addClass('fix-nav');
            }
            else
                $('.navigation').removeClass('fix-nav');
        });
    </script>
</body>


</html>