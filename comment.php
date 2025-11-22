<?php
session_start();
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation;
$id=$_SESSION['userid'];  
$sql="select * from tbl_request r inner join tbl_farmerservice f on r.farmerservice_id=f.farmerservice_id 
      inner join tbl_farmer u on f.farmerid=u.farmerid inner join tbl_service s on s.serviceid=f.serviceid 
      where r.userid='$id' and r.status='pay'";
$result=$obj->executequery($sql);
?>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h4 class="card-title">Conformed Details</h4><br>
                  <table class="table table-striped">
 <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Farmer Name
                          </th>
                          <th>
                            Service
                          </th>
                          <th>
                            Field
                          </th>
                          <th>
                            More
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
                        <a href="feedback_more.php?idm=<?php echo $display["farmerid"];?>" 
                        class="btn btn-primary">Feedback</a>
                        <a href="complaint.php?idc=<?php echo $display["farmerid"];?>" 
                        class="btn btn-primary">Complaint</a>
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