<?php
session_start();
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation;
$idm=$_GET['idm'];
$id=$_SESSION['farmerid'];  
$sql="select * from tbl_request r inner join tbl_farmerservice f on r.farmerservice_id=f.farmerservice_id 
      inner join tbl_user u on r.userid=u.userid inner join tbl_service s on s.serviceid=f.serviceid 
      inner join tbl_location l on u.location_id=l.location_id inner join tbl_district d
       on l.district_id=d.district_id where requestid='$idm' and f.farmerid='$id'";
$result=$obj->executequery($sql);
$display=mysqli_fetch_array($result);
?>
<br>
<div class="container-fluid">
    <a class="navbar-brand" href="workview.php">
        Back <i class="bi bi-arrow-left-short"></i>
    </a></div>
<center><h1>Reguest Details</h1></center><br>
<div class="card" style="width: 50rem; margin: 20px auto;">
  <div class="card-header">
    <strong>Details</strong>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">Name:</div>
      <div class="col-8"><?php echo $display['name']; ?></div>
    </li>
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">Contact:</div>
      <div class="col-8"><?php echo $display['contact']; ?></div>
    </li>
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">E-mail:</div>
      <div class="col-8"><?php echo $display['email']; ?></div>
    </li>
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">Service name:</div>
      <div class="col-8"><?php echo $display['servicename']; ?></div>
    </li>
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">Field:</div>
      <div class="col-8"><?php echo $display['Field']; ?></div>
    </li>
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">District:</div>
      <div class="col-8"><?php echo $display['district_name']; ?></div>
    </li>
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">Location:</div>
      <div class="col-8"><?php echo $display['location_name']; ?></div>
    </li>
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">Pincode:</div>
      <div class="col-8"><?php echo $display['Pincode']; ?></div>
    </li>
     <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">No Of Farmers</div>
      <div class="col-8"><?php echo $display['No_farmers']; ?></div>
    </li>
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">Area</div>
      <div class="col-8"><?php echo $display['Area_Land']; ?></div>
    </li>
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">Starting Date:</div>
      <div class="col-8"><?php echo $display['starting_date']; ?></div>
    </li>
    <li class="list-group-item d-flex">
      <div class="col-4 fw-bold">Ending Date:</div>
      <div class="col-8"><?php echo $display['ending_date']; ?></div>
    </li>
<li class="list-group-item d-flex">
      <div class="col-4 fw-bold">Total amount:</div>
      <div class="col-8"><?php echo $display['total_amount']; ?></div>
    </li>
  </ul>
</div>
<div style="display:flex;gap:20px;justify-content:center;">
</div>
   <?php
include ("footer.php");
?>