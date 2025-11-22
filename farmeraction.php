<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
if(isset($_POST["submit"]))
{
$name = $_POST["Name"];
$mail = $_POST["mail"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$mob = $_POST["mobile"];
$dis = $_POST["districtname"]; 
$loc = $_POST["location"];
$fno = $_POST["num"];
$date = date('y-m-d');
$s="requested";
$img=$_FILES['idproof']['name'];
move_uploaded_file($_FILES['idproof']["tmp_name"],"../uploads/".$img);
$photo=$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']["tmp_name"],"../uploads/".$photo);
$sql="INSERT INTO tbl_farmer (name,email,contact,regdate,district,location_id,idproof,additional_farmers,username,password,value,photo) 
VALUES('$name','$mail','$mob','$date','$dis','$loc','$img','$fno','$user','$pass','$s','$photo')";
    $result=$obj->executequery($sql);

   
if (($result) == 1)
     {         
            $bodyContent = "Dear $name, Thank you for your registration in Agro Assist.Registration Successful! Complited
                                      Waithing for admin approval.";
            $mailtoaddress = $mail;
            require('phpmailer.php');
     echo "<script>alert('Registration Successful!'); window.location='wait.php'</script>";

}

  
 else {
   
         // Invalid login, display an error message
         echo "<script>alert('Try agen'); window.location='sign farmer.php'</script>";
      }
   }

?>