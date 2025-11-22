<?php
include("header.php");
include("../dboperation.php");
$obj = new dboperation();


$id = $_GET["id"] ?? null; 
$idg = $_GET["idg"] ?? null;
$search = $_POST["Search"] ?? null;
$field = $_POST["feild"] ?? null;


$sql = "SELECT * FROM tbl_farmerservice i
        INNER JOIN tbl_farmer j ON i.farmerid = j.farmerid
        INNER JOIN tbl_location l ON j.location_id = l.location_id
        INNER JOIN tbl_district d ON l.district_id = d.district_id
        WHERE i.serviceid='$idg' OR i.serviceid='$id'"; 

if (!empty($search)) { 
    $sql .= " AND (l.location_name LIKE '%$search%' 
             OR d.district_name LIKE '%$search%' 
             OR j.name LIKE '%$search%' 
             OR i.Field LIKE '%$search%')";
} 


if (!empty($id)) { 
    $sql .= " AND i.serviceid = '$id'"; 
} 


if (!empty($field)) { 
   
    $sql .= " AND i.farmerservice_id = '$field'";
}


$result = $obj->executequery($sql);
?>

<html>
<head>
<style>
    body { font-family: Arial, sans-serif; background: #f5f5f5; }
    .section-title { text-align: center; font-size: 24px; font-weight: bold; margin: 30px 0; }
    .planner-card { text-align: center; background: white; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
    .planner-img { width: 250px; height: 180px; border-radius: 10px; object-fit: cover; margin-bottom: 10px; }
    .planner-name { font-weight: bold; font-size: 18px; }
    .contact { font-size: 14px; color: #555; margin-bottom: 8px; }
    .rating { color: #FFD700; font-size: 16px; }
    a { text-decoration: none; color: inherit; }
</style>
</head>
<body>
<br><br>

<!-- Search bar -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="servicesview.php">
        Back <i class="bi bi-arrow-left-short"></i>
    </a>

    <form class="d-flex" role="search" action="" method="post">  
      <input class="form-control me-2" type="search" placeholder="Search by location, district, farmer, field" aria-label="Search" name="Search"/>

      &nbsp;&nbsp;
      <select name="feild" class="form-control form-control-lg" id="exampleFormControlSelect1">
          <option value="">-----Select Field------</option>
          <?php
          $sql1 = "SELECT * FROM tbl_farmerservice";
          $result1 = $obj->executequery($sql1);

          while ($display2 = mysqli_fetch_array($result1)) {
              ?>
              <option value="<?php echo $display2["farmerservice_id"]; ?>">
                  <?php echo htmlspecialchars($display2["Field"]); ?>
              </option>
              <?php
          }
          ?> 
      </select>
      &nbsp;&nbsp;
      <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
    </form>
  </div>
</nav> 

<div class="container">
    <div class="section-title">Meet Our Services</div>
    <div class="row">
        <?php 
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) { 
        ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="planner-card">
                    <img src="../uploads/<?php echo htmlspecialchars($row["photo"]); ?>" class="planner-img" alt="Service Image">
                    <div class="planner-name"><?php echo htmlspecialchars($row['name']); ?></div>
                    <div class="contact">📞 <?php echo htmlspecialchars($row['contact']); ?></div>
                    <div class="planner-name">No. of Farmers: <?php echo htmlspecialchars($row['additional_farmers']); ?></div>
                    <div class="planner-name">Field: <?php echo htmlspecialchars($row['Field']); ?></div>
                    <div class="planner-name">₹<?php echo htmlspecialchars($row['amount']); ?></div>
                    <div class="btn-action d-flex justify-content-center">
                        <a class="btn bg-secondary py-2 px-3 rounded-circle" href="farmerdetails.php?idm=<?php echo $row['farmerservice_id']; ?>">
                            <i class="bi bi-eye text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php 
            }
        } else {
            echo "<p class='text-center'>No results found.</p>";
        }
        ?>
    </div>
</div>
</body>
</html>

<?php include("footer.php"); ?>

