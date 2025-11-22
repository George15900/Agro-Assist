<?php
include_once("../dboperation.php");
$obj=new dboperation();
if(isset($_POST['submit']))
{
$n=$_POST['location'];
$d=$_POST['district'];
$e=$_POST['Pincode'];
$sql= "select * from tbl_location where location_name='$n'";
$res=$obj-> executequery($sql);
$rows=mysqli_num_rows($res);
if($rows > 0){
     echo"<script>alert('Already Exists');window.location='location.php'</script>";
}else{
    $sql="INSERT INTO tbl_location (location_name,`district_id`,Pincode) VALUES('$n','$d','$e')";
    $result=$obj->executequery($sql);
    
    if($result==1){
      echo "<script>alert('Registration Sucessfully');window.location='location.php' </script>";
}
else{
     echo "<script>alert('Registration failed!');window.location='location.php' </script";
}

}
}
?>