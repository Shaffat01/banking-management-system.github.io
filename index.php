<?php
    require_once('functions/manage.php');
    get_header();
?>
    <div class="col-md-8 main_content mx-auto ">
        <div class="card">
          <div class="card-header">
              <div class="row">
                  <div class="clearfix"></div>
              </div>
          </div>
          <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                </div>
              </div>
              <table class="table table-bordered table-striped table-hover custom_table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">id</th>
                    <th scope="col">depertment</th>
                    <th scope="col">address</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i=1;
                    $sel="SELECT * FROM id ORDER BY cse_Id DESC";
                    $Q=mysqli_query($con,$sel);
                    while($data=mysqli_fetch_assoc($Q)){
                  ?>
                  <tr>
                    <td>
                      <?php
                        $check=$i++;
                        if($check<10){
                          echo "0".$check;
                        }else{
                          echo $check;
                        }
                      ?>
                    </td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?= $data['id']; ?></td>
                    <td><?= $data['dept']; ?></td>
                    <td><?= $data['address']; ?></td>
                    <td>
                      <?php if($data['image']!=''){?>
                        <img style="height:50px; max-width:80px" class="img-thumbnail" src="admin/uploads/<?= $data['image']; ?>" alt=""/>
                      <?php }else{ ?>
                        <img style="height:50px; max-width:80px" class="img-thumbnail" src="images/avatar.jpg" alt=""/>
                      <?php } ?>
                    </td>
                    <td>
                        <a href="admin/view-id.php?v=<?= $data['cse_Id'] ?>"><i class="icon-paper-plane"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          </div>
          <div class="card-footer text-center">
              .
          </div>
        </div>
    </div>
<?php
  get_footer();

?>
