<?php
session_start();
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation;
$idm=$_GET['idm'];
$sql="select * from tbl_request r inner join tbl_farmerservice f on r.farmerservice_id=f.farmerservice_id 
      inner join tbl_farmer u on f.farmerid=u.farmerid inner join tbl_service s on s.serviceid=f.serviceid 
      inner join tbl_location l on u.location_id=l.location_id inner join tbl_district d
       on l.district_id=d.district_id 
       where u.farmerid='$idm'";
$result=$obj->executequery($sql);
$display=mysqli_fetch_array($result);
?>
<br>
<div class="container-fluid">
    <a class="navbar-brand" href="requset_conform.php">
        Back <i class="bi bi-arrow-left-short"></i>
    </a></div>
<center><h1>Conform Details</h1></center><br><center>
<img src="../uploads/<?php echo $display['photo'];?>" weidth="150px" height="150px"></center>
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
      <div class="col-4 fw-bold">Total Amount:</div>
      <div class="col-8"><?php echo $display['total_amount']; ?></div>
    </li><center>
      <?php

      ?>
    <a href="payment.php?idd=<?php echo $display['requestid'];?>" onclick="return confirm('do you want continue ?');">
    <button type="submit" class="btn btn-primary" name="Accept">Payment</button> </a></center>
  </ul>
</div>
<div style="display:flex;gap:20px;justify-content:center;">
</div>
   <?php
include ("footer.php");
?>