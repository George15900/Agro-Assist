<?php
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation();
$sqlquery="select * from tbl_district";
$result=$obj->executequery($sqlquery);
?>
<script src="../jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
            //alert("a")
			$("#districtid").change(function() {
                //alert("a")
				var district_id = $(this).val();

                //alert(district_id)

                
				$.ajax({
					url: "getlocationid.php",
					method: "POST",
					data: { districtid: district_id },
					success: function(response) 
                    {
                        //alert('success')
						$("#location").html(response);
					},
					error: function() 
                    {
						$("#location").html("Error occurred while getting location!");
					}
				});
			});
		});
	</script>
<html >
    <body>
    
  <!-- Contact Start -->
    <div class="container-fluid py-5">         
    <div class="container">             
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">                 
            <h6 class="text-primary text-uppercase">Farmer Sign UP</h6>                 
            <h1 class="display-5">Please Fill the detals</h1>             
        </div>             
        <div class="row justify-content-center"> <!-- Center the form -->                 
            <div class="col-lg-6 col-md-8"> <!-- Set a smaller width -->                     
                <div class="bg-primary h-100 p-5 rounded">  
                        <form action="farmeraction.php" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" name="Name" class="form-control bg-light border-0 px-4" placeholder="Name" 
                                    required pattern="[A-Z][a-zA-Z\s]*" title="Name must start with a capital letter and contain only letters and spaces" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="Gmail" name="mail" class="form-control bg-light border-0 px-4" placeholder="Gmail" style="height: 55px;" required>
                                </div>
                                 <div class="col-12">
                                    <input type="text" name="user" class="form-control bg-light border-0 px-4" placeholder="User name" required style="height: 55px;">
                                </div>
                                 <div class="col-12">
                                    <input type="password" name="pass" class="form-control bg-light border-0 px-4" placeholder="Password" 
                                    required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$" title="Password must be at least 6 characters, include 1 letter, 1 number, 1 special character, and no spaces" style="height: 55px;">
                                </div>
                                <div class="col-12">
    <input 
        type="tel" 
        name="mobile" 
        class="form-control bg-light border-0 px-4" 
        placeholder="Mobile Number" 
        style="height: 55px;" 
        pattern="[6-9][0-9]{9}" 
        title="Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9" 
        maxlength="10" 
        required
    >
</div>

           <div class="col-12">
                                    <select name="districtname" id="districtid" class="form-control bg-light border-0 px-4"  required style="height: 55px;">
<option>--Select Distric--</option>

<?php

while($display=mysqli_fetch_array($result))
{
?>
                      <option value="<?php echo $display["district_id"];?>"><?php echo $display["district_name"];?></option>
<?php
}
?>
</select>
                                    
                                </div>


                                  <div class="col-12">
                                    <select name="location" id="location" class="form-control bg-light border-0 px-4" placeholder="Password" required style="height: 55px;">
<option>--Select Location--</option>


</select>
                                    
                                </div>


                                <div class="col-12">
                                    <input type="number" name="num" class="form-control bg-light border-0 px-4" placeholder="Number Of Farmers" required style="height: 55px;">
                                </div>

                                          <div class="form-group">
                      <label for="exampleInputEmail1"><h6 style="backgroun-color:black">Photo</h6></label>
                      <input type="file" name="photo" class="form-control" id="exampleInputEmail1" placeholder="Image">
                    </div>
                                 
                               <div class="form-group">
                      <label for="exampleInputEmail1"><h6 style="backgroun-color:black">Id-card</h6></label>
                      <input type="file" name="idproof" class="form-control" id="exampleInputEmail1" placeholder="Image">
                    </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" name="submit" type="submit">Sign up</button>
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