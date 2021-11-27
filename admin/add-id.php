<?php
  require_once('functions/function.php');
  get_header();
  get_sidebar();
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
    $dept=$_POST['dept'];
    $address=$_POST['address'];
    $image=$_FILES['pic'];
    $imageName='';
    if($image['name']!=''){
      $imageName='id-'.time().'-'.rand(100000,9999999).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
    }
    if(!empty($name)){
      if(!empty($image)){
          $insert="INSERT INTO id(name,id,dept,address,image)
          VALUES('$name','$id','$dept','$address','$imageName')";

          if(mysqli_query($con,$insert)){
            move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
            echo "Succesfully upload id information.";
          }else{
            echo "Opps! id uploads failed!";
          }
      }else{
        echo "Please upload id image!";
      }
    }else{
      echo "Please enter id name!";
    }
  }
?>
    <div class="col-md-12 main_content">
        <form method="post" action="" enctype="multipart/form-data">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                          <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Add idcard Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="btn btn-sm btn-dark card_top_btn" href="../index.php"><i class="fa fa-th"></i> All  Idcard</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
               <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Name:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="name">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                   <label class="col-sm-3 col-form-label">Id:</label>
                   <div class="col-sm-7">
                     <input type="text" class="form-control" id="" name="id">
                   </div>
                 </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Department:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="dept">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                   <label class="col-sm-3 col-form-label">Address:</label>
                   <div class="col-sm-7">
                     <input type="text" class="form-control" id="" name="address">
                   </div>
                 </div>
                <div class="form-group row custom_form_group">
                   <label class="col-sm-3 col-form-label"> Image:</label>
                   <div class="col-sm-7">
                     <input type="file" name="pic" onchange="readURL(this);"/><br/>
                     <img id="uploadPic" src="images/avatar.png" alt="your image" />
                   </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark submit_btn" name="submit">UPLOAD</button>
            </div>
          </div>
      </form>
    </div>
<?php
    get_footer();

?>
