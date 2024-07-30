<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="cart.css">
  <!-- <link rel="stylesheet" href="cart.js"> -->

  <title>Basket</title>
</head>

<body>

  <main>
    <div class="basket">
      <div class="basket-module">
        <label for="promo-code">Enter a promotional code</label>
        <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
        <button class="promo-code-cta">Apply</button>
      </div>
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>

      <?php
        require './db/config.php';
        if(!empty($_COOKIE['id'])){
          $sql="SELECT `user_cart` FROM `user` WHERE `email`='{$_COOKIE['id']}' ";
          if(mysqli_query($conn,$sql)){
            $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
            $data=json_decode($row['user_cart'], true);
            if(is_array($data)){
              foreach ($data as $key => $value) {
                # code...
                $sql1="SELECT * FROM `{$value['category']}` WHERE  `id`={$value['product']}";
                $row1=mysqli_fetch_assoc(mysqli_query($conn,$sql1));
                echo "<div class='basket-product'>
                    <div class='item'>
                      <div class='product-image'>
                        <img src='{$row1['img_link']}' alt='Placholder Image 2' class='product-frame'>
                      </div>
                      <div class='product-details'>
                        <h1><strong> {$row1['name']}</strong> {$row1['colour']}</h1>
                        <p><strong>{$row1['Description']}</strong></p>
                        <p>Product Code - {$row1['id']}</p>
                      </div>
                    </div>
                    <div class='price'>{$row1['price']}</div>
                    <div class='quantity'>
                      <input type='number' value='1' max='1' class='quantity-field'>
                    </div>
                    <div class='subtotal'>{$row1['price']}</div>
                    <div class='remove'>
                      <button>Remove</button>
                    </div>
                  </div>";
              }
            }
          }
        }
      ?>

      <!-- <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">4</span> x Eliza J</strong> Lace Sleeve Cuff Dress</h1>
            <p><strong>Navy, Size 18</strong></p>
            <p>Product Code - 232321939</p>
          </div>
        </div>
        <div class="price">26.00</div>
        <div class="quantity">
          <input type="number" value="4" min="1" class="quantity-field">
        </div>
        <div class="subtotal">104.00</div>
        <div class="remove">
          <button>Remove</button>
        </div>
      </div> -->
      
    </div>
    <aside>
      <form class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal">0</div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
        <div class="summary-delivery">
          <input name="Name" style="margin:1%; padding:2%;" type="text" placeholder="NAME" required>
          <input name="Contact" type="text" style="margin:1%; padding:2%;" placeholder="CONTACT.NO" required >
          <input name="Address" type="text" style="margin:1%; padding:2%;" placeholder="DELIVERY ADDRESS" required >
          
          <select name="delivery-collection" class="summary-delivery-selection" required>
            <option value="" selected disabled>--SELECT PAYMENT METHOD--</option>    
            <option value="" disabled>UPI PAY</option>
            <option value="" disabled>CREDIT / DEBIT </option>
            <option value="cod" >CASH ON DELIVERY</option>
          </select>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total">0</div>
        </div>
        <div class="summary-checkout">
          <input type="button" onclick="order_submit()" class="checkout-cta" value="Go to Secure Checkout">
          <!-- <button class="checkout-cta">Go to Secure Checkout</button> -->
        </div>
      </form>
    </aside>
  </main>

  <script src="cart.js"></script>
</body>

</html>
