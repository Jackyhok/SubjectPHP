<?php
    include_once('../partials/nav-bar.php');
    include_once('../partials/side-bar.php');
    include_once('../../../database/db.class.php');
?>
<?php
	if(isset($_POST['themsanpham'])){
		$tensanpham = $_POST['tensanpham'];
		$hinhanh = $_FILES['hinhanh']['name'];
		
		$soluong = $_POST['soluong'];
		$gia = $_POST['giasanpham'];
		$giakhuyenmai = $_POST['giakhuyenmai'];
		$danhmuc = $_POST['danhmuc'];
		$chitiet = $_POST['chitiet'];
		$mota = $_POST['mota'];
		$path = '../../../img/';
		
		$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
		$sql_insert_product = mysqli_query($con,"INSERT INTO tbl_sanpham(sanpham_name,sanpham_chitiet,sanpham_mota,sanpham_gia,sanpham_giakhuyenmai,sanpham_soluong,sanpham_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");
		move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
	}elseif(isset($_POST['capnhatsanpham'])) {
		$id_update = $_POST['id_update'];
		$tensanpham = $_POST['tensanpham'];
		$hinhanh = $_FILES['hinhanh']['name'];
		$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
		$soluong = $_POST['soluong'];
		$gia = $_POST['giasanpham'];
		$giakhuyenmai = $_POST['giakhuyenmai'];
		$danhmuc = $_POST['danhmuc'];
		$chitiet = $_POST['chitiet'];
		$mota = $_POST['mota'];
		$path = '../../../img/';
		if($hinhanh==''){
			$sql_update_image = "UPDATE tbl_sanpham SET sanpham_name='$tensanpham',sanpham_chitiet='$chitiet',sanpham_mota='$mota',sanpham_gia='$gia',sanpham_giakhuyenmai='$giakhuyenmai',sanpham_soluong='$soluong',category_id='$danhmuc' WHERE sanpham_id='$id_update'";
		}else{
			move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
			$sql_update_image = "UPDATE tbl_sanpham SET sanpham_name='$tensanpham',sanpham_chitiet='$chitiet',sanpham_mota='$mota',sanpham_gia='$gia',sanpham_giakhuyenmai='$giakhuyenmai',sanpham_soluong='$soluong',sanpham_image='$hinhanh',category_id='$danhmuc' WHERE sanpham_id='$id_update'";
		}
		mysqli_query($con,$sql_update_image);
	}
	
?> 
<?php
	if(isset($_GET['xoa'])){
		$id= $_GET['id'];
		$sql_xoa = mysqli_query($con,"DELETE FROM tbl_sanpham WHERE sanpham_id='$id'");
	} 
