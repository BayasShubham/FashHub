



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASHION HUB</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <link rel="shortcut icon" href="logo/logofix.jpg">
    <script src="https://kit.fontawesome.com/2c1374ac29.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <nav>
        <div class="social-call">
            <div class="social">
                <a href="https://www.facebook.com/shubhman.bayas"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/shubhambayas4"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com/the.cozy_vibee?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                <a href="https://youtube.com/channel/UCIrDUMIoKNcNMuiTpw5rgZQ"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="phone">
                <span>Call +123456789</span>
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
                    <a href="cart.html"><div class="con"> <a href="javascript:void(0);" class="user"></a>
                        <i class="far fa-user"></i>
                    </a></div>
                <!-- cart icon -->
                <div class="con"><a href="javascript:void(0);">
                        <i class="fas fa-shopping-cart">
                            <!-- no of products -->
                            <span class="num-cart-product">0</span>
                        </i>
                    </a></div>

            </div>
        </div>
    </nav>
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
        <!-- login -->
        <div class="login-form">
            <!-- cancel btn -->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!-- heading -->
            <strong>Log In</strong>
            <!-- inputs -->
            <form>
                <input type="email" placeholder="Example@gmail.com" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <!-- submit btn -->
                <input type="submit" value="log In">
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
            <form>
                <input type="text" placeholder="Full Name" name="fullname" required>
                <input type="email" placeholder="Example@gmail.com" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <!-- submit btn -->
                <input type="submit" value="Sign Up">
            </form>
            <!-- forget and sign up button -->
            <div class="form-btns">
                <a href="javascript:void(0);" class="already-account">Already have Account?</a>

            </div>
        </div>

    </div>
<hr>    




<?php
    if(isset($_REQUEST["category"])){
        // if(category Block Start)
?>

    <!-- New Arrival -->
    <section class="new-arrival">
        
        <div class="arrival-heading">
            <strong><?php echo $_REQUEST["category"]; ?> </strong>
            <p>We Provide You New Design Fashion Clothes</p>
        </div>

        <!-- Product container -->
        <div class="product-container">
        <?php
            require './db/config.php';    
            $category=$_REQUEST["category"];
            $sql= "SELECT * FROM `{$_REQUEST["category"]}` ";
            $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
        ?>

        <!-- product box 1 ----------------------------------------------------->

        <div class="product-box"data-id="<?php  echo $row["id"] ?> "data-category="<?php  echo $_REQUEST["category"]; ?>" onclick="show_product(this)">
            <!-- img -->
            <div class="product-img">
                <!-- add cart -->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="<?php  echo $row["img_link"] ?>">
            </div>
            <!-- details -->
            <div class="product-details">
                <a href="#" class="p-name">
                <?php  echo $row["name"] ?></a>
                <span class="p-price"> Rs. <?php  echo $row["price"] ?></span>
                <span>Rs.<strike><?php  echo $row["old_price"] ?></strike> </span>
            </div>
        </div>
        

        <?php
                }
            }
        ?>
    </div>
        
              
    </section>> 
            
<?php
// if(category Block End)
    }
?>


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
            </footer>


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


        // For Fix menu when scroll
        $(window).scroll(function () {
            if ($(document).scrollTop() > 50) {
                $('.navigation').addClass('fix-nav');
            }
            else
                $('.navigation').removeClass('fix-nav');
        });

    </script>
    <script src="category.js"> </script>

</body>

