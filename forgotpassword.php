
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Forgot Password</title>

<!-- Bootstrap and Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<style>
.form-gap {
    padding-top: 70px;
}
</style>
</head>
<body>

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

                        <form method="POST" action="forgotpassword_action_mail.php">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope color-blue"></i>
                                    </span>
                                    <input id="txtusername" name="mail" placeholder="Enter Username or Email" class="form-control" type="email" required>
                                </div>
                            </div>
                            <button type="submit" name="button" class="btn btn-primary btn-block">Send OTP</button>
                        </form>

                    </div>
                </div><center><h6>
                 <a class="nav-link" href="login.php">Back</a></h6></center>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional, for better layout handling) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
     