?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="row">
    <div class="col-12 grid-margin">
    
    <div class="card">
    <div class="card-body">
    <button type="button" onclick="location.href='/ecommerce-php/views/dashboards/page/list-product.php'" class="btn btn-success btn-rounded btn-fw">Thêm Sản Phẩm</button>
    <h1></h1>
    <?php
			if(isset($_GET['quanly'])=='capnhat'){
				$id_capnhat = $_GET['id'];
				$sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);
				$id_category_1 = $row_capnhat['category_id'];
				?>
				<div class="col-md-4">
				<h4>Cập nhật sản phẩm</h4>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<label>Tên sản phẩm</label>
					<input type="text" class="form-control" name="tensanpham" value="<?php echo $row_capnhat['sanpham_name'] ?>"><br>
					<input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['sanpham_id'] ?>">
					<label>Hình ảnh</label>
					<input type="file" class="form-control" name="hinhanh"><br>
					<img src="../../../img/<?php echo $row_capnhat['sanpham_image'] ?>" height="80" width="80"><br>
					<label>Giá</label>
					<input type="text" class="form-control" name="giasanpham" value="<?php echo $row_capnhat['sanpham_gia'] ?>"><br>
					<label>Giá khuyến mãi</label>
					<input type="text" class="form-control" name="giakhuyenmai" value="<?php echo $row_capnhat['sanpham_giakhuyenmai'] ?>"><br>
					<label>Số lượng</label>
					<input type="text" class="form-control" name="soluong" value="<?php echo $row_capnhat['sanpham_soluong'] ?>"><br>
					<label>Mô tả</label>
					<textarea class="form-control" rows="10" name="mota"><?php echo $row_capnhat['sanpham_mota'] ?></textarea><br>
					<label>Chi tiết</label>
					<textarea class="form-control" rows="10" name="chitiet"><?php echo $row_capnhat['sanpham_chitiet'] ?></textarea><br>
					<label>Danh mục</label>
					<?php
					$sql_danhmuc = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC"); 
					?>
					<select name="danhmuc" class="form-control">
						<option value="0">-----Chọn danh mục-----</option>
						<?php
						while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
							if($id_category_1==$row_danhmuc['category_id']){
						?>
						<option selected value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
						<?php 
							}else{
						?>
						<option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
						<?php
							}
						}
						?>
					</select><br>
          <h1></h1>
					<input type="submit" class="btn btn-outline-dark btn-rounded btn-fw" name="capnhatsanpham" value="Cập nhật sản phẩm" class="btn btn-default">
				</form>
				</div>
			<?php
			}else{
				?> 
				<div class="col-md-4">
				<h4>Thêm sản phẩm</h4>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<label>Tên sản phẩm</label>
					<input type="text" class="form-control" name="tensanpham" placeholder="Tên sản phẩm"><br>
					<label>Hình ảnh</label>
					<input type="file" class="form-control" name="hinhanh"><br>
					<label>Giá</label>
					<input type="text" class="form-control" name="giasanpham" placeholder="Giá sản phẩm"><br>
					<label>Giá khuyến mãi</label>
					<input type="text" class="form-control" name="giakhuyenmai" placeholder="Giá khuyến mãi"><br>
					<label>Số lượng</label>
					<input type="text" class="form-control" name="soluong" placeholder="Số lượng"><br>
					<label>Mô tả</label>
					<textarea class="form-control" name="mota"></textarea><br>
					<label>Chi tiết</label>
					<textarea class="form-control" name="chitiet"></textarea><br>
					<label>Danh mục</label>
					<?php
					$sql_danhmuc = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC"); 
					?>
					<select name="danhmuc" class="form-control">
						<option value="0">-----Chọn danh mục-----</option>
						<?php
						while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
						?>
						<option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
						<?php 
						}
						?>
					</select><br>
          <h1></h1>
					<input type="submit" class="btn btn-outline-dark btn-rounded btn-fw" name="themsanpham" value="Thêm sản phẩm" class="btn btn-default">
				</form>
				</div>
				<?php
			} 
			
				?>
				</div>
				</div>
				</div>

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Table with contextual classes</h4>
        <p class="card-description"> Add class <code>.table-{color}</code> </p>
        <table class="table table-success">
            <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Category </th>
                <th> Description </th>
                <th> Price </th>
                <th> Count </th>
                <th> # </th>
            </tr>
            </thead>
            <tbody>
            <?php
                $sql_product  = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC");
                while($row_sanpham = mysqli_fetch_array($sql_product)){ 
                    $sql_cate = mysqli_query($con,"SELECT * FROM tbl_category 
                                                    WHERE category_id = '".$row_sanpham['category_id']."'");
                    $listCate = mysqli_fetch_array($sql_cate);
            ?>
                <tr class="table-success">
                    <td> <?php echo $row_sanpham['sanpham_id'] ?> </td>
                    <td> <?php echo $row_sanpham['sanpham_name'] ?> </td>
                    <td> <?php echo $listCate['category_name'] ?> </td>
                    <td> <?php echo $row_sanpham['sanpham_mota'] ?> </td>
                    <td> <?php echo $row_sanpham['sanpham_gia'] ?> </td>
                    <td> <?php echo $row_sanpham['sanpham_soluong'] ?> </td>
                    <td> 
                        <button type="button" _idPro="<?php echo $row_sanpham['sanpham_id'] ?>" value="capnhat" class="btn btn-icons btn-rounded btn-outline-info btnEdit">
                            <i class="mdi mdi-pencil"></i>
                        </button>
                        <button type="button" _idPro="<?php echo $row_sanpham['sanpham_id'] ?>" value="xoa" class="btn btn-icons btn-rounded btn-outline-warning btnDelete">
                            <i class="mdi mdi-close"></i>
                        </button>
                    </td>
                </tr>
            <?php
                } 
            ?>
            <!-- <tr class="table-warning">
                <td> 2 </td>
                <td> Messsy Adam </td>
                <td> Flash </td>
                <td> $245.30 </td>
                <td> July 1, 2015 </td>
            </tr>
            <tr class="table-danger">
                <td> 3 </td>
                <td> John Richards </td>
                <td> Premeire </td>
                <td> $138.00 </td>
                <td> Apr 12, 2015 </td>
            </tr>
            <tr class="table-success">
                <td> 4 </td>
                <td> Peter Meggik </td>
                <td> After effects </td>
                <td> $ 77.99 </td>
                <td> May 15, 2015 </td>
            </tr>
            <tr class="table-primary">
                <td> 5 </td>
                <td> Edward </td>
                <td> Illustrator </td>
                <td> $ 160.25 </td>
                <td> May 03, 2015 </td>
            </tr> -->
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>
    </div>
</div>
<?php
    include_once('../partials/footer.php');
?>
<script>
    $(document).on("click", ".btnEdit", function(){
        let value =  $(this).attr("value");
        let id =  $(this).attr("_idPro");
        
        window.location.href = `/ecommerce-php/views/dashboards/page/list-product.php?quanly=${value}&id=${id}`
    })
    $(document).on("click", ".btnDelete", function(){
        let value =  $(this).attr("value");
        let id =  $(this).attr("_idPro");
        
        window.location.href = `/ecommerce-php/views/dashboards/page/list-product.php?${value}&id=${id}`
    })
</script>