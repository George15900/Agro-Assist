<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
if(isset($_POST["submit"]))
{
$name = $_POST["Name"];
$mail = $_POST["mail"];
$user = $_POST["username"];
$pass = $_POST["pass"];
$mobile=$_POST["mobile"];
$loc = $_POST["location"];
$Pincode = $_POST["Pincode"];
$date = date('y-m-d');
$sql="INSERT INTO tbl_user (name,email,contact,location_id,username,password,regdate,Pincode) 
VALUES('$name','$mail','$mobile','$loc','$user','$pass','$date','$Pincode')";
    $result=$obj->executequery($sql);
if (($result) == 1)
     {   
     echo "<script>alert('Registration Successful!'); window.location='login.php'</script>";
            $bodyContent = "Dear $name, Thank you for your registration in Agro Assist.Registration Successful! Complited";
            $mailtoaddress = $mail;
            require('phpmailer.php');
           
        ;
    } 

   
}

 
 else {
   
         // Invalid login, display an error message
         echo "<script>alert('sign up not correct'); window.location='sign customer.php'</script>";
      }
   

?>