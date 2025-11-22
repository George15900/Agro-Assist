<?php
include("../dboperation.php");
$obj=new dboperation();

if(isset($_GET["catid"])) {
  $catid=$_GET["catid"];

   $sql="select * from tbl_service where serviceid=$catid";
  $res=$obj->executequery($sql);
  $display=mysqli_fetch_array($res);


  
  $imageFiles = ["../uploads/" . $display["image"]];


   
  foreach ($imageFiles as $file) 
  {
    if (file_exists($file)) {
        unlink($file);
    }
  }
  
  $sql="delete from tbl_service where serviceid=$catid";
  $res=$obj->executequery($sql);
 
  
  }

  echo "<script>alert('Deleted Successfully!!');window.location='categoryview.php'</script>";

?>