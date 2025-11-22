<?php
include ("header.php");
include("../dboperation.php");
$obj=new dboperation();
$sqlquery="select * from tbl_district";
$result=$obj->executequery($sqlquery);
?>
 <form class="forms-sample" action="locationaction.php" method="post" enctype="multipart/form-data">
<div class="main-panel">  
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
  <h4 class="card-title">Location register</h4>
                  <p class="card-description">
                    Enter the deatails
                  </p>
 <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control form-control-sm" required placeholder="Location" aria-label="Username">
                  </div>
 <div class="form-group">
                    <label>pin code</label>
                    <input type="number" name="Pincode" class="form-control form-control-sm" required placeholder="Pincode" aria-label="Username">
                  </div>
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1"> Select District</label>
                    <select name="district" class="form-control form-control-lg" id="exampleFormControlSelect1">
                          <option>-----Select------</option>
                    <?php
                      while($display=mysqli_fetch_array($result))
                      {
                      ?>
                      <option required value="<?php echo $display["district_id"];?>"><?php echo $display["district_name"];?></option>
                      <?php
                      }
                      ?> 
                    </select>
                        </div>
                    </div>
              </div>
            </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                  </div>
                    </div>
              </div>
            </div>
                    </div>
            <?php
include ("footer.php");
?>