<?php
include("../dboperation.php");
$obj=new dboperation();

if(isset($_GET["locationid"])) {
  $locid=$_GET["locationid"];

   $sql="select * from tbl_location where district_id=$locid";
  $res=$obj->executequery($sql);
  $display=mysqli_fetch_array($res);


  $sql="delete from tbl_location where location_id=$locid";
  $res=$obj->executequery($sql);
 
  
  }

  echo "<script>alert('Deleted Successfully!!');window.location='location_view.php'</script>";

?>