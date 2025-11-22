<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
if(isset($_POST["Delect"]))
{
   $id=$_POST['farmerid'];
$sql="delete from tbl_farmer where farmerid ='$id'";
    $result=$obj->executequery($sql);

if (($result) == 1)
     {   
     echo "<script>alert('Deleted Successfully!!'); window.location='farmers_view.php'</script>";
   
}

 else {
   
         echo "<script>alert('Deleted is not Ok try again'); window.location='farmers_view.php'</script>";
      }
   }

?>