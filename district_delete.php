<?php
include("../dboperation.php");
$obj=new dboperation();

if(isset($_GET["disid"])) {
  $disid=$_GET["disid"];

   $sql="select * from tbl_district where district_id=$disid";
  $res=$obj->executequery($sql);
  $display=mysqli_fetch_array($res);


  $sql="delete from tbl_district where district_id=$disid";
  $res=$obj->executequery($sql);
 
  
  }

  echo "<script>alert('Deleted Successfully!!');window.location='districtview.php'</script>";

?>