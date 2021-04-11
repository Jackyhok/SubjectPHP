<style>
body {
	padding: 40px;
}
.columns {
	text-align: center;
}
.column {
	box-shadow: inset 0 0 0 2px #202c50;
	border-radius: 8px;
	display: inline-block;
	padding: 50px;
	width: 60%;
	color: #202c50;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	line-height: 1.4em;
}
.divider {
	width: 40%;
	height: 2px;
	margin-left: auto;
	margin-right: auto;
	background-color: #202c50;
	border: 0 none;
	margin-top: 14px;
	margin-bottom: 40px;
}
.success-extras p {
	color: #202c50;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 2em;
	font-weight: 300;
	padding: 0 0 20px 0;
	line-height: 1.2em;
}
p.success-lrg {
	font-size: 2.4em;
}
.fa-check-circle {
	color: #202c50;
	font-size: 6em;
	margin: 0 0 30px 0;
}
.action.primary {
	background: #202c50;
	border: none;
	color: #fff;
	display: inline-block;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-weight: 300;
	font-size: 1.4rem;
	box-sizing: border-box;
	vertical-align: middle;
	padding: 20px 20px;
	margin: 20px 0 0 0;
	text-decoration: none;
}
.action.primary:hover {
	background: #2e3f73;
}
@media screen and (max-width: 600px) { 
		.column{
			width: 80%;
		}
	}
</style>

<?php
	include_once('../../database/db.class.php');
	session_start();

	$username = "";
	$infoUser;
	if(isset($_SESSION['user']) != ""){
		$username = $_SESSION['user'];
		$user      = mysqli_query($con,"SELECT * FROM tbl_khachhang WHERE email= '$username' ");
		$infoUser  = mysqli_fetch_array($user);
	}

	$total_money = 0;
	if(isset( $_SESSION["cart_items"]) && count($_SESSION["cart_items"]) > 0 ){
		foreach($_SESSION["cart_items"] as $item){
			$id           = $item["pro_id"];
			$product      = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id= '$id' ");
			$prod         = mysqli_fetch_array($product);
			$totalPrice   = $item["quantity"] * $prod["sanpham_gia"];
			// $prod         = reset($product);
			$total_money  += $item["quantity"] * $prod["sanpham_gia"];
			$order        = mysqli_query($con,"INSERT INTO tbl_donhang (sanpham_id, soluong, khachhang_id) 
										VALUES ('".$id."','".$item["quantity"]."','".$infoUser["khachhang_id"]."')");
		}
?>
	

<div class="columns">
	<div class="column main"><input name="form_key" type="hidden" value="PefvQbePmuX6e2ZN">
		<div id="authenticationPopup" data-bind="scope:'authenticationPopup'">
			<div class="success-extras">
				<i class="far fa-check-circle"></i>
				<p>Cảm ơn đã đặt hàng tại shop!</p>
				<p class="success-lrg">
					Nghỉ ngơi và chúng tôi sẽ thực hiện những việc còn lại ...
				</p>
				<hr class="divider">
			</div>
		</div>
		<div class="checkout-success">
			<p>Hóa đơn của bạn : <span>000166954</span>.</p>
			<p>Chúng tôi sẽ gửi email để xác nhận</p>
			<div class="actions-toolbar">
				<div class="primary">
					<a class="action primary continue" href="/ecommerce-php/views/page/index.php">Tiếp tục mua hàng</a>
				</div>
			</div>
		</div>
				
	</div>
</div>
<?php
}

?>