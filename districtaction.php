<?php
include_once("../dboperation.php");
$obj=new dboperation();
if (isset($_POST['submit']))
{
$d=$_POST['District_name'];
$sql= "select * from  tbl_district where district_name='$d'";
$res=$obj-> executequery($sql);
$rows=mysqli_num_rows($res);
if($rows > 0){
     echo"<script>alert('Already Exists');window.location='district.php'</script>";
}else{
       $sql="INSERT INTO tbl_district (district_name) VALUES('$d')";
    $result=$obj->executequery($sql);
    
    if($result==1){
      echo "<script>alert('Registration Sucessfully');window.location='district.php' </script>";
}
else{
     echo "<script>alert('Registration failed!');window.location='district.php' </script";
}

}
}
?>
    