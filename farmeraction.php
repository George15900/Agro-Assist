<?php
include_once("../dboperation.php");
$obj= new dboperation();
 

if(isset($_POST['Accept']))
    {
      $id=$_POST['farmerid'];
  $sqlquery = "UPDATE tbl_farmer SET value='accepted' WHERE farmerid='$id'";
         $result = $obj->executequery($sqlquery);
         echo "<script> alert('verification request accepted Succesfully');window.location='farmer_view_action.php'</script>";
        if($result==1)
        {
        $sql = "SELECT * FROM tbl_farmer WHERE farmerid ='$id'";
        $res = $obj->executequery($sql);
            if ($res && mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $name = $row['name'];
            $email = $row['email'];
             $bodyContent = "Dear $name, Your Request is sucessfully verification completed by the Admin. 
                  You can access the Agro Assist website now .";
            $mailtoaddress = $email;//mail sent
            require('phpmailer.php');
              
           }
        }
        else
        {
           echo "<script> alert('verification request accepted Failed')</script>";
}
}


if(isset($_POST['reject']))
    {
      $id=$_POST['farmerid'];
  $sqlquery = "UPDATE tbl_farmer SET value='reject' WHERE farmerid='$id'";
         $result = $obj->executequery($sqlquery);
         echo "<script> alert('verification request rejected Succesfully');window.location='farmer_view_action.php'</script>";
        if($result==1)
        {
        $sql = "SELECT * FROM tbl_farmer WHERE farmerid ='$id'";
        $res = $obj->executequery($sql);
            if ($res && mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $name = $row['name'];
            $email = $row['email'];
             $bodyContent = "Dear $name, Your Request is rejected  by the Admin.Try agian.You can not access the Agro Assist website now .";
            $mailtoaddress = $email;//mail sent
            require('phpmailer.php');
              
           }
        }
        else
        {
           echo "<script> alert('verification request rejected Failed')</script>";
}
}
?>