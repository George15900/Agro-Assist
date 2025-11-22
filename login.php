<?php
include ("header.php");
?>
<html>
    <body>
        
<!-- Contact Start -->     
<div class="container-fluid py-5">         
    <div class="container">             
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">                 
            <h6 class="text-primary text-uppercase">Login Page</h6>                 
            <h1 class="display-5">Please Enter Username And Password</h1>             
        </div>             
        <div class="row justify-content-center"> <!-- Center the form -->                 
            <div class="col-lg-6 col-md-8"> <!-- Set a smaller width -->                     
                <div class="bg-primary h-100 p-5 rounded">                         
                    <form action="loginaction.php" method="post">                             
                        <div class="row g-3">                                 
                            <div class="col-12">                                     
                                <input type="text" name="username" class="form-control bg-light border-0 px-4" placeholder="Username" required style="height: 55px;">                                 
                            </div>                                 
                            <div class="col-12">                                     
                                <input type="password" name="password" class="form-control bg-light border-0 px-4" placeholder="Password" 
                                required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$" title="Password must be at least 6 characters, include 1 letter, 1 number, 1 special character, and no spaces" style="height: 55px;">                              
                            </div>                                 
                            <div class="col-12">                                     
                                <button class="btn btn-secondary w-100 py-3" type="submit">Login</button> <br><br>
                              <div class="text-center my-3">
    <a href="forgotpassword.php" class="text-decoration-none text-dark fw-semibold" 
       style="font-size: 0.95rem; transition: all 0.3s ease;"
       onmouseover="this.style.color='#6c757d'; this.style.textDecoration='underline';"
       onmouseout="this.style.color='#000'; this.style.textDecoration='none';">
        Forgot Password?
    </a>
</div>                             
                            </div>                             
                        </div>                         
                    </form>                     
                </div>                 
            </div>             
        </div>         
    </div>     
</div>     
<!-- Contact End -->
    </body>
</html>
<?php
include ("footer.php");
?>