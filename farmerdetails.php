<?php
include ("header.php");
include ("../dboperation.php");
$obj = new dboperation();

$id = $_GET['idm'] ?? $_GET['id'];

$sql = "SELECT * FROM tbl_farmer i 
INNER JOIN tbl_farmerservice j ON i.farmerid = j.farmerid
INNER JOIN tbl_location l ON i.location_id = l.location_id
INNER JOIN tbl_district d ON l.district_id = d.district_id
INNER JOIN tbl_service s ON j.serviceid = s.serviceid  
WHERE j.farmerservice_id = '$id'";

$result = $obj->executequery($sql);
$row = mysqli_fetch_array($result);
?>

<br><br>

<!-- Back Button -->
<a class="navbar-brand" href="searchaction.php?idg=<?php echo $row['serviceid']; ?>">
    Back <i class="bi bi-arrow-left-short"></i>
</a>

<div class="container-fluid pt-4">
    <div class="container">

        <h1 class="display-5 mb-4">Farmer Details</h1>

        <div class="row g-4">

            <!-- LEFT SIDE: IMAGE -->
            <div class="col-lg-5"><br><br>
                <div class="card shadow border-0">
                    <img src="../uploads/<?php echo $row['photo']; ?>" 
                         class="card-img-top img-fluid" 
                         alt="Farmer Image">
                </div>
            </div>

            <!-- RIGHT SIDE: DETAILS + FORM -->
            <div class="col-lg-7">

                <div class="card shadow border-0 mb-4">
                    <div class="card-body">

                        <h3 class="card-title mb-3">Name: <?php echo $row['name']; ?></h3>

                        <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                        <p><strong>Contact:</strong> +91 <?php echo $row['contact']; ?></p>
                        <p><strong>No. of Farmers:</strong> <?php echo $row['additional_farmers']; ?></p>
                        <p><strong>Service:</strong> <?php echo $row['servicename']; ?></p>
                        <p><strong>Field Type:</strong> <?php echo $row['Field']; ?></p>
                        <p><strong>Daily Price:</strong> ₹<?php echo $row['amount']; ?></p>
                        <p><strong>Location:</strong> <?php echo $row['location_name']; ?></p>
                        <p><strong>District:</strong> <?php echo $row['district_name']; ?></p>

                    </div>
                </div>

                <!-- Insert Details Form -->
                <div class="card shadow border-0">
                    <div class="card-body">

                        <h4 class="text-center mb-3">Insert Details</h4>

                        <form action="request_action.php" method="post">

                            <input type="hidden" name="id" value="<?php echo $row['farmerservice_id']; ?>">
                            <input type="hidden" name="num" value="<?php echo $row['amount']; ?>">


                            <div class="mb-3">
                                <label class="form-label">Number of Farmers Wanted:</label>
                                <input type="text" name="farmer" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Area of Land Work:</label>
                                <input type="text" name="Land" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Starting Date:</label>
                                <input type="date" name="start" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ending Date:</label>
                                <input type="date" name="END" class="form-control">
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit" name="submit">Request</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>

        <br>
        <h4>Comments:</h4>

        <?php
        $sql1 = "SELECT * FROM tbl_feedback r
        INNER JOIN tbl_request k ON r.requestid = k.requestid 
        INNER JOIN tbl_user u ON k.userid = u.userid 
        INNER JOIN tbl_farmerservice j ON k.farmerservice_id = j.farmerservice_id 
        WHERE j.farmerid = '$id'";

        $result1 = $obj->executequery($sql1);

        while ($row1 = mysqli_fetch_array($result1)) {
        ?>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="floatingTextarea2Disabled" disabled style="height: 100px">
<?php echo $row1['feedback']; ?>
                </textarea>
                <label><?php echo $row1['name']; ?></label>
            </div>
        <?php } ?>

    </div>
</div>

<?php include("footer.php"); ?>
