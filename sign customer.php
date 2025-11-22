<?php
include("header.php");
include("../dboperation.php");
$obj = new dboperation();
$sqlquery = "select * from tbl_district";
$result = $obj->executequery($sqlquery);
?>

<script src="../jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {

    $("#districtid").change(function() {
        var district_id = $(this).val();

        $.ajax({
            url: "getlocationid.php",
            method: "POST",
            data: { districtid: district_id },
            success: function(response) {
                $("#location").html(response);
            },
            error: function() {
                $("#location").html("Error occurred while getting location!");
            }
        });
    });

});
</script>

<html>
<body>

<div class="container-fluid py-5">         
    <div class="container">             

        <div class="mx-auto text-center mb-5" style="max-width: 500px;">                 
            <h6 class="text-primary text-uppercase">Customer Sign Up</h6>                 
            <h1 class="display-5">Please Fill the Details</h1>             
        </div>             

        <div class="row justify-content-center">                
            <div class="col-lg-6 col-md-8">                     
                <div class="bg-primary h-100 p-5 rounded">

                    <form action="customer.php" method="post">
                        <div class="row g-3">

                            <!-- Name -->
                            <div class="col-12">
                                <input type="text" 
                                       name="Name" 
                                       class="form-control bg-light border-0 px-4" 
                                       placeholder="Name" 
                                       required 
                                       pattern="[A-Z][a-zA-Z\s]*" 
                                       title="Name must start with a capital letter and contain only letters and spaces" 
                                       style="height: 55px;">
                            </div>

                            <!-- Gmail -->
                            <div class="col-12">
                                <input type="email" 
                                       name="mail" 
                                       class="form-control bg-light border-0 px-4" 
                                       placeholder="Gmail" 
                                       required 
                                       style="height: 55px;">
                            </div>

                            <!-- Mobile -->
                            <div class="col-12">
                                <input type="tel" 
                                       name="mobile" 
                                       class="form-control bg-light border-0 px-4" 
                                       placeholder="Mobile Number" 
                                       pattern="[6-9][0-9]{9}" 
                                       title="Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9" 
                                       maxlength="10" 
                                       required 
                                       style="height: 55px;">
                            </div>

                            <!-- Username -->
                            <div class="col-12">
                                <input type="text" 
                                       name="username" 
                                       class="form-control bg-light border-0 px-4" 
                                       placeholder="Username" 
                                       required 
                                       style="height: 55px;">
                            </div>

                            <!-- Password -->
                            <div class="col-12">
                                <input type="password" 
                                       name="pass" 
                                       class="form-control bg-light border-0 px-4" 
                                       placeholder="Password" 
                                       required 
                                       style="height: 55px;">
                            </div>

                            <!-- District -->
                            <div class="col-12">
                                <select name="districtname" 
                                        id="districtid" 
                                        class="form-control bg-light border-0 px-4" 
                                        required 
                                        style="height: 55px;">

                                    <option value="">--Select District--</option>

                                    <?php
                                    while($display = mysqli_fetch_array($result)) {
                                    ?>
                                        <option value="<?php echo $display['district_id']; ?>">
                                            <?php echo $display['district_name']; ?>
                                        </option>
                                    <?php } ?>

                                </select>
                            </div>

                            <!-- Location -->
                            <div class="col-12">
                                <select name="location" 
                                        id="location" 
                                        class="form-control bg-light border-0 px-4" 
                                        required 
                                        style="height: 55px;">
                                    <option value="">--Select Location--</option>
                                </select>
                            </div>

                            <!-- Pincode -->
                            <div class="col-12">
                                <input type="tel" 
                                       name="Pincode" 
                                       class="form-control bg-light border-0 px-4" 
                                       placeholder="Pincode" 
                                       pattern="[1-9][0-9]{5}" 
                                       title="Enter a valid 6-digit pincode" 
                                       maxlength="6" 
                                       required 
                                       style="height: 55px;">
                            </div>

                            <!-- Submit -->
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" 
                                        type="submit" 
                                        name="submit">
                                    Sign Up
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>

<?php include("footer.php"); ?>
