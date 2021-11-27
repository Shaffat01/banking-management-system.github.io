<?php
  require_once('functions/function.php');
  get_header();
  get_sidebar();
  $id=$_GET['v'];
  $sele="SELECT * FROM id WHERE cse_Id='$id'";
  $Qe=mysqli_query($con,$sele);
  $info=mysqli_fetch_assoc($Qe);
?>
    <div class="col-md-12 main_content">
        <div class="card">
          <div class="card-header">
              <div class="row">
                  <div class="col-md-8">
                        <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Idcard Information</h4>
                  </div>
                  <div class="col-md-4 text-right">
                      <a class="btn btn-sm btn-dark card_top_btn" href="add-id.php"><i class="fa fa-th"></i> Add Id</a>
                  </div>
                  <div class="clearfix"></div>
              </div>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <table class="table table-bordered table-striped table-hover custom_view_table">
                          <tr>
                              <td>Name</td>
                              <td>:</td>
                              <td><?= $info['name']; ?></td>
                          </tr>
                          <tr>
                              <td>id</td>
                              <td>:</td>
                              <td><?= $info['id']; ?></td>
                          </tr>
                          <tr>
                              <td>Department</td>
                              <td>:</td>
                              <td><?= $info['dept']; ?></td>
                          </tr>
                          <tr>
                              <td>address</td>
                              <td>:</td>
                              <td><?= $info['address']; ?></td>
                          </tr>
                          <tr>
                              <td>Photo</td>
                              <td>:</td>
                              <td>
                                <?php if($info['image']!=''){?>
                                  <img style="height:80px; max-width:100px" class="img-thumbnail" src="uploads/<?= $info['image']; ?>" alt=""/>
                                <?php }else{ ?>
                                  <img style="height:80px; max-width:100px" class="img-thumbnail" src="images/avatar.jpg" alt=""/>
                                <?php } ?>
                              </td>
                          </tr>

                      </table>
                  </div>
                  <div class="col-md-2"></div>
              </div>
          </div>
          <div class="card-footer text-center">
              .
          </div>
        </div>
    </div>
<?php
    get_footer();
?>
