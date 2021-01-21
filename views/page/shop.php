<?php
  include_once('../partials/header.php');
    include_once('../../database/db.class.php');
?>

<section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% 56.2px;">
    <div class="position-center-center">
        <div class="container">
        <h4>PAVSHOP PRODUCTS</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
            Sed feugiat, tellus vel tristique posuere, diam</p>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Data</li>
        </ol>
        </div>
    </div>
</section>
<div id="content"> 
    <!-- Products -->
    <section class="shop-page padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop SideBar -->
          <div class="col-sm-3">
            <div class="shop-sidebar"> 
              
              <!-- Category -->
              <h5 class="shop-tittle margin-bottom-30">category</h5>
              <ul class="shop-cate">
              <?php
                    $sql_category = mysqli_query($con,"SELECT * FROM tbl_category");
                    while($row_sanpham = mysqli_fetch_array($sql_category)){ 
                ?>
                <li><a href="/ecommerce-php/views/page/shop.php?cateID='<?php echo $row_sanpham['category_id'] ?>'"> <?php echo $row_sanpham['category_name'] ?></a></li>
                <?php
                    } 
                ?>
              </ul>
              
              <!-- FILTER BY PRICE -->
              <h5 class="shop-tittle margin-top-60 margin-bottom-30">FILTER BY PRICE</h5>
              <ul class="shop-tags">
                <li><input type="radio" id="ckPrice" name="filerPrice" value="0" style="margin: .4rem;"><label style="font: 1.5rem 'Fira Sans', sans-serif;" >500.000 - 1.000.000 VND</label></li>
                <li><input type="radio" id="ckPrice" name="filerPrice" value="1" style="margin: .4rem;"><label style="font: 1.5rem 'Fira Sans', sans-serif;" >1.000.000 - 1.500.000 VND</label></li>
                <li><input type="radio" id="ckPrice" name="filerPrice" value="2" style="margin: .4rem;"><label style="font: 1.5rem 'Fira Sans', sans-serif;" >1.500.000 - 2.000.000 VND</label></li>
                <li><input type="radio" id="ckPrice" name="filerPrice" value="3" style="margin: .4rem;"><label style="font: 1.5rem 'Fira Sans', sans-serif;" > > 2.000.000 VND</label></li>
              </ul>
              <!-- TAGS -->
              <!-- <h5 class="shop-tittle margin-top-60 margin-bottom-30">FILTER BY COLORS</h5>
              <ul class="colors">
                <li><a href="#." style="background:#958170;"></a></li>
                <li><a href="#." style="background:#c9a688;"></a></li>
                <li><a href="#." style="background:#c9c288;"></a></li>
                <li><a href="#." style="background:#a7c988;"></a></li>
                <li><a href="#." style="background:#9ed66b;"></a></li>
                <li><a href="#." style="background:#6bd6b1;"></a></li>
                <li><a href="#." style="background:#82c2dc;"></a></li>
                <li><a href="#." style="background:#8295dc;"></a></li>
                <li><a href="#." style="background:#9b82dc;"></a></li>
                <li><a href="#." style="background:#dc82d9;"></a></li>
                <li><a href="#." style="background:#dc82a2;"></a></li>
                <li><a href="#." style="background:#e04756;"></a></li>
                <li><a href="#." style="background:#f56868;"></a></li>
                <li><a href="#." style="background:#eda339;"></a></li>
                <li><a href="#." style="background:#edd639;"></a></li>
                <li><a href="#." style="background:#daed39;"></a></li>
                <li><a href="#." style="background:#a3ed39;"></a></li>
                <li><a href="#." style="background:#f56868;"></a></li>
              </ul> -->
              
              <!-- TAGS -->
              <!-- <h5 class="shop-tittle margin-top-60 margin-bottom-30">PAUPLAR TAGS</h5>
              <ul class="shop-tags">
                <li><a href="#.">Towels</a></li>
                <li><a href="#.">Chair</a></li>
                <li><a href="#.">Bedsheets</a></li>
                <li><a href="#.">Shoe</a></li>
                <li><a href="#.">Curtains</a></li>
                <li><a href="#.">Clocks</a></li>
                <li><a href="#.">TV Cabinets</a></li>
                <li><a href="#.">Best Seller</a></li>
                <li><a href="#.">Top Selling</a></li>
              </ul>
               -->
              <!-- BRAND -->
              <!-- <h5 class="shop-tittle margin-top-60 margin-bottom-30">brands</h5>
              <ul class="shop-cate">
                <li><a href="#."> G-Furniture
                  BigYellow</a></li>
                <li><a href="#."> WoodenBazaar</a></li>
                <li><a href="#."> GreenWoods</a></li>
                <li><a href="#."> Hot-n-Fire </a></li>
              </ul> -->
              
              <!-- SIDE BACR BANER -->
              <div class="side-bnr margin-top-50"> <img class="img-responsive" src="../../img/air-zoom-pegasus-37-running-shoe-mwrTCc.jpg" alt="">
                <div class="position-center-center"> <span class="price">1200000<small>VND</small></span>
                  <div class="bnr-text">look
                    hot
                    with
                    style</div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Item Content -->
          <div class="col-sm-9">
            <!-- <div class="item-display">
              <div class="row">
                <div class="col-xs-6"> <span class="product-num">Showing 1 - 10 of products</span> </div>
                
                <div class="col-xs-6">
                  <div class="pull-right"> 
                    
                    <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Short By"><span class="filter-option pull-left">Short By</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Short By</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Short By</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Short By</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" tabindex="-98">
                      <option>Short By</option>
                      <option>Short By</option>
                      <option>Short By</option>
                    </select></div>
                    <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Filter By"><span class="filter-option pull-left">Filter By</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Filter By</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Short By</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Short By</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" tabindex="-98">
                      <option>Filter By</option>
                      <option>Short By</option>
                      <option>Short By</option>
                    </select></div>
                    
                    <a href="#." class="grid-style"><i class="icon-grid"></i></a> <a href="#." class="list-style"><i class="icon-list"></i></a> </div>
                </div>
              </div>
            </div> -->
            
            <!-- Popular Item Slide -->
            <div class="papular-block row listPro"> 
            <?php
                
                $sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC LIMIT 10");
                while($row_sanpham = mysqli_fetch_array($sql_product)){ 
            ?>
              <!-- Item -->
              <div class="col-md-4 allList">
                <div class="item"> 
                  <!-- Sale Tags -->
                  <div class="on-sale"> <?php echo round(100 - $row_sanpham['sanpham_giakhuyenmai'] / $row_sanpham['sanpham_gia'] * 100)  ?>% <span>OFF</span> </div>
                  
                  <!-- Item img -->
                  <div class="item-img"> <img class="img-1" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> <img class="img-2" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> 
                    <!-- Overlay -->
                    <div class="overlay">
                      <div class="position-center-center">
                        <div class="inn">
                          <a href="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" data-lighter="">
                            <i class="icon-magnifier">
                            </i>
                          </a> 
                          <a href="/ecommerce-php/views/page/cart.php?id=<?php echo $row_sanpham["sanpham_id"];?>"><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                      </div>
                    </div>
                  </div>
                  <!-- Item Name -->
                  <div class="item-name"> <a href="/ecommerce-php/views/page/product-detail.php?id=<?php echo $row_sanpham["sanpham_id"];?>&cateID=<?php echo $row_sanpham["category_id"];?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
                    <p><?php echo $row_sanpham['sanpham_mota'] ?></p>
                  </div>
                  <!-- Price --> 
                  <span class="price"><?php echo $row_sanpham['sanpham_gia'] ?><small>VND</small>  </div>
              </div>
            <?php
                } 
            ?>
            
            <?php
                $sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_gia > 500000 AND sanpham_gia < 1000000 ORDER BY sanpham_id DESC");
                while($row_sanpham = mysqli_fetch_array($sql_product)){ 
            ?>
              <!-- Item -->
              <div class="col-md-4 priceOld" style="display:none;">
                <div class="item"> 
                  <!-- Sale Tags -->
                  <div class="on-sale"> 10% <span>OFF</span> </div>
                  
                  <!-- Item img -->
                  <div class="item-img"> <img class="img-1" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> <img class="img-2" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> 
                    <!-- Overlay -->
                    <div class="overlay">
                      <div class="position-center-center">
                        <div class="inn"><a href="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" data-lighter=""><i class="icon-magnifier"></i></a> <a href="/ecommerce-php/views/page/cart.php?id=<?php echo $row_sanpham["sanpham_id"];?>"><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                      </div>
                    </div>
                  </div>
                  <!-- Item Name -->
                  <div class="item-name"> <a href="/ecommerce-php/views/page/product-detail.php?id=<?php echo $row_sanpham["sanpham_id"];?>&cateID=<?php echo $row_sanpham["category_id"];?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
                    <p><?php echo $row_sanpham['sanpham_mota'] ?></p>
                  </div>
                  <!-- Price --> 
                  <span class="price"><?php echo $row_sanpham['sanpham_gia'] ?><small>VND</small>  </div>
              </div>
            <?php
                } 
            ?>
              
            <?php
                $sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_gia > 1000000 AND sanpham_gia < 1500000 ORDER BY sanpham_id DESC");
                while($row_sanpham = mysqli_fetch_array($sql_product)){ 
            ?>
              <!-- Item -->
              <div class="col-md-4 priceBth" style="display:none;">
                <div class="item"> 
                  <!-- Sale Tags -->
                  <div class="on-sale"> 10% <span>OFF</span> </div>
                  
                  <!-- Item img -->
                  <div class="item-img"> <img class="img-1" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> <img class="img-2" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> 
                    <!-- Overlay -->
                    <div class="overlay">
                      <div class="position-center-center">
                        <div class="inn"><a href="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" data-lighter=""><i class="icon-magnifier"></i></a> <a href="/ecommerce-php/views/page/cart.php?id=<?php echo $row_sanpham["sanpham_id"];?>"><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                      </div>
                    </div>
                  </div>
                  <!-- Item Name -->
                  <div class="item-name"> <a href="/ecommerce-php/views/page/product-detail.php?id=<?php echo $row_sanpham["sanpham_id"];?>&cateID=<?php echo $row_sanpham["category_id"];?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
                    <p><?php echo $row_sanpham['sanpham_mota'] ?></p>
                  </div>
                  <!-- Price --> 
                  <span class="price"><?php echo $row_sanpham['sanpham_gia'] ?><small>VND</small>  </div>
              </div>
            <?php
                } 
            ?>

            <?php
                $sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_gia > 1500000 AND sanpham_gia < 2000000 ORDER BY sanpham_id DESC");
                while($row_sanpham = mysqli_fetch_array($sql_product)){ 
            ?>
              <!-- Item -->
              <div class="col-md-4 priceKha" style="display:none;">
                <div class="item"> 
                  <!-- Sale Tags -->
                  <div class="on-sale"> 10% <span>OFF</span> </div>
                  
                  <!-- Item img -->
                  <div class="item-img"> <img class="img-1" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> <img class="img-2" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> 
                    <!-- Overlay -->
                    <div class="overlay">
                      <div class="position-center-center">
                        <div class="inn"><a href="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" data-lighter=""><i class="icon-magnifier"></i></a> <a href="/ecommerce-php/views/page/cart.php?id=<?php echo $row_sanpham["sanpham_id"];?>"><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                      </div>
                    </div>
                  </div>
                  <!-- Item Name -->
                  <div class="item-name"> <a href="/ecommerce-php/views/page/product-detail.php?id=<?php echo $row_sanpham["sanpham_id"];?>&cateID=<?php echo $row_sanpham["category_id"];?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
                    <p><?php echo $row_sanpham['sanpham_mota'] ?></p>
                  </div>
                  <!-- Price --> 
                  <span class="price"><?php echo $row_sanpham['sanpham_gia'] ?><small>VND</small>  </div>
              </div>
            <?php
                } 
            ?>
             
             <?php
                $sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_gia > 2000000 ORDER BY sanpham_id DESC");
                while($row_sanpham = mysqli_fetch_array($sql_product)){ 
            ?>
              <!-- Item -->
              <div class="col-md-4 priceCao" style="display:none;">
                <div class="item"> 
                  <!-- Sale Tags -->
                  <div class="on-sale"> 10% <span>OFF</span> </div>
                  
                  <!-- Item img -->
                  <div class="item-img"> <img class="img-1" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> <img class="img-2" src="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""> 
                    <!-- Overlay -->
                    <div class="overlay">
                      <div class="position-center-center">
                        <div class="inn"><a href="../../img/<?php echo $row_sanpham['sanpham_image'] ?>" data-lighter=""><i class="icon-magnifier"></i></a> <a href="/ecommerce-php/views/page/cart.php?id=<?php echo $row_sanpham["sanpham_id"];?>"><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                      </div>
                    </div>
                  </div>
                  <!-- Item Name -->
                  <div class="item-name"> <a href="/ecommerce-php/views/page/product-detail.php?id=<?php echo $row_sanpham["sanpham_id"];?>&cateID=<?php echo $row_sanpham["category_id"];?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
                    <p><?php echo $row_sanpham['sanpham_mota'] ?></p>
                  </div>
                  <!-- Price --> 
                  <span class="price"><?php echo $row_sanpham['sanpham_gia'] ?><small>VND</small>  </div>
              </div>
            <?php
                } 
            ?>

            </div>
            
            <!-- Pagination -->
            <ul class="pagination">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
            </ul>
          </div>
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
    
    <!-- News Letter -->
    <section class="news-letter padding-top-150 padding-bottom-150">
      <div class="container">
        <div class="heading light-head text-center margin-bottom-30">
          <h4>NEWSLETTER</h4>
          <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odi </span> </div>
        <form>
          <input type="email" placeholder="Enter your email address" required="">
          <button type="submit">SEND ME</button>
        </form>
      </div>
    </section>
  </div>


