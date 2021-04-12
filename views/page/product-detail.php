<?php
    include_once('../partials/header.php');
    include_once('../../database/db.class.php');
?>

<section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% 102.6px;">
    <div class="position-center-center">
      <div class="container">
      <h4>Trang chi tiết sản phẩm</h4>
        <p>-----------------</p>
        <ol class="breadcrumb">
          <li><a href="#">Trang chủ</a></li>
          <li><a href="#">Cửa hàng</a></li>
          <li class="active">Trang chi tiết</li>
        </ol>
      </div>
    </div>
</section>

<div id="content"> 
    <?php
      if( !isset($_GET["id"]) ){
        header('Location: not_found.php');
      }else{
        $id = $_GET["id"];
        $cateID = $_GET["cateID"];
        $product      = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id= '$id' ");
        $prod         = mysqli_fetch_array($product);

        $productOfCate      = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id != '$id' AND category_id='$cateID' ");
        // $prodCate           = mysqli_fetch_array($productOfCate);

    ?>
    <!-- sản phẩm nổi -->
    <section class="padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- SHOP DETAIL -->
        <div class="shop-detail">
          <div class="row"> 
            
            <!-- Popular ../../public/Images Slider -->
            <div class="col-md-7"> 
              
              <!-- ../../public/Images Slider -->
              <div class="../../img/<?php echo $prod["sanpham_image"];?>">
                <ul class="slides">
                  <li data-thumb="../../img/<?php echo $prod["sanpham_image"];?>"> 
                    <img class="img-responsive" src="../../img/<?php echo $prod['sanpham_image'] ?>"  alt=""> </li>
                  <!-- <li data-thumb="../../public/images/large-img-2.jpg"> <img class="img-responsive" src="../../public/images/large-img-2.jpg"  alt=""> </li>
                  <li data-thumb="../../public/images/large-img-3.jpg"> <img class="img-responsive" src="../../public/images/large-img-3.jpg"  alt=""> </li> -->
                </ul>
              </div>
            </div>
            
            <!-- COntent -->
            <div class="col-md-5">
              <h4><?php echo $prod["sanpham_name"];?></h4>
              <span class="price"><?php echo $prod["sanpham_gia"];?><small>VND</small></span> 
              
              <!-- Sale Tags -->
              <div class="on-sale"> <?php echo round(100 - $prod['sanpham_giakhuyenmai'] / $prod['sanpham_gia'] * 100)  ?>% <span>OFF</span> </div>
              <ul class="item-owner">
                <li>Nhà tạo mẫu :<span> ABC Art</span></li>
                <li>Hãng thời trang:<span> LimeWood</span></li>
              </ul>
              
              <!-- Item Detail -->
              <p><?php echo $prod["sanpham_mota"];?></p>
              
              <!-- Short By -->
              <div class="some-info">
                <ul class="row margin-top-30">
                  <li class="col-xs-4">
                    <div class="quinty"> 
                      <!-- QTY -->
                      <select class="selectpicker">
                        <option><?php echo $prod["sanpham_soluong"];?></option>
                      </select>
                    </div>
                  </li>
                  
                  <!-- COLORS -->
                  <li class="col-xs-8">
                    <ul class="colors-shop">
                      <li><span class="margin-right-20">Màu</span></li>
                      <li><a href="#." style="background:#958170;"></a></li>
                      <li><a href="#." style="background:#c9a688;"></a></li>
                      <li><a href="#." style="background:#c9c288;"></a></li>
                      <li><a href="#." style="background:#a7c988;"></a></li>
                      <li><a href="#." style="background:#9ed66b;"></a></li>
                      <li><a href="#." style="background:#6bd6b1;"></a></li>
                      <li><a href="#." style="background:#82c2dc;"></a></li>
                      <li><a href="#." style="background:#8295dc;"></a></li>
                    </ul>
                  </li>
                  
                  <!-- ADD TO CART -->
                  <li class="col-xs-6"> <a href="/ecommerce-php/views/page/cart.php?id=<?php echo $prod["sanpham_id"];?>" class="btn">Thêm vào giỏ</a> </li>
                  
                  <!-- LIKE -->
                  <li class="col-xs-6"> <a href="#." class="like-us"><i class="icon-heart"></i></a> </li>
                </ul>
                
                
                
              </div>
            </div>
          </div>
        </div>
        
        <!--======= PRODUCT DESCRIPTION =========-->
        <div class="item-decribe"> 
          <!-- Nav tabs -->
          <ul class="nav nav-tabs animate fadeInUp" data-wow-delay="0.4s" role="tablist">
            <li role="presentation" class="active"><a href="#descr" role="tab" data-toggle="tab">Thông tin sản phẩm</a></li>
            <!-- <li role="presentation"><a href="#review" role="tab" data-toggle="tab">REVIEW (03)</a></li>
            <li role="presentation"><a href="#tags" role="tab" data-toggle="tab">INFORMATION</a></li> -->
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content animate fadeInUp" data-wow-delay="0.4s"> 
            <!-- DESCRIPTION -->
            <div role="tabpanel" class="tab-pane fade in active" id="descr">
              <p><?php echo $prod["sanpham_mota"];?><br>
              </p>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>
    
    <!-- Popular Products -->
    <section class="light-gray-bg padding-top-150 padding-bottom-150">
      <div class="container"> 
        
        
        
        <!-- Popular Item Slide -->
        <div class="papular-block block-slide"> 
          
          <!-- Item -->
          <?php 
           while($prodCate = mysqli_fetch_array($productOfCate)){ 
            ?>

           
          <div class="item"> 
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="../../img/<?php echo $prodCate["sanpham_image"];?>" alt="" > 
              <img class="img-2" src="../../img/<?php echo $prodCate["sanpham_image"];?>" alt="" > 
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-center-center">
                  <div class="inn"><a href="../../public/images/product-1.jpg" data-lighter><i class="icon-magnifier"></i></a> <a href="/ecommerce-php/views/page/cart.php?id=<?php echo $prodCate["sanpham_id"];?>"><i class="icon-basket"></i></a> <a href="#." ><i class="icon-heart"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="/ecommerce-php/views/page/product-detail.php?id=<?php echo $prodCate["sanpham_id"];?>&cateID=<?php echo $prodCate["category_id"];?>""><?php echo $prodCate["sanpham_name"];?></a>
              <p><?php echo $prodCate["sanpham_mota"];?></p>
            </div>
            <!-- Price --> 
            <span class="price"><?php echo $prodCate["sanpham_gia"];?><small>VND</small></span> 
            </div>
            <?php
          }
          ?>
          
          </div>
      </div>
    </section>
    <?php
      }
    ?>
    <!-- About -->
    <section class="small-about padding-top-150 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
        <h4>Về LHB</h4>
          <p>Sáng lập bởi 3 sinh viên Long Hưng Bằng</p>
        </div>
        
        <!-- Social Icons -->
        <ul class="social_icons">
          <li><a href="#."><i class="icon-social-facebook"></i></a></li>
          <li><a href="#."><i class="icon-social-twitter"></i></a></li>
          <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
          <li><a href="#."><i class="icon-social-youtube"></i></a></li>
          <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
        </ul>
      </div>
    </section>
    
    
  </div>
<?php
    include_once('../partials/footer.php');
?>