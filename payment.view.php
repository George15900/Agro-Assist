<?php
session_start();
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation;
$id=$_SESSION['userid'];  
$sql="select * from tbl_payment p inner join tbl_request r on p.requestid=r.requestid 
      inner join tbl_farmerservice s on s.farmerservice_id=r.farmerservice_id
      inner join tbl_service q on q.serviceid=s.serviceid 
      inner join tbl_farmer f on f.farmerid=s.farmerid
      where p.status='pay' and r.userid='$id'";
$result=$obj->executequery($sql);
?>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h4 class="card-title">Payment Details</h4><br>
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
                            Date
                          </th>
                               <th>
                           Amount
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
                        <?php echo $display["payment_date"];?>
                          </td>
                           <td>
                        ₹ 510 rp
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