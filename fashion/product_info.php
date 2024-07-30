<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="product_info.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="product_info.js"></script>
    <link rel="shortcut icon" href="logo/logofix.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2c1374ac29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
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


            <script src="id.js"></script>

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
                            <span class="num-cart-product">0</span>
                        </i>
                    </a>
                </div>

            </div>
        </div>
    </nav>
    <?php 
     if(isset($_REQUEST["category"]) && isset($_REQUEST["product_id"])){
      require './db/config.php';    
      $sql= "SELECT * FROM `{$_REQUEST["category"]}` WHERE `id`={$_REQUEST["product_id"]} ";
      
      if(mysqli_query($conn,$sql)){
          $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
    ?>

    
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = " <?php  echo $row["img_link"] ?>" alt = "fashion image">
               
            </div>
          </div>
        
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"> <?php  echo $row["name"] ?></h2>
          <a href = "#" class = "product-link">visit Fashion store</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span>Rs. <?php  echo $row["old_price"] ?></span></p>
            <p class = "new-price">New Price: <span>Rs. <?php  echo $row["price"] ?></span></p>
          </div>

          <div class = "product-detail">
            <h2>about this item: </h2>
            <p> <?php  echo $row["Description"] ?></p>
            <ul>
              <li>Color: <span> <?php  echo $row["colour"] ?></span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Shoes</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <button onclick="<?php  echo "addtocart('{$_REQUEST["category"]}','{$_REQUEST["product_id"]}')"  ?>" type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
            <button type = "button" class = "btn">Buy Now</button>
          </div>

          <div class = "social-links">
            <p>Share At: </p>
            <a href = "https://www.facebook.com/shubhman.bayas">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "https://twitter.com/shubhambayas4">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "https://instagram.com/the.cozy_vibee?utm_medium=copy_link">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "https://youtube.com/channel/UCIrDUMIoKNcNMuiTpw5rgZQ">
              <i class = "fab fa-youtube"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
      }
      else{
        echo "No Data"; 
      }
     }
    
    ?>
    
    <script src="script.js"></script>
  </body>
</html>