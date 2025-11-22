<?php
session_start();
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation;
$sql="SELECT *
FROM tbl_request r
INNER JOIN tbl_user u ON r.userid = u.userid
INNER JOIN tbl_farmerservice s ON s.farmerservice_id = r.farmerservice_id
INNER JOIN tbl_service q ON q.serviceid = s.serviceid
INNER JOIN tbl_farmer f ON f.farmerid = s.farmerid
INNER JOIN tbl_location l ON u.location_id = l.location_id
WHERE r.status = 'pay'";
$result=$obj->executequery($sql);
$s="select * from tbl_user";
$rel=$obj->executequery($s);
?>

<div class="container-fluid">
    <a class="navbar-brand" href="Payment_more.php">
        Back <i class="bi bi-arrow-left-short"></i>
    </a></div>

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
                            Customer Name
                          </th>
                          <th>
                            Customer Contact
                          </th>
                          <th>
                             Customer Mail
                          </th>
                          <th>
                            Location
                          </th>
                          <th>
                            Farmer Name
                          </th>
                            <th>
                            Farmer Contact
                          </th>
                          <th>
                            Starting Date
                          </th>
                          <th>
                            Ending Date
                          </th>
                          <th>
                            Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $s=1;
                        while($d=mysqli_fetch_array($rel))
                        {
                        while($display=mysqli_fetch_array($result))
                        {
                          ?>
                        <tr>
                          <td><?php echo $s++;?></td>
                          </td>
                          <td>
                        <?php echo $d["name"];?>
                          </td>
                          <td>
                        <?php echo $d["contact"];?>
                          </td>
                          <td>
                        <?php echo $d["email"];?>
                          </td>
                            <td>
                        <?php echo $display["location_name"];?>
                          </td>
                            <td>
                        <?php echo $display["name"];?>
                          </td>
                            <td>
                        <?php echo $display["contact"];?>
                          </td>
                        <td>
                        <?php echo $display["starting_date"];?>
                          </td>
                         <td>
                         <?php echo $display["ending_date"];?>
                          </td>
                         <?php
$l = date('Y-m-d');
if ($display["ending_date"] < $l) {
?>
    <td>Ended</td>
<?php
} else {
?>
    <td>Active</td>
                       <?php
                        }
                        }
                        ?>  
                        </tr>                
                      </tbody>
</table>
<?php
                        }
include ("footer.php");
?>