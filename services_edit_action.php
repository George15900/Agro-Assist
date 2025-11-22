<?php
include_once("../dboperation.php");
$obj=new dboperation();
if (isset($_POST['Submit']))
{
    $id=$_POST['id'];
    $amo=$_POST['amount'];
    $fie=$_POST['field'];
        $sql="update tbl_farmerservice set amount='$amo', Field='$fie' where farmerservice_id='$id'";
    $result=$obj->executequery($sql);
    
    if ($result == 1){
     echo "<script>alert('Saved Succesfully');window.location='services_view.php' </script>";
    }
    else{
     echo "<script>alert('Registration failed');window.location='services_view.php' </script>";
    }
}
?>