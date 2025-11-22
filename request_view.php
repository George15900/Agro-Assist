<?php
session_start();
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation;
$id=$_SESSION['farmerid'];  
$sql="select * from tbl_request r inner join tbl_farmerservice f on r.farmerservice_id=f.farmerservice_id 
      inner join tbl_user u on r.userid=u.userid inner join tbl_service s on s.serviceid=f.serviceid 
      where f.farmerid='$id' and r.status='requested'";
$result=$obj->executequery($sql);
?>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h4 class="card-title">Services Requested Details</h4><br>
                  <table class="table table-striped">
 <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Customer Name
                          </th>
                          <th>
                            Service
                          </th>
                          <th>
                            Field
                          </th>
                          <th>
                            View more
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $s=1;
                        while($display=mysqli_fetch_array($result))
                        {
                          ?>
                        <tr>
                          <td><?php echo $s++;?></td>
                          </td>
                          <td>
                        <?php echo $display["name"];?>
                          </td>
                          <td>
                        <?php echo $display["servicename"];?>
                          </td>
                        <td>
                        <?php echo $display["Field"];?>
                          </td>
                          <td>
                        <a href="request_view_more.php?idm=<?php echo $display["requestid"];?>" 
                        class="btn btn-primary" onclick="return conform('are you sure you want to delete?')">View more</a>
                          </td>
                       <?php
                        }
                        ?>  
                        </tr>                
                      </tbody>
</table>
<?php
include ("footer.php");
?>