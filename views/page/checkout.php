<?php
    include_once('../partials/header.php');
    include_once('../../database/db.class.php');
?>

<section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% -69px;">
    <div class="position-center-center">
      <div class="container">
        <h4>Thanh toán</h4>
        <p>-----------------</p>
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Cửa hàng</a></li>
            <li class="active">Trang thanh toán</li>
        </ol>
        </ol>
      </div>
    </div>
</section>

<div id="content"> 
    
    <!--======= PAGES INNER =========-->
    <section class="chart-page padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="shopping-cart"> 
          
          <!-- SHOPPING INFORMATION -->
          <div class="cart-ship-info">
            <div class="row"> 
              
              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-7">
                <h6>Thông tin khách hàng</h6>
                <?php
                    $username = "";
                    $infoUser;
                    if(isset($_SESSION['user']) != ""){
                        $username = $_SESSION['user'];
                        $user      = mysqli_query($con,"SELECT * FROM tbl_khachhang WHERE email= '$username' ");
                        $infoUser  = mysqli_fetch_array($user);
                    }
                ?>
                <form method="POST" enctype="multipart/form-data" >
                  <ul class="row">
                    
                    <!-- Name -->
                    <li class="col-md-6">
                      <label> *EMAIL
                        <input type="text" value="<?php echo $infoUser['name']; ?>" name="first-name" value="" placeholder="">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *Số điện thoại
                        <input type="text" value="<?php echo $infoUser['phone']; ?>" name="last-name" value="" placeholder="">
                      </label>
                    </li>
                    <li class="col-md-6"> 
                      <!-- COMPANY NAME -->
                      <label> *Địa chỉ
                        <input type="text" value="<?php echo $infoUser['address']; ?>"  name="company" value="" placeholder="">
                      </label>
                    </li>
                    
                  </ul>
                </form>
                
                
              </div>
              
              <!-- SUB TOTAL -->
              <div class="col-sm-5">
                <h6>Đơn đặt hàng</h6>
                <div class="order-place">
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
                    <p><?php echo $prod["sanpham_name"];?> (<?php echo $item["quantity"];?>) <span><?php echo number_format($totalPrice, 0 , "", "."); ?> VND </span></p>
                    <?php
                            }
                        }else{
                            echo "Không có sản phẩm trong giỏ";
                        }
                    ?>
                    
                    <!-- SUB TOTAL -->
                    <p class="all-total">TỔNG TIỀN <span> <?php echo number_format($total_money, 0 , "", "."); ?> VND</span></p>
                  </div>
                  <div class="pay-meth">
                    <ul>
                      <li>
                        <div class="radio">
                          <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                          <label for="radio1"> THANH TOÁN TRỰC TUYẾN </label>
                        </div>
                        <p></p>
                      </li>
                      
                      <li>
                        <div class="checkbox">
                          <input id="checkbox3-4" class="styled" type="checkbox">
                          <label for="checkbox3-4"> Tôi đã đọc <span class="color"> điều khoản &amp; điều kiện </span> </label>
                        </div>
                      </li>
                    </ul>
                    <a class="btn  btn-dark pull-right margin-top-30 btnOrder">Đặt hàng</a> </div>
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
<script>

    $(document).on("click", ".btnOrder", function(){
      toastr.success("Thanh toán thành công", "Thông Báo")
      setTimeout(() => {
       window.location.href = "/ecommerce-php/views/page/checkout-success.php"
      }, 2000);
    })

</script>