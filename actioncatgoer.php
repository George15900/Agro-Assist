<?php
include_once("../dboperation.php");
$obj=new dboperation();
if(isset($_POST['submit']))
{
$n=$_POST['Category_name'];
$d=$_POST['Description'];
$photo=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']["tmp_name"],"../uploads/".$photo);
$sql= "select * from  tbl_service where servicename='$n'";
$res=$obj-> executequery($sql);
$rows=mysqli_num_rows($res);
if($rows > 0){
     echo"<script>alert('Already Exists');window.location='categoryregister.php'</script>";
}else{
    $sql="INSERT INTO tbl_service (servicename, `description`, image) VALUES('$n','$d','$photo')";
    $result=$obj->executequery($sql);
    
    if($result==1){
      echo "<script>alert('Registration Sucessfully');window.location='categoryregister.php' </script>";
}
else{
     echo "<script>alert('Registration failed!');window.location='categoryregister.php' </script";
}

}
}
?>