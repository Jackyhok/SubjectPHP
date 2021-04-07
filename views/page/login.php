<?php
    include_once('../partials/header.php');
    include_once('../../database/db.class.php');
?>
<section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% -67.4px;">
    <div class="position-center-center">
      <div class="container">
        <h4>Trang đăng nhập</h4>
        <p>-----------------</p>
        <ol class="breadcrumb">
          <li><a href="#">Trang chủ</a></li>
          <li><a href="#">Cửa hàng</a></li>
          <li class="active">Trang đăng nhập</li>
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
                <h6>Đăng nhập với tài khoản của bạn</h6>
                <?php
                  
                  // if(isset($_SESSION['user']) != "" )
                  // {
                  //     header("Location: index.php");
                  // }
                  if(isset($_POST['btnLogin'])){
                      $u_name     = $_POST['txtUserName'];
                      $u_pass     = $_POST['txtPassword'];
                      $password   = md5($u_pass);
                      $sql_user = mysqli_query($con,"SELECT * FROM tbl_khachhang WHERE email='$u_name' AND password='$password' ");
                      $result   = mysqli_fetch_array($sql_user);
                      if(!$result){
                        ?>
                            <script>
                              toastr.error("Mời bạn đăng nhập lại","Thông báo");
                            </script>
                        <?php
                      }
                      else{
                          $_SESSION['user'] = $u_name;
                          ?>
                            <script>
                              toastr.success("bạn đã đăng nhập thành công","Thông báo");
                              setTimeout(() => {
                                window.location.href = "/ecommerce-php/views/page/index.php"
                              }, 1000);
                            </script>
                          <?php
                      }
                  }
              ?>
                <form method="POST" enctype="multipart/form-data" >
                  <ul class="row">
                    
                    <!-- Name -->
                    <li class="col-md-12">
                      <label> Tên đăng nhập
                        <input type="text" name="txtUserName" value="" placeholder="">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-12">
                      <label> Mật khẩu
                        <input type="password" name="txtPassword" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- LOGIN -->
                    <li class="col-md-3">
                      <button type="submit" name="btnLogin" class="btn">Đăng nhập</button>
                    </li>
                    
                    <li class="col-md-3">
                      <button type="submit" id="btnRegister" class="btn">Đăng ký</button>
                    </li>
                    
                    
                  </ul>
                </form>
                
              </div>
              
              <!-- SUB TOTAL -->
              <div class="col-sm-5">
                <h6>Đăng nhập bằng</h6>
                
                <ul class="login-with">
                	<li>
                    	<a href="#."><i class="fa fa-facebook"></i>FACEBOOK</a>
                    
                    </li>
                    
                    <li>
                    	<a href="#."><i class="fa fa-google"></i>GOOGLE</a>
                    
                    </li>
                    
                    <li>
                    	<a href="#."><i class="fa fa-twitter"></i>TWITTER</a>
                    
                    </li>
                
                </ul>
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

  $(document).on("click", "#btnRegister", function(e){
    e.preventDefault();
    window.location.href = "/ecommerce-php/views/page/register.php";
  })

</script>


