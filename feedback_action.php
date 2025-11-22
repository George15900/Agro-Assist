<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
if(isset($_POST["Submit"]))
{
   $id=$_POST['rid'];
$feed=$_POST['Feedback'];
$date = date('y-m-d');
$sql="INSERT INTO tbl_feedback(feedback,requestid,feed_date) 
VALUES('$feed','$id','$date')";
    $result=$obj->executequery($sql);

if (($result) == 1)
     {   
     echo "<script>alert('Feedback Submit'); window.location='comment.php'</script>";
   
}

 else {
   
         echo "<script>alert('Feedback is not Submit try again'); window.location='comment.php'</script>";
      }
   }

?>