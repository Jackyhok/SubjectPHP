
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>PAVSHOP - Multipurpose eCommerce HTML5 Template</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="../../public/rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="../../public/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../../public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../public/css/ionicons.min.css" rel="stylesheet">
<link href="../../public/css/main.css" rel="stylesheet">
<link href="../../public/css/style.css" rel="stylesheet">
<link href="../../public/css/responsive.css" rel="stylesheet">

<!-- JavaScripts -->
<script src="../../public/js/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- LOADER -->
<!-- <div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div> -->

<!-- Wrap -->
<?php
 include_once('../../database/db.class.php');
  session_start();

?>
<div id="wrap"> 
  
  <!-- header -->
  <header>
    <div class="sticky">
      <div class="container"> 
        
        <!-- Logo -->
        <div class="logo"> <a href="/ecommerce-php/views/page/index.php"><img class="img-responsive" src="../../public/images/logo.png" alt="" ></a> </div>
        <nav class="navbar ownmenu">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
          </div>
          
          <!-- NAV -->
          <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">
              <li class="dropdown active"><a href="/ecommerce-php/views/page/index.php" class="dropdown-toggle" >Home</a>
                <!-- <ul class="dropdown-menu">
                  <li> <a href="index.html">Index Default</a> </li>
                  <li> <a href="index-1.html">Index 2</a> </li>
                  <li> <a href="index-2.html">Index 3</a></li>
                  <li> <a href="index-header-1.html">Index Header 1</a></li>
                  <li> <a href="index-header-2.html">Index Header 2</a></li>
                  <li> <a href="index-header-3.html">Index Header 3</a></li>
                  <li> <a href="index-header-4.html">Index Header 4</a></li>
                </ul> -->
              </li>
              <li class="dropdown"> <a href="/ecommerce-php/views/page/shop.php" class="dropdown-toggle">Shop</a>
                <!-- <ul class="dropdown-menu">
                  <li> <a href="shop_01.html">Shop 01 </a> </li>
                  <li> <a href="shop_02.html">Shop 02</a> </li>
                  <li> <a href="shop_03.html">Shop 03 </a> </li>
                  <li> <a href="shop_04.html">Shop 04 </a> </li>
                  <li> <a href="product-detail_01.html">Product Detail 01</a> </li>
                  <li> <a href="product-detail_02.html">Product Detail 02</a> </li>
                  <li> <a href="shopping-cart.html">Shopping Cart</a> </li>
                  <li> <a href="checkout.html">Checkout</a> </li>
                  <li> <a href="about-us_01.html">About 01</a> </li>
                  <li> <a href="about-us_02.html">About 02</a> </li>
                  <li> <a href="contact.html">Contact</a> </li>
                  <li> <a href="blog-list_01.html">Blog List 01</a> </li>
                  <li> <a href="blog-list_02.html">Blog List 02</a> </li>
                  <li> <a href="blog-list_03.html">Blog List 03 </a> </li>
                  <li> <a href="blog-detail_01.html">Blog Detail 01 </a> </li>
                </ul> -->
              </li>
              <li> <a href="https://mwg.vn/">About </a> </li>
              
              <!-- Two Link Option -->
              <!-- <li class="dropdown"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Designer</a>
                <div class="dropdown-menu two-option">
                  <div class="row">
                    <ul class="col-sm-6">
                      <li> <a href="shop_01.html">summer store</a></li>
                      <li> <a href="shop_01.html"> sarees</a></li>
                      <li> <a href="shop_01.html"> kurtas</a></li>
                      <li> <a href="shop_01.html"> shorts & tshirts</a></li>
                      <li> <a href="shop_01.html"> winter wear</a></li>
                      <li> <a href="shop_01.html"> jeans</a></li>
                      <li> <a href="shop_01.html"> bra</a></li>
                      <li> <a href="shop_01.html"> babydools</a> </li>
                    </ul>
                    <ul class="col-sm-6">
                      <li> <a href="shop_01.html">deodornts</a></li>
                      <li> <a href="shop_01.html"> skin care</a></li>
                      <li> <a href="shop_01.html"> make up</a></li>
                      <li> <a href="shop_01.html"> watch</a></li>
                      <li> <a href="shop_01.html"> siting bags</a></li>
                      <li> <a href="shop_01.html"> totes</a></li>
                      <li> <a href="shop_01.html"> gold rings</a></li>
                      <li> <a href="shop_01.html"> jewellery</a> </li>
                    </ul>
                  </div>
                </div>
              </li> -->
              
              <!-- MEGA MENU -->
              <!-- <li class="dropdown megamenu"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">store</a>
                <div class="dropdown-menu">
                  <div class="row">  -->
                    
                    <!-- Shop Pages -->
                    <!-- <div class="col-md-3">
                      <h6>Shop Pages</h6>
                      <ul>
                        <li> <a href="shop_01.html">Shop 01 </a> </li>
                        <li> <a href="shop_02.html">Shop 02</a> </li>
                        <li> <a href="shop_03.html">Shop 03 </a> </li>
                        <li> <a href="shop_04.html">Shop 04 </a> </li>
                        <li> <a href="product-detail_01.html">Product Detail 01</a> </li>
                        <li> <a href="product-detail_02.html">Product Detail 02</a> </li>
                        <li> <a href="shopping-cart.html">Shopping Cart</a> </li>
                        <li> <a href="checkout.html">Checkout</a> </li>
                      </ul>
                    </div> -->
                    
                    <!-- TOp Rate Products -->
                    <!-- <div class="col-md-4">
                      <h6>TOp Rate Products</h6>
                      <div class="top-rated">
                        <ul>
                          <li>
                            <div class="media-left">
                              <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="../../public/images/cart-img-1.jpg" alt="..."> </a> </div>
                            </div>
                            <div class="media-body">
                              <h6 class="media-heading">WOOD CHAIR</h6>
                              <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <span class="price">129.00 USD</span> </div>
                          </li>
                          <li>
                            <div class="media-left">
                              <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="../../public/images/cart-img-2.jpg" alt="..."> </a> </div>
                            </div>
                            <div class="media-body">
                              <h6 class="media-heading">STOOL</h6>
                              <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <span class="price">129.00 USD</span> </div>
                          </li>
                          <li>
                            <div class="media-left">
                              <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="../../public/images/cart-img-3.jpg" alt="..."> </a> </div>
                            </div>
                            <div class="media-body">
                              <h6 class="media-heading">WOOD SPOON</h6>
                              <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <span class="price">129.00 USD</span> </div>
                          </li>
                        </ul>
                      </div>
                    </div> -->
                    
                    <!-- New Arrival -->
                    <!-- <div class="col-md-5">
                      <h5>NEW ARRIVAL 2016 <span>(Best Collection)</span></h5>
                      <img class="nav-img" src="../../public/images/nav-img.png" alt="" >
                      <p>Lorem ipsum dolor sit amet,<br>
                        consectetur adipiscing elit. <br>
                        Donec faucibus maximus<br>
                        vehicula.</p>
                      <a href="#." class="btn btn-small btn-round">SHOP NOW</a> </div>
                  </div> -->
                <!-- </div> -->
              <!-- </li> -->
              <!-- <li> <a href="contact.html"> contact</a> </li> -->
            </ul>
          </div>
          
          <!-- Nav Right -->
          <div class="nav-right">
            <ul class="navbar-right">
              
              <!-- USER INFO -->
              <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><i class="icon-user"></i> </a>
                <ul class="dropdown-menu">
                  <li>
                  <?php
                        $username = "";
                        $infoUser;
                        if(isset($_SESSION['user']) != ""){
                            $username = $_SESSION['user'];
                            $user      = mysqli_query($con,"SELECT * FROM tbl_khachhang WHERE email= '$username' ");
                            $infoUser  = mysqli_fetch_array($user);
                    ?>
                    <h6>HELLO! <?php echo $infoUser['name']; ?></h6>
                    <li><a href="/ecommerce-php/views/page/login.php" >LOG OUT</a></li>
                  <?php
                        
                          }else{
                    ?>
                    <li><a href="/ecommerce-php/views/page/login.php" >LOG IN</a></li>
                  <?php

                          }
                    ?>
                  </li>
                  <!-- <li><a href="#">MY CART</a></li> -->
                  <!-- <li><a href="#">ACCOUNT INFO</a></li> -->
                </ul>
              </li>
              
              <!-- USER BASKET -->
              <li class="dropdown user-basket"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="icon-basket-loaded"></i> </a>
                <ul class="dropdown-menu">
                  <?php
                    $total_money = 0;
                    if(isset( $_SESSION["cart_items"]) && count($_SESSION["cart_items"]) > 0 ){
                      foreach($_SESSION["cart_items"] as $item){
                          $id           = $item["pro_id"];
                          $product      = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id= '$id' ");
                          $prod         = mysqli_fetch_array($product);
                          $totalPrice   = $item["quantity"] * $prod["sanpham_gia"];
                          // $prod         = reset($product);
                          $total_money  += $item["quantity"] * $prod["sanpham_gia"];
                  ?>
                  <li>
                    <div class="media-left">
                      <div class="cart-img"> <a href="#"> 
                      <img class="media-object img-responsive" src="../../img/<?php echo $prod['sanpham_image'] ?>" alt="..."> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading"><?php echo $prod['sanpham_name']; ?></h6>
                      <span class="price"><?php echo $prod['sanpham_gia']; ?> VND</span> <span class="qty">QTY: <?php echo $item["quantity"]; ?></span> </div>
                  </li>
                  <?php
                      }
                    }else{
                        echo "Khong co san pham nao trong gio hang";
                    }
                  ?>
                  
                  <li>
                    <h5 class="text-center">SUBTOTAL: <?php echo $total_money; ?> USD</h5>
                  </li>
                  <li class="margin-0">
                    <div class="row">
                      <div class="col-xs-6"> <a href="/ecommerce-php/views/page/cart.php" class="btn">VIEW CART</a></div>
                      <?php
                          $username = "";
                          if(isset($_SESSION['user']) != ""){
                              $username = $_SESSION['user'];
                              echo "<div class='col-xs-6'> <a href='/ecommerce-php/views/page/checkout.php' class='btn'>CHECK OUT</a></div>";
                          }else{
                              echo "<div class='col-xs-6'> <a href='/ecommerce-php/views/page/login.php' class='btn'>LOGIN</a></div>";
                          }
                      ?>
                    </div>
                  </li>
                </ul>
              </li>
              
              <!-- SEARCH BAR -->
              <li class="dropdown"> <a href="javascript:void(0);" class="search-open"><i class=" icon-magnifier"></i></a>
                <div class="search-inside animated bounceInUp"> <i class="icon-close search-close"></i>
                  <div class="search-overlay"></div>
                  <div class="position-center-center">
                    <div class="search">
                      <form>
                        <input type="search" placeholder="Search Shop">
                        <button type="submit"><i class="icon-check"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>