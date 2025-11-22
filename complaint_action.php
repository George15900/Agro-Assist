<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
if(isset($_POST["Submit"]))
{
$id=$_POST['rid'];
$complaint=$_POST['Complaint'];
$n='requested';
$date = date('y-m-d');
$sql="INSERT INTO tbl_complaint(complaint,requestid,status_2,date2) 
VALUES('$complaint','$id','$n','$date')";
    $result=$obj->executequery($sql);

if (($result) == 1)
     {   
     echo "<script>alert('Complaint Submit'); window.location='comment.php'</script>";
   
}

 else {
   
         echo "<script>alert('Complaint is not Submit try again'); window.location='comment.php'</script>";
      }
   }

?>