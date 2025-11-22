<?php
session_start();
include("header.php");
include("../dboperation.php");
$obj = new dboperation();
$id = $_SESSION['farmerid'];

$sql = "SELECT * 
        FROM tbl_complaint i 
        INNER JOIN tbl_request j ON i.requestid = j.requestid 
        INNER JOIN tbl_user u ON j.userid = u.userid 
        INNER JOIN tbl_location l ON u.location_id = l.location_id
        INNER JOIN tbl_district d ON l.district_id = d.district_id
        INNER JOIN tbl_farmerservice k ON j.farmerservice_id = k.farmerservice_id 
        INNER JOIN tbl_service s ON k.serviceid = s.serviceid 
        WHERE k.farmerid = '$id'";

$result = $obj->executequery($sql);
?>

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Complaint Details</h4><br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Customer Name</th>
            <th>Location</th>
            <th>District</th>
            <th>Services</th>
          
            <th>Complaint</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $s = 1;
          while ($display = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $s++; ?></td>
              <td><?php echo $display["name"]; ?></td>
              <td><?php echo $display["location_name"]; ?></td>
              <td><?php echo $display["district_name"]; ?></td>
              <td><?php echo $display["servicename"]; ?></td>
            
               <td><?php echo $display["Field"]; ?></td> 
              <td><?php echo $display["complaint"]; ?></td>
              <td><?php echo $display["date2"]; ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
include("footer.php");
?>


