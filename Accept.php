<?php
include ("../dboperation.php");
$obj=new dboperation;
$id=$_POST['id'];
if(isset($_POST['Accept']))
    {
  $sql="update tbl_request set status='Accepted'where requestid ='$id'";
  $result=$obj->executequery($sql);
  if($result==1)
        {
         echo  "<script> alert('verification request accepted Succesfully');window.location='request_view.php'</script>";
        }
        else
        {
           echo "<script> alert('verification request accepted Failed');window.location='request_view.php'</script>";
}
}
else if(isset($_POST['Reject']))
    {
  $sql="update tbl_request set status='Rejected' where requestid ='$id'";
  $result=$obj->executequery($sql);
   if($result==1)
        {
           echo "<script> alert('verification request Rejected Succesfully');window.location='request_view.php'</script>";
        }
        else
        {
           echo "<script> alert('verification request accepted Failed');window.location='request_view.php'</script>";
}
} 
?>