<?php
    include_once('../partials/footer.php');
?>
<script>

    $(document).on("change", "#ckPrice", function(){
        console.log($('input[name=filerPrice]:checked')); 
        // if( ){
        // $(this).attr("checked", true);
        // $('input[name=filerPrice]:checked').attr("checked", false)
        // }
        let value = $(this).val();
        let from;
        let to;
        if( value == "0" ){
            from = 500000;
            to   = 1000000;
            $(".allList").hide();
            $(".priceBth").hide();
            $(".priceKha").hide();
            $(".priceCao").hide();
            $(".priceOld").show();
        }else if( value == "1" ){
            from = 1000000;
            to   = 1500000;
            $(".allList").hide();
            $(".priceOld").hide();
            $(".priceKha").hide();
            $(".priceCao").hide();
            $(".priceBth").show();
        }else if( value == "2" ){
            from = 1500000;
            to   = 2000000;
            $(".allList").hide();
            $(".priceBth").hide();
            $(".priceKha").hide();
            $(".priceCao").hide();
            $(".priceKha").show();
        }else if( value == "3" ){
            from = 200000;
            $(".allList").hide();
            $(".priceBth").hide();
            $(".priceKha").hide();
            $(".priceOld").hide();
            $(".priceCao").show();
        }
    })

</script>
