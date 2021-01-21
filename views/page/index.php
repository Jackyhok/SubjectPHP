  <!--======= HOME MAIN SLIDER =========-->
  <?php
    include_once('../partials/header.php');
	  include_once('../../database/db.class.php');
  ?>
  <section class="home-slider"> 
    <!-- SLIDE Start -->
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
          <!-- SLIDE  -->
          
          
          <!-- SLIDE  -->
          <?php
            $sql_slider = mysqli_query($con,"SELECT * FROM tbl_slider WHERE slider_active='1' ORDER BY slider_id");
            while($row_slider = mysqli_fetch_array($sql_slider)){ 
          ?>
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="../../img/<?php echo $row_slider['slider_image'] ?>"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption font-playfair sfb tp-resizeme" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-150" 
                data-speed="800" 
                data-start="500" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 7; font-size:18px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">The Latest Product from PAVSHOP</div>
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr font-regular tp-resizeme letter-space-4" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-50" 
                data-speed="800" 
                data-start="800" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; font-size:78px; color:#fff; text-transform:uppercase; white-space: nowrap;">look beautiful </div>
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="60" 
                data-speed="800" 
                data-start="1300" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; font-size:140px; color:#fff; text-transform:uppercase; white-space: nowrap;">this season </div>
            <!-- LAYER NR. 4 -->
            <div class="tp-caption sfb font-extra-bold tp-resizeme" 
                data-x="center" data-hoffset="120"
                data-y="center" data-voffset="200"
                data-speed="800" 
                data-start="2200" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; font-size:60px; color:#fff; text-transform:uppercase; white-space: nowrap;"><small class="font-regular">$</small> 299 </div>
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb tp-scrollbelowslider tp-resizeme" 
                data-x="center" data-hoffset="-120" 
                data-y="center" data-voffset="200" 
                data-speed="800" 
                data-start="2200" 
                data-easing="Power3.easeInOut" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                data-scrolloffset="0"
                style="z-index: 8;"><a href="/ecommerce-php/views/page/shop.php" class="btn">BUY NOW</a> </div>
          </li>
          <?php
            } 
          ?>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- New Arrival -->
    <section class="padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>new arrival</h4>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
          Sed feugiat, tellus vel tristique posuere, diam</span> </div>
      </div>
      
      <!-- New Arrival -->
      <div class="arrival-block"> 
      <?php
        $sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC LIMIT 8");
        while($row_sanpham = mysqli_fetch_array($sql_product)){ 
          
      ?>
        <!-- Item -->
        <div class="item"> 
          <!-- Images --> 
          <img class="img-1" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> <img class="img-2" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> 
          <!-- Overlay  -->
          <div class="overlay"> 
            <!-- Price --> 
            <span class="price"><?php echo $row_sanpham['sanpham_gia'] ?><small>VND</small></span>
            <div class="position-center-center"> <a href="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" data-lighter><i class="icon-magnifier"></i></a> </div>
          </div>
          <!-- Item Name -->
          <div class="item-name"> <a href="/ecommerce-php/views/page/product-detail.php?id=<?php echo $row_sanpham["sanpham_id"];?>&cateID=<?php echo $row_sanpham["category_id"];?>""><?php echo $row_sanpham['sanpham_name'] ?></a>
            <p><?php echo $row_sanpham['sanpham_mota'] ?></p>
          </div>
        </div>
      <?php
        } 
      ?>
        <!-- Item -->
        
      </div>
    </section>
    
    <!-- Popular Products -->
    <section class="padding-top-50 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>popular products</h4>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
          Sed feugiat, tellus vel tristique posuere, diam</span> </div>
        
        <!-- Popular Item Slide -->
        <div class="papular-block block-slide"> 

        <?php
          if(isset($_POST['btn-signin'])){
           echo "<h1>aaaaa</h1>"; 
        ?>
        <script>
          alert("aaaaa");
        </script>
        <?php
          }
        ?>

        <?php
          $sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_hot='1' ORDER BY sanpham_id DESC LIMIT 8");
          while($row_sanpham = mysqli_fetch_array($sql_product)){ 
        ?>
          <!-- Item -->
          <div class="item"> 
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt="" > <img class="img-2" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt="" > 
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-center-center">
                  <div class="inn">
                    <form method="POST" enctype="multipart/form-data">
                      <a href="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" data-lighter>
                        <i class="icon-magnifier"></i>
                      </a>
                      <a href="/ecommerce-php/views/page/cart.php?id=<?php echo $row_sanpham["sanpham_id"];?>" data-toggle="tooltip" type="submit" name="btnAddToCart" class="btnAddToCart" data-placement="top" title="Add To Cart">
                        <i class="icon-basket">
                        </i>
                      </a> 
                      <a href="#." data-toggle="tooltip" data-placement="top" title="Add To WishList">
                        <i class="icon-heart">
                        </i>
                      </a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="/ecommerce-php/views/page/product-detail.php?id=<?php echo $row_sanpham["sanpham_id"];?>&cateID=<?php echo $row_sanpham["category_id"];?>""><?php echo $row_sanpham['sanpham_name'] ?></a>
              <p><?php echo $row_sanpham['sanpham_mota'] ?></p>
            </div>
            <!-- Price --> 
            <span class="price"><?php echo $row_sanpham['sanpham_gia'] ?><small>VND</small> </div>
        <?php
          } 
        ?>
      <!-- Item -->
          
      </div>
    </section>
    
    <!-- Knowledge Share -->
    <section class="light-gray-bg padding-top-150 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>knowledge share</h4>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
          Sed feugiat, tellus vel tristique posuere, diam</span> </div>
        <div class="knowledge-share">
          <ul class="row">
            
            <!-- Post 1 -->
            <li class="col-md-6">
              <div class="date"> <span>December</span> <span class="huge">27</span> </div>
              <a href="#.">Donec commo is vulputate</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. Sed feugiat, tellus vel tristique posuere, diam</p>
              <span>By <strong>Admin</strong></span> </li>
            
            <!-- Post 2 -->
            <li class="col-md-6">
              <div class="date"> <span>December</span> <span class="huge">09</span> </div>
              <a href="#.">Donec commo is vulputate</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. Sed feugiat, tellus vel tristique posuere, diam</p>
              <span>By <strong>Admin</strong></span> </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!-- Testimonial -->
    <section class="testimonial padding-top-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-6"> 
            
            <!-- SLide -->
            <div class="single-slide"> 
              
              <!-- Slide -->
              <div class="testi-in"> <i class="fa fa-quote-left"></i>
                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                <h5>john smith</h5>
              </div>
              
              <!-- Slide -->
              <div class="testi-in"> <i class="fa fa-quote-left"></i>
                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                <h5>john smith</h5>
              </div>
              
              <!-- Slide -->
              <div class="testi-in"> <i class="fa fa-quote-left"></i>
                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                <h5>john smith</h5>
              </div>
            </div>
          </div>
          
          <!-- Img -->
          <div class="col-sm-6"> <img class="img-responsive" src="../../img/g.jpg" alt=""> </div>
        </div>
      </div>
    </section>
    
    <!-- About -->
    <section class="small-about padding-top-150 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>about PAVSHOP</h4>
          <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odio luctus non. Nulla lacinia,
            eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
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
    <section class="news-letter padding-top-150 padding-bottom-150">
      <div class="container">
        <div class="heading light-head text-center margin-bottom-30">
          <h4>NEWSLETTER</h4>
          <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odi </span> </div>
        <form>
          <input type="email" placeholder="Enter your email address" required>
          <button type="submit">SEND ME</button>
        </form>
      </div>
    </section>
  </div>
  <?php
      include_once('../partials/footer.php');
  ?>

  <script>
    //  $(document).on(btnAddToCart)
  </script>
  