<?php
include ("header.php");
include("../dboperation.php");
$obj=new dboperation();

if(isset($_GET["edit"])) {
  $catid=$_GET["edit"];

   $sql="select * from tbl_service where serviceid=$catid";
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
                  <h4 class="card-title">category Edit</h4>
                  <p class="card-description">
                    Enter the deatails
                  </p>
                  <form class="forms-sample" action="category_action_edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Category name</label>
                      <input type="tex" name="Category_name" class="form-control" id="exampleInputUsername1" placeholder="Category name" value="<?php echo $display["servicename"];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" name="Description" class="form-control" id="exampleInputEmail1" placeholder="Description" value="<?php echo $display["description"];?>">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">ID card</label>
                       <img src="../uploads/<?php echo $display["image"]; ?>" alt="image" width="100px" height="100px"/>
                      <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Image">
                    </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
     <input type="hidden" name="serviceid" class="form-control" id="exampleInputEmail1" placeholder="Description" value="<?php echo $display["serviceid"];?>">
                  </form>
                </div>
              </div>
            </div>     
<?php
include ("footer.php");
?>
