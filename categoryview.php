<?php
include ("header.php");
include("../dboperation.php");
$obj=new dboperation();
$s=1;
$sql="select * from tbl_service";
$res=$obj->executequery($sql);
?>
<html>
    <body>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">category table</h4>
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
                            CATEGORY
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                            IMAGE
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
                        <?php echo $display["servicename"];?>
                          </td>
                          <td>
                        <?php echo $display["description"];?>
                          </td>
                         <td>
    <img src="../uploads/<?php echo $display["image"]; ?>" alt="image" />
</td>
<td>
  <a href="category_delete.php?catid=<?php echo $display["serviceid"];?>" class="btn btn-primary" onclick="return conform('are you sure you want to delete?')">Delete</a>
  <a href="category_edit.php?edit=<?php echo $display["serviceid"];?>" class="btn btn-primary" onclick="return conform('are you sure you want to Edit?')">Edit</a>
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