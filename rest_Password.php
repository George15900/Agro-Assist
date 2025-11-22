<?php
if (isset($_POST["button"])) {
    include_once("../dboperation.php");
    $obj = new dboperation();

    
    $n = $_POST['token'];   
    $ottp = $_POST['ottp']; 
  $id=$_POST['user'] ?? $_POST['far'];

    if ($n == $ottp) {
        echo "<script>
                alert('OTP verified successfully! Redirecting to reset password...');
                window.location='rest_password_action.php?id=$id';
              </script>";
    } else {
        echo "<script>
                alert('Entered OTP is not correct!');
                window.location='forgotpassword_action_mail.php';
              </script>";
    }
}
?>

