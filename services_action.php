<?php
session_start();
include_once("../dboperation.php");
$obj=new dboperation();
if(isset($_POST['Submit']))
{
$g=$_SESSION['farmerid'];   
$n=$_POST['field'];
$d=$_POST['amount'];
$m=$_POST['serviceid'];
    $sql="INSERT INTO tbl_farmerservice (farmerid,serviceid, amount, Field) VALUES('$g','$m','$d','$n')";
    $result=$obj->executequery($sql);
    
    if($result==1){
      echo "<script>alert('Registration Sucessfully');window.location='service.php' </script>";
}
else{
     echo "<script>alert('Registration failed!');window.location='service.php' </script";
}

}
?>