<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
$username = $_POST["username"];
$password = $_POST["password"];


$sqlquery = "select * from tbl_admin_login where username='$username' and password='$password'";
$result= $obj->executequery($sqlquery);
if (mysqli_num_rows($result) == 1) {
   $row = mysqli_fetch_array($result);
   $_SESSION["username"] = $username;
   $_SESSION["loginid"] = $row["login_id"];


   header("location:..\Admin\home.php");
}  

else {
   
        $query = "SELECT * FROM tbl_farmer where username='$username' and password='$password' and value='accepted'";
        $result1 = $obj->executequery($query);

       if (mysqli_num_rows($result1) == 1) 
        {
            $row = mysqli_fetch_array($result1);
            $_SESSION["username"] = $username;
            $_SESSION["farmerid"] = $row["farmerid"];
            header("location:../Farmers/index.php");
            exit(); 
        } 
   
   else {
    $query = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
    $result1 = $obj->executequery($query);

    if (mysqli_num_rows($result1) == 1) {
        $row = mysqli_fetch_array($result1);
        $_SESSION["username"] = $username;
        $_SESSION["userid"] = $row["userid"];

        
        header("Location: ../Customer/index.php");
        exit(); 
    } else {
        echo "<script>alert('Invalid Username or Password!'); window.location='login.php';</script>";
        exit();
    }
}
}
?>

