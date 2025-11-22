<?php
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation;
$sql="select * from tbl_service";
$result=$obj->executequery($sql);
?>
<!-- Contact Start -->     
<div class="container-fluid py-5">         
    <div class="container">             
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">                 
            <h6 class="text-primary text-uppercase">Service</h6>                 
            <h1 class="display-5">Please Enter Details</h1>             
        </div>             
        <div class="row justify-content-center">   -           
            <div class="col-lg-6 col-md-8">                      
                <div class="bg-primary h-100 p-5 rounded">                         
                    <form action="services_action.php" method="post">                             
                        <div class="row g-3"> 
                             <div class="col-12">                                
                             <select name="serviceid" id="serviceid" class="form-control bg-light border-0 px-4"  required style="height: 55px;">
<option>--Select services--</option>

<?php
while($display=mysqli_fetch_array($result))
{
?>
                      <option value="<?php echo $display["serviceid"];?>"><?php echo $display["servicename"];?></option>
<?php
}
?>
</select>  
</div>                   

                            <div class="col-12">
                                <input type="text" name="field" class="form-control bg-light border-0 px-4" placeholder="Flied" required style="height: 55px;">                                 
                            </div>             
                          <div class="col-12">
                                <input type="number" name="amount" class="form-control bg-light border-0 px-4" placeholder="Amount per day" required style="height: 55px;">                                 
                            </div>                                 
                            <div class="col-12">                                     
                                <button class="btn btn-secondary w-100 py-3" type="submit" name="Submit">Submit</button>                                 
                            </div>                             
                        </div>                         
                    </form>                     
                </div>                 
            </div>             
        </div>         
    </div>     
</div>     
<!-- Contact End -->
<?php
include ("footer.php");
?>