<?php
/* [INIT] */
session_start();
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";
require PATH_LIB . "lib-db.php";
require PATH_LIB . "lib-cart.php";
$cartLib = new Cart();
$products = $cartLib->pGet();

/* [DRAW HTML] */
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- [META] -->
    <title>CART</title>
    <meta name="description" content="Cart demo">
    <meta name="author" content="Code Boxx">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- [SCRIPTS & STYLES] -->
    <link rel="stylesheet" href="public/theme.css">
    <script src="public/general.js"></script>
    <script src="public/cart.js"></script>
  </head>
  <body>
        <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
        <style>
            h1{
            font-family: 'Amita';
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            color:white;
            font-size: 2.5em;
            }
            ul{
                display: inline-block;
                list-style-type: none;
                
            }
            header{
                 font-family: 'Amita';
            margin: 0;
            padding: 0 0 20px;
            text-align: left;
            color:red;
            font-size: 1.5em;
            }
            ul{
                display: inline-block;
                list-style-type: none;

            }
            
        </style>
   <h1>SDGDFD KITCHEN</h1>
      <ul>
        <li><a href='#pizza'>PIZZA</a></li>
        <li><a href='#pasta'>PASTA</a></li>
        <li><a href='#drinks'>DRINKS</a></li>
        <li><a href='#desserts'>DESSERTS</a></li>
        <li><a href = "profile.php"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['user']; ?></a></li>
        <li><a href = "logout.php">Logout</a></li>
        </ul>
        
   
    <!-- [NOTIFICATION BOX] -->
    <div id="noteOut"><div id="noteIn"></div></div>

    <!-- [HEADER] -->
    <header id="page-header">
      CART 
      <div id="page-cart" onclick="cart.toggle();">
        &#128722; <span id="page-cart-count">0</span>
      </div>
    </header>

    <!-- [PRODUCTS] -->	
    <div id="pizza" class="products"><?php
      if (is_array($products)) {
          
        foreach ($products as $id => $row  ) {
            if($row['type'] == 'pizza'){
                
          ?>
          <div class="pdt">
            <img src="images/<?= $row['product_image']  ?>" alt="Image" height="220" width="420"/>
            <h3 class="pdtName"><?= $row['product_name'] ?></h3>
            <div style="color :   #ff0000" class="pdtPrice">Rs <?= $row['product_price'] ?></div>
            <div style="color :  #4dffff" class="pdtDesc"><?= $row['product_description'] ?></div>
            <input class="pdtAdd" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);"/>
          </div>
        <?php
            }
        }
      } else {
        echo "No products found.";
      }
      ?>
      </div>
    <!-- [PRODUCTS] -->	
    <div id="pasta" class="products"><?php
      if (is_array($products)) {
          
        foreach ($products as $id => $row  ) {
            if($row['type'] == 'pasta'){
                
          ?>
          <div class="pdt">
            <img src="images/<?= $row['product_image']  ?>" alt="Image" height="220" width="420"/>
            <h3 class="pdtName"><?= $row['product_name'] ?></h3>
            <div style="color :   #ff0000" class="pdtPrice">Rs <?= $row['product_price'] ?></div>
            <div style="color :  #4dffff" class="pdtDesc"><?= $row['product_description'] ?></div>
            <input class="pdtAdd" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);"/>
          </div>
        <?php
            }
        }
      } else {
        echo "No products found.";
      }
      ?></div>
      
      <!-- [PRODUCTS] -->	
    <div id="drinks" class="products"><?php
      if (is_array($products)) {
          
        foreach ($products as $id => $row  ) {
            if($row['type'] == 'drink'){
                
          ?>
          <div class="pdt">
            <img src="images/<?= $row['product_image']  ?>" alt="Image" height="220" width="420"/>
            <h3 class="pdtName"><?= $row['product_name'] ?></h3>
            <div style="color :   #ff0000" class="pdtPrice">Rs <?= $row['product_price'] ?></div>
            <div style="color :  #4dffff" class="pdtDesc"><?= $row['product_description'] ?></div>
            <input class="pdtAdd" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);"/>
          </div>
        <?php
            }
        }
      } else {
        echo "No products found.";
      }
      ?></div>
      
      <!-- [PRODUCTS] -->	
    <div id="desserts" class="products"><?php
      if (is_array($products)) {
          
        foreach ($products as $id => $row  ) {
            if($row['type'] == 'dessert'){
                
          ?>
          <div class="pdt">
            <img src="images/<?= $row['product_image']  ?>" alt="Image" height="220" width="420"/>
            <h3 class="pdtName"><?= $row['product_name'] ?></h3>
            <div style="color :   #ff0000" class="pdtPrice">Rs <?= $row['product_price'] ?></div>
            <div style="color :  #4dffff" class="pdtDesc"><?= $row['product_description'] ?></div>
            <input class="pdtAdd" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);"/>
          </div>
        <?php
            }
        }
      } else {
        echo "No products found.";
      }
      ?></div>
      
    <!-- [CART] -->
    <div id="cart" class="ninja"></div>

    <!-- [FOOTER] -->
    <footer id="page-footer">
      &copy; All rights reserved.
    </footer>
  </body>
</html>