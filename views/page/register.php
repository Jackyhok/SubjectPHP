<?php
    include_once('../partials/header.php');
    include_once('../../database/db.class.php');
?>
<section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% 281px;">
    <div class="position-center-center">
      <div class="container">
        <h4>Trang đăng ký</h4>
        <p>-----------------</p>
        <ol class="breadcrumb">
          <li><a href="#">Trang chủ</a></li>
          <li><a href="#">Cửa hàng</a></li>
          <li class="active">Trang đăng ký</li>
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
          <div class="cart-ship-info register">
            <div class="row"> 
              
              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-12">
                <h6>Trang đăng ký</h6>
                <?php
                
                if(isset($_POST['btnRegister'])){
                  $email        = $_POST['txtEmail'];
                  $name         = $_POST['txtName'];
                  $phone        = $_POST['txtPhone'];
                  $address      = $_POST['txtAddress'];
                  $password     = $_POST['txtPassword'];
                  $password2    = $_POST['txtPassword2'];
                  if( $password != $password2){
                    ?>  
                      <script>
                          toastr.error("Mời bạn nhập lại mật khẩu","Thông báo");
                      </script>
                    <?php
                  }else{
                    $passworda   = md5($password);
                    $sql_insert_user = mysqli_query($con,"INSERT INTO tbl_khachhang( name, phone, address, email, password )
                                                            values ('$name','$phone','$address','$email','$passworda')
                                                            ");
                    // $result   = mysqli_fetch_array($sql_user);
                    if(!$sql_insert_user ){
                      ?>
                          <script>
                            toastr.error("Mời bạn đăng ký lại","Thông báo");
                          </script>
                      <?php
                    }
                    else{
                        ?>
                          <script>
                            toastr.success("bạn đã đăng ký thành công","Thông báo");
                            setTimeout(() => {
                              window.location.href = "/ecommerce-php/views/page/login.php"
                            }, 1000);
                          </script>
                        <?php
                    }
                  }
                }
                ?>
                <form method="POST" enctype="multipart/form-data">
                  <ul class="row">
                    
                    <!-- Name -->
                    <li class="col-md-6">
                      <label> *Địa chỉ email
                        <input type="text" name="txtEmail" value="" placeholder="">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *Mật khẩu
                        <input type="password" name="txtPassword" value="" placeholder="">
                      </label>
                    </li>

                    <li class="col-md-6">
                      <label> *Nhập lại mật khẩu
                        <input type="password" name="txtPassword2" value="" placeholder="">
                      </label>
                    </li>

                    
                    <li class="col-md-6">
                      <label> *Họ tên
                        <input type="text" name="txtName" value="" placeholder="">
                      </label>
                    </li>
                    <!-- PHONE -->    
                    <li class="col-md-6">
                      <label> *Số điện thoại
                        <input type="text" name="txtPhone" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *Địa chỉ
                        <input type="text" name="txtAddress" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- PHONE -->
                    <li class="col-md-6">
                    </li>
                  </ul>
                  <button type="submit" id="btnRegister" name="btnRegister" class="btn">Đăng ký ngay</button>
                  <!-- <script>
                    $(document).on("click", "#btnRegister", function(e){
                      e.preventDefault();
                    });
                  </script> -->
                </form>
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