<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
if(isset($_POST["pay"]))
{
$id=$_POST['requestid'];
$n=470;
$g=30;
$date = date('y-m-d');
$s="pay";
$sql="INSERT INTO tbl_payment(requestid,status,total_amount,payment_date,admin_payment) 
VALUES('$id','$s','$n','$date','$g')";
    $result=$obj->executequery($sql);

    $sql1="update tbl_request set status='$s' where requestid='$id'";
    $res=$obj->executequery($sql1);
    
if (($result) && ($res)== 1)
     {   
     echo "<script>alert('Payment correct'); window.location='payment_completed.php'</script>";
   
}

 else {
   
         echo "<script>alert('Payment is not correct'); window.location='payment.php'</script>";
      }
   }

?>