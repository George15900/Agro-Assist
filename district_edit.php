<?php
include ("header.php");
include("../dboperation.php");
$obj=new dboperation();

if(isset($_GET["edit"])) {
  $disid=$_GET["edit"];

   $sql="select * from tbl_district where district_id=$disid";
  $res=$obj->executequery($sql);
  $display=mysqli_fetch_array($res);
}
?>
    
<div class="main-panel">  
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">District Edit</h4>
                
                    Enter the deatails
                  </p>
                  <form class="forms-sample" action="district_action_edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">District name</label>
                      <input type="tex" name="district_name" class="form-control" id="exampleInputUsername1" placeholder="district name" value="<?php echo $display["district_name"];?>">
                    </div>
     <input type="hidden" name="district_id" class="form-control" id="exampleInputEmail1" value="<?php echo $display["district_id"];?>">
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>     
<?php
include ("footer.php");
?>
