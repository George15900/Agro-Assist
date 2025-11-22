<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
if(isset($_POST["Cancel"]))
{
   $id=$_POST['rid'];
$sql="delete from tbl_request where requestid ='$id'";
    $result=$obj->executequery($sql);

if (($result) == 1)
     {   
     echo "<script>alert('Canceled the Request'); window.location='request_view.php'</script>";
   
}

 else {
   
         echo "<script>alert('Canceled is not Ok try again'); window.location='request_view.php'</script>";
      }
   }

?>