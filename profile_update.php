<?php
include_once("../dboperation.php");
$obj=new dboperation();
if (isset($_POST['sub']))
{
    $id=$_POST['id'];
    $num=$_POST['number'];
    $mail=$_POST['email'];
    $con=$_POST['contact'];
    
        $sql="update tbl_farmer set email='$mail', contact	='$con',additional_farmers='$num' where farmerid=$id";
    $result=$obj->executequery($sql);
    }
    if ($result == 1){
     echo "<script>alert('Saved Succesfully');window.location='index.php' </script>";
    }
    else{
     echo "<script>alert('Registration failed');window.location='index.php' </script>";
    }

?>