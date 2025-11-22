
<script>
    .form-gap {
    padding-top: 70px;
}
</script><br><br><br><br><br><br>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>

                  <form method="POST" action="">
 
                  <div class="panel-body">
                <div class="form-group">
                        <div class="form-group">

                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="txtusername" name="pass1" placeholder="Enter new password" class="form-control"  type="pasword">
                        </div><br>

                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="txtusername" name="pass2" placeholder="Confrom the password" class="form-control"  type="pasword">
                        </div><br>
                           
                      <input type="hidden" class="hide" name="token" id="token" value="<?php echo $randomNumber;?>">
                      <button type="submit" name="button" class="btn btn-primary">Submit</button>
                           
                        
                  
</form>

  </div>
          </div>
	</div>
</div>
</div>
          </div>
	</div>
</div>


<?php
if(isset($_POST['button']) )
{
include_once("../dboperation.php");
$obj=new dboperation();
$id=$_GET['id'];
$n=$_POST["pass1"];
$m=$_POST["pass2"];
if($n == $m)
{
   

$sql="select * from tbl_user where userid='$id'";
$result=$obj->executequery($sql);
$display=mysqli_fetch_array($result);

 $sql2 = "update tbl_user set password='$m' where userid ='$id'";
    $result1 = $obj->executequery($sql2);
  
  if ($result1 == 1) 
{
      echo "<script>alert('Password reset successfully....');window.location='login.php' </script>";
}
else
{
   $sql="select * from tbl_farmer where farmerid='$id'";
$result=$obj->executequery($sql);
$display=mysqli_fetch_array($result);

 $sql2 = "update tbl_farmer set password='$m' where farmerid='$id'";
    $result1 = $obj->executequery($sql2);
  
  if ($result1 == 1) 
{
      echo "<script>alert('Password reset successfully....');window.location='login.php' </script>";
}
}
}
else
{
     echo "<script>alert('Password and Confirm Password must be same....');window.location='rest_Password.php' </script>"; 
}
}
?>