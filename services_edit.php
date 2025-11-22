<?php
include ("header.php");
include("../dboperation.php");
$obj=new dboperation();

if(isset($_GET["edit"])) {
  $id=$_GET["edit"];

   $sql="select * from tbl_farmerservice where farmerservice_id='$id'";
  $res=$obj->executequery($sql);
  $display=mysqli_fetch_array($res);
}
?>


<div class="container-fluid">
    <a class="navbar-brand" href="services_view.php">
        Back <i class="bi bi-arrow-left-short"></i>
    </a></div>

<form action="services_edit_action.php" method="post">  
    <div class="container-fluid py-5">         
    <div class="container">             
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">                 
            <h6 class="text-primary text-uppercase">Service</h6>                 
            <h1 class="display-5">Please Correct the Details</h1>             
        </div>             
        <div class="row justify-content-center">                  
            <div class="col-lg-6 col-md-8">               
                <div class="bg-primary h-100 p-5 rounded">                         
                    <form action="services_action.php" method="post">                             
                        <div class="row g-3"> 
                            <div class="col-12">
                                <input type="hidden" name="id" class="form-control bg-light border-0 px-4" required style="height: 55px;" value="<?php echo $display["farmerservice_id"];?>">                                 
                            </div>                
                          <div class="col-12"><b><h6>Amout</h6></b>
                                <input type="text" name="amount" class="form-control bg-light border-0 px-4" required style="height: 55px;" value="<?php echo $display["amount"];?>">                                 
                            </div>                                 
                                                                 
                         <div class="col-12"><b><h6>Flied</h6></b>
                                <input type="text" name="field" class="form-control bg-light border-0 px-4" required style="height: 55px;" value="<?php echo $display["Field"];?>">                                                                
                            <br><div class="col-12">                                     
                                <button class="btn btn-secondary w-100 py-3" type="submit" name="Submit">Edit</button>                                 
                            </div>          
                                               
                        </div>                         
                                            </form>                     
                </div>    
                   </div>                 
            </div>             
        </div>         
    </div>     
</div>     
<?php
include ("footer.php");
?>