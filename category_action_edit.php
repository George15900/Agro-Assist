<?php
include_once("../dboperation.php");
$obj=new dboperation();
if (isset($_POST['submit']))
{
    $id=$_POST['serviceid'];
    $Category_name=$_POST['Category_name'];
    $Category_description=$_POimageST['Description'];
    $Categoryimg=$_FILES["image"]["name"];
    move_uploaded_file($_FILES[""]["tmp_name"], "../Uploads/".$Categoryimg);
    if($Categoryimg=='')
    {
    $sql1="update tbl_service set servicename='$Category_name',description='$Category_description' where serviceid=$id";
    $result=$obj->executequery($sql1);
    }
    else{
        $sql="update tbl_service set servicename='$Category_name', image='$Categoryimg',description='$Category_description' where serviceid=$id";
    $result=$obj->executequery($sql);
    }
    if ($result == 1){
     echo "<script>alert('Saved Succesfully');window.location='categoryview.php' </script>";
    }
    else{
     echo "<script>alert('Registration failed');window.location='categoryview.php' </script>";
    }
}
?>