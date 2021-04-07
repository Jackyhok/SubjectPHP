
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>Shop LHB</title>

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



</head>
<body>


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
              <li class="dropdown active"><a href="/ecommerce-php/views/page/index.php" class="dropdown-toggle" >Trang chủ</a>
                
              </li>
              <li class="dropdown"> <a href="/ecommerce-php/views/page/shop.php" class="dropdown-toggle">Cửa hàng</a>
                
              </li>
              <li> <a href="https://mwg.vn/">Thông tin</a></li>
              
            
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
                    <li><a href="/ecommerce-php/views/page/login.php" >Đăng xuất</a></li>
                  <?php
                        
                          }else{
                    ?>
                    <li><a href="/ecommerce-php/views/page/login.php" >Đăng nhập</a></li>
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
                      <span class="price"><?php echo $prod['sanpham_gia']; ?> VND</span> <span class="qty">Số lượng: <?php echo $item["quantity"]; ?></span> </div>
                  </li>
                  <?php
                      }
                    }else{
                        echo "Không có sản phẩm trong giỏ hàng";
                    }
                  ?>
                  
                  <li>
                    <h5 class="text-center">Tổng tiền: <?php echo $total_money; ?> USD</h5>
                  </li>
                  <li class="margin-0">
                    <div class="row">
                      <div class="col-xs-6"> <a href="/ecommerce-php/views/page/cart.php" class="btn">Xem giỏ hàng</a></div>
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