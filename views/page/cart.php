<?php
    include_once('../partials/header.php');
    include_once('../../database/db.class.php');
?>
<section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% 6.2px;">
    <div class="position-center-center">
        <div class="container">
        <h4>SHOPPING CART</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
            Sed feugiat, tellus vel tristique posuere, diam</p>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">SHOP</a></li>
            <li class="active">SHOPPING CART</li>
        </ol>
        </div>
    </div>
</section>
<div id="content"> 
    <!--======= PAGES INNER =========-->
    <section class="padding-top-100 padding-bottom-100 pages-in chart-page">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="shopping-cart text-center">
          <div class="cart-head">
            <ul class="row">
              <!-- PRODUCTS -->
              <li class="col-sm-2 text-left">
                <h6>PRODUCTS</h6>
              </li>
              <!-- NAME -->
              <li class="col-sm-4 text-left">
                <h6>NAME</h6>
              </li>
              <!-- PRICE -->
              <li class="col-sm-2">
                <h6>PRICE</h6>
              </li>
              <!-- QTY -->
              <li class="col-sm-1">
                <h6>QTY</h6>
              </li>
              
              <!-- TOTAL PRICE -->
              <li class="col-sm-2">
                <h6>TOTAL</h6>
              </li>
              <li class="col-sm-1"> </li>
            </ul>
          </div>
          <?php

                error_reporting(E_ALL);
                ini_set('display_errors','1');

                if (isset($_GET["id"])){
                    $pro_id = $_GET["id"];
                    $was_found = false;
                    $i = 0;

                    if(!isset($_SESSION["cart_items"]) || count($_SESSION["cart_items"]) < 1){
                        $_SESSION["cart_items"] = array( 0 => array("pro_id" => $pro_id, "quantity" => 1));
                    }else{
                        foreach( $_SESSION["cart_items"] as $item ){
                            $i++;
                            foreach ($item as $key => $value) {
                                if( $key == "pro_id" && $value == $pro_id){
                                    array_splice($_SESSION["cart_items"], $i-1, 1, array(array("pro_id" => $pro_id, "quantity" => $item["quantity"] + 1)));
                                    $was_found = true;
                                }
                            }
                        }
                        if( $was_found == false){
                            array_push($_SESSION["cart_items"], array("pro_id" => $pro_id, "quantity" => 1));
                        }
                    }
                }
            ?>
          <!-- Cart Details -->
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
          <ul class="row cart-details">
            <li class="col-sm-6">
              <div class="media"> 
                <!-- Media Image -->
                <div class="media-left media-middle"> 
                    <a href="#." class="item-img"> 
                        <img class="media-object" src="../../img/<?php echo $prod["sanpham_image"];?>" alt=""> 
                    </a> 
                </div>
                
                <!-- Item Name -->
                <div class="media-body">
                  <div class="position-center-center">
                    <h5><?php echo $prod["sanpham_name"];?></h5>
                    <p><?php echo $prod["sanpham_mota"];?></p>
                  </div>
                </div>
              </div>
            </li>
            
            <!-- PRICE -->
            <li class="col-sm-2">
              <div class="position-center-center"> <span class="price priceProduct"><?php echo $prod['sanpham_gia'] ?><small>VND</small> </span> </div>
            </li>
            
            <!-- QTY -->
            <li class="col-sm-1">
              <div class="position-center-center">
                <div class="quinty"> 
                  <!-- QTY -->
                  <div class="btn-group bootstrap-select">
                        <!-- <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="1">
                            <span class="filter-option pull-left">1</span>&nbsp;
                            <span class="bs-caret">
                                <span class="caret">
                            </span>
                            </span>
                        </button> -->
                    <div class="dropdown-menu open">
                        <ul class="dropdown-menu inner" role="menu">
                  <li data-original-index="0" class="selected">
                  <a tabindex="0" class="" style="" data-tokens="null">
                  <span class="text">1</span><span class="glyphicon glyphicon-ok check-mark">
                  </span>
                  </a></li>
                  <li data-original-index="1">
                  <a tabindex="0" class="" style="" data-tokens="null">
                  <span class="text">2</span>
                  <span class="glyphicon glyphicon-ok check-mark">
                  </span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div>
                  <select class="selectpicker" tabindex="-98">
                    <option value="<?php echo $item["quantity"]; ?>"><?php echo $item["quantity"]; ?></option>
                    <!-- <option>2</option>
                    <option>3</option> -->
                  </select></div>
                </div>
              </div>
            </li>
            
            <!-- TOTAL PRICE -->
            <li class="col-sm-2">
              <div class="position-center-center"> <span class="price total"><?php echo $totalPrice; ?><small>VND</small></span> </div>
            </li>
            
            <!-- REMOVE -->
            <li class="col-sm-1">
              <div class="position-center-center"> <a href="#."><i class="icon-close removeShop"></i></a> </div>
            </li>
          </ul>
          <?php
                }
            }else{
                echo "Khong co san pham nao trong gio hang";
            }
            ?>
        </div>
      </div>
    </section>
    
    <!--======= PAGES INNER =========-->
    <section class="padding-top-100 padding-bottom-100 light-gray-bg shopping-cart small-cart">
      <div class="container"> 
        
        <!-- SHOPPING INFORMATION -->
        <div class="cart-ship-info margin-top-0">
          <div class="row"> 
            
            <!-- DISCOUNT CODE -->
            <div class="col-sm-7">
              <h6>DISCOUNT CODE</h6>
              <form>
                <input type="text" value="" placeholder="ENTER YOUR CODE IF YOU HAVE ONE">
                <button type="submit" class="btn btn-small btn-dark">APPLY CODE</button>
              </form>
              <div class="coupn-btn"> <a href="#." class="btn">continue shopping</a> <a href="#." class="btn">update cart</a> </div>
            </div>
           
            <!-- SUB TOTAL -->
            <div class="col-sm-5">
              <h6>grand total</h6>
              <div class="grand-total">
                <div class="order-detail">
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
                    <p><?php echo $prod["sanpham_name"];?><span><?php echo $totalPrice; ?> VND </span></p>
                <?php
                        }
                    }else{
                        echo "Khong co san pham nao trong gio hang";
                    }
                ?>
                  <!-- SUB TOTAL -->
                  <p class="all-total">TOTAL COST <span> <?php echo $total_money; ?> VND</span></p>
                </div>
              </div>
            </div>
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

    $(document).ready(function(){
    })
    $(document).on("click", '.removeShop', function(){
        $(this).parents(".cart-details").remove();
    } )

</script>
