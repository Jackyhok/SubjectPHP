<?php
    include_once('../partials/header.php');
    include_once('../../database/db.class.php');
?>
<section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% 281px;">
    <div class="position-center-center">
      <div class="container">
        <h4>REGISTER</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
          Sed feugiat, tellus vel tristique posuere, diam</p>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">REGISTER</li>
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
                <h6>REGISTER</h6>
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
                      <label> *EMAIL ADDRESS
                        <input type="text" name="txtEmail" value="" placeholder="">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *PASSWORD
                        <input type="password" name="txtPassword" value="" placeholder="">
                      </label>
                    </li>

                    <li class="col-md-6">
                      <label> *COMFIRM PASSWORD
                        <input type="password" name="txtPassword2" value="" placeholder="">
                      </label>
                    </li>

                    <!-- EMAIL ADDRESS -->
                    <li class="col-md-6">
                      <label> *NAME
                        <input type="text" name="txtName" value="" placeholder="">
                      </label>
                    </li>
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <label> *PHONE
                        <input type="text" name="txtPhone" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *ADDRESS
                        <input type="text" name="txtAddress" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- PHONE -->
                    <li class="col-md-6">
                    </li>
                  </ul>
                  <button type="submit" id="btnRegister" name="btnRegister" class="btn">REGISTER NOW</button>
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