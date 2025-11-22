<?php
include("../dboperation.php");
$obj=new dboperation();

if(isset($_GET["del"])) {
  $id=$_GET["del"];
  
  $sql="delete from tbl_farmerservice where farmerservice_id=$id";
  $res=$obj->executequery($sql);
 
  
  }

  echo "<script>alert('Deleted Successfully!!');window.location='services_view.php'</script>";

?>