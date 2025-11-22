<?php
if(isset($_POST["button"]))
 {
    include_once("../dboperation.php");
    $obj = new dboperation();
    $email = $_POST['mail'];
    $sql="select email ,userid  from tbl_user where email='$email' or username='$email'";
    
$result=$obj->executequery($sql);
$display=mysqli_fetch_array($result);
$m=$display["email"];
     if (mysqli_num_rows($result) == 1) 
        {
    $randomNumber = rand(1000, 9999);

$bodyContent = "OTTP $randomNumber, Thank you for your Login in Agro Assist.Enter the code";
            $mailtoaddress = $m;
            require('phpmailer1.php');
//              echo "<script>alert('Entered email is wrong....');window.location='forgot_password.php' </script>";
}
else {
    $sql="select email,farmerid  from tbl_farmer where email='$email' or username='$email'";
$result1=$obj->executequery($sql);
$display1=mysqli_fetch_array($result1);
$m=$display1["email"];
if (mysqli_num_rows($result1) == 1) 
        {
    $randomNumber = rand(1000, 9999);

$bodyContent = "OTTP $randomNumber, Thank you for your Login in Agro Assist.Enter the code";
            $mailtoaddress = $m;
            require('phpmailer1.php');
            //  echo "<script>alert('Entered email is wrong....');window.location='forgot_password.php' </script>";
}
else {
    echo "<script>alert('Entered email  or username is wrong....');window.location='forgotpassword.php' </script>";
}
}
?>
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
                  <p>You can Enter OTTP Pin.</p><br>
                  Email id:<?php echo $email;?><br><a  aria-current="page" href="forgotpassword.php">Back</a><br>

                  <form method="POST" action="rest_Password.php">
 
                  <div class="panel-body">
                <div class="form-group">
                        <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"></span>
                          <input id="txtusername" name="ottp" placeholder="Enter 4 digit OTTP code" class="form-control"  type="text">
          <input type="hidden" class="hide" name="token" id="token" value="<?php echo $randomNumber;?>">
                        </div><br>
                           
                      <input type="hidden" class="hide" name="token" id="token" value="<?php echo $randomNumber;?>">
                       <input type="text" class="hide" name="user" id="token" value="<?php echo $display['userid'];?>">
                        <input type="text" class="hide" name="far" id="token" value="<?php echo $display1['farmerid'];?>">
 
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
}
 ?>



         


          