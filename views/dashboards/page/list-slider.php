<?php
    include_once('../partials/nav-bar.php');
    include_once('../partials/side-bar.php');
    include_once('../../../database/db.class.php');
?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="row">
    <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Horizontal Two column</h4>
                    <form class="form-sample">
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Category1</option>
                                <option>Category2</option>
                                <option>Category3</option>
                                <option>Category4</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Membership</label>
                            <div class="col-sm-4">
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description"> Address </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 1</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 2</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Postcode</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>America</option>
                                <option>Italy</option>
                                <option>Russia</option>
                                <option>Britain</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <button type="button" class="btn btn-outline-dark btn-rounded btn-fw">Dark</button>
                      </div>
                    </form>
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
                <th> Active </th>
                <th> Image </th>
                <th> # </th>
            </tr>
            </thead>
            <tbody>
            <?php
                $sql_slide  = mysqli_query($con,"SELECT * FROM tbl_slider ORDER BY slider_id DESC");
                while($row_sanpham = mysqli_fetch_array($sql_slide)){ 
            ?>
                <tr class="table-success">
                    <td> <?php echo $row_sanpham['slider_id'] ?> </td>
                    <td> <?php echo $row_sanpham['slider_caption'] ?> </td>
                    <td> 
                        <?php 
                            if ( $row_sanpham['slider_active'] == 1 ){
                                echo "Active";
                            }else{
                                echo "Not Active";
                            }
                         ?>
                    </td>
                    <td> <img class="" src="../../../img/<?php echo $row_sanpham["slider_image"];?>" alt=""></td>
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