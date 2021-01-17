<?php
    include_once('../partials/nav-bar.php');
    include_once('../partials/side-bar.php');
    include_once('../../../database/db.class.php');
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        <?php 
            if(isset($_POST['capnhatdonhang'])){
                $xuly = $_POST['xuly'];
                $mahang = $_POST['mahang_xuly'];
                $sql_supdate_donhang = mysqli_query($con,"UPDATE tbl_donhang SET tinhtrang='$xuly' WHERE mahang='$mahang'");
                $sql_update_giaodich = mysqli_query($con,"UPDATE tbl_giaodich SET tinhtrangdon='$xuly' WHERE magiaodich='$mahang'");
            }

            ?>
            <?php
                if(isset($_GET['xoadonhang'])){
                    $mahang = $_GET['xoadonhang'];
                    $sql_delete = mysqli_query($con,"DELETE FROM tbl_donhang WHERE mahang='$mahang'");
                    header('Location:xulydonhang.php');
                } 
                if(isset($_GET['xacnhanhuy'])&& isset($_GET['mahang'])){
                    $huydon = $_GET['xacnhanhuy'];
                    $magiaodich = $_GET['mahang'];
                }else{
                    $huydon = '';
                    $magiaodich = '';
                }
                $sql_update_donhang = mysqli_query($con,"UPDATE tbl_donhang SET huydon='$huydon' WHERE mahang='$magiaodich'");
                $sql_update_giaodich = mysqli_query($con,"UPDATE tbl_giaodich SET huydon='$huydon' WHERE magiaodich='$magiaodich'");
        ?>
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Horizontal Two column</h4>
                        
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
                            <th> Count </th>
                            <th> User </th>
                            <th> # </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql_user  = mysqli_query($con,"SELECT * FROM tbl_donhang ORDER BY donhang_id DESC");
                            while($row_sanpham = mysqli_fetch_array($sql_user)){ 
                                $sql_Pro = mysqli_query($con,"SELECT * FROM tbl_sanpham 
                                                    WHERE sanpham_id = '".$row_sanpham['sanpham_id']."'");
                                $infoPro = mysqli_fetch_array($sql_Pro);
                                $sql_User = mysqli_query($con,"SELECT * FROM tbl_khachhang 
                                                    WHERE khachhang_id = '".$row_sanpham['khachhang_id']."'");
                                $infoUser = mysqli_fetch_array($sql_User);
                        ?>
                            <tr class="table-success">
                                <td> <?php echo $row_sanpham['donhang_id'] ?> </td>
                                <td> <?php echo $infoPro['sanpham_name'] ?> </td>
                                <td> <?php echo $row_sanpham['soluong'] ?> </td>
                                <td> <?php 
                                    if ( $infoUser ){
                                        echo $infoUser['name'];
                                    }
                                    ?> 
                                </td>
                                <td> 
                                    <button type="button" class="btn btn-icons btn-rounded btn-outline-info">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-icons btn-rounded btn-outline-warning">
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