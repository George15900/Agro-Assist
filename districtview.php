<?php
include ("header.php");
include("../dboperation.php");
$obj=new dboperation();
$s=1;
$sql="select * from tbl_district";
$res=$obj->executequery($sql);
?>
<html>
    <body>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">District table</h4>
                  <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            District
                          </th>
                           <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while($display=mysqli_fetch_array($res))
                        {
                          ?>
                        <tr>
                          <td class="py-1"><?php echo $s++;?></td>
                          </td>
                          <td>
                        <?php echo $display["district_name"];?>
                          </td>
                          
<td>
  <a href="district_delete.php?disid=<?php echo $display["district_id"];?>" class="btn btn-primary" onclick="return conform('are you sure you want to delete?')">delete</a>
  <a href="district_edit.php?edit=<?php echo $display["district_id"];?>" class="btn btn-primary" onclick="return conform('are you sure you want to Edit?')">Edit</a>
                       </td>
                        </tr>
                       <?php
                        }
                        ?>                  
         </body>
</html>
<?php
include ("footer.php");
?>