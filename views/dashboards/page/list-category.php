<?php
    include_once('../partials/nav-bar.php');
    include_once('../partials/side-bar.php');
    include_once('../../../database/db.class.php');
?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="row">
    <?php
        if(isset($_POST['themdanhmuc'])){
            $tendanhmuc = $_POST['danhmuc'];
            $sql_insert = mysqli_query($con,"INSERT INTO tbl_category(category_name) values ('$tendanhmuc')");
            
        }elseif(isset($_POST['capnhatdanhmuc'])){
            $id_post = $_POST['id_danhmuc'];
            $tendanhmuc = $_POST['danhmuc'];
            $sql_update = mysqli_query($con,"UPDATE tbl_category SET category_name='$tendanhmuc' WHERE category_id='$id_post'");
        }
        if(isset($_GET['xoa'])){
            $id= $_GET['id'];
            $sql_xoa = mysqli_query($con,"DELETE FROM tbl_category WHERE category_id='$id'");
        }
    ?>
    <div class="col-12 grid-margin">
        
        <div class="card">
            <div class="card-body">
            <button type="button" onclick="location.href='/ecommerce-php/views/dashboards/page/list-category.php'" class="btn btn-success btn-rounded btn-fw">Thêm Danh Mục</button>
            <h1></h1>
            <h4 class="card-title"></h4>
                <?php
                    if(isset($_GET['quanly'])=='capnhat'){
                        $id_capnhat = $_GET['id'];
                        $sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_category WHERE category_id='$id_capnhat'");
                        $row_capnhat = mysqli_fetch_array($sql_capnhat);
                        ?>
                        <div class="col-md-4">
                        <h4 class="card-title">Cập nhật danh mục</h4>
                        <label>Tên danh mục</label>
                        <form action="" method="POST">
                            <input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['category_name'] ?>"><br>
                            <input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['category_id'] ?>">
                            </br>
                            <input class="btn btn-outline-dark btn-rounded btn-fw" type="submit" name="capnhatdanhmuc" value="Cập nhật danh mục" class="btn btn-default">
                        </form>
                        </div>
                    <?php?>
                    <?php
                        }else{
                            ?>
                            <div class="col-md-4">
                            <h4 class="card-title">Thêm danh mục</h4>
                            <label>Tên danh mục</label>
                            <form action="" method="POST">
                                <input type="text" class="form-control" name="danhmuc" placeholder="Tên danh mục"><br>
                                </br>
                                <input  class="btn btn-outline-dark btn-rounded btn-fw" type="submit" name="themdanhmuc" value="Thêm danh mục" class="btn btn-default">
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
                <th> # </th>
            </tr>
            </thead>
            <tbody>
            <?php
                $sql_cate  = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");
                while($row_sanpham = mysqli_fetch_array($sql_cate)){ 
            ?>
                <tr class="table-success">
                    <td> <?php echo $row_sanpham['category_id'] ?> </td>
                    <td> <?php echo $row_sanpham['category_name'] ?> </td>
                    <td> 
                        <button type="button" _idCate="<?php echo $row_sanpham['category_id'] ?>" value="capnhat" class="btn btn-icons btn-rounded btn-outline-info btnEdit">
                            <i class="mdi mdi-pencil"></i>
                        </button>
                        <button type="button" _idCate="<?php echo $row_sanpham['category_id'] ?>" value="xoa" class="btn btn-icons btn-rounded btn-outline-warning btnDelete">
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
        let id =  $(this).attr("_idCate");
        
        console.log({ id });
        window.location.href = `/ecommerce-php/views/dashboards/page/list-category.php?quanly=${value}&id=${id}`
    })
    $(document).on("click", ".btnDelete", function(){
        let value =  $(this).attr("value");
        let id =  $(this).attr("_idCate");
        
        console.log({ id });
        window.location.href = `/ecommerce-php/views/dashboards/page/list-category.php?${value}&id=${id}`
    })
</script>