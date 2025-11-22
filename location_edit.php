<?php
include ("header.php");
include("../dboperation.php");
$obj=new dboperation();

if(isset($_GET["locationid"])) {
  $locid=$_GET["locationid"];

   $sql="select * from tbl_location where location_id=$locid";
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
                  <h4 class="card-title">Location Edit</h4>
                
                    Enter the deatails
                  </p>
                  <form class="forms-sample" action="location_action_edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">District name</label>
                      <input type="text" name="location_name" class="form-control" id="exampleInputUsername1" placeholder="location name" value="<?php echo $display["location_name"];?>">
                    </div>
     <input type="hidden" name="location_id" class="form-control" id="exampleInputEmail1" value="<?php echo $display["location_id"];?>">
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>     
<?php
include ("footer.php");
?>
