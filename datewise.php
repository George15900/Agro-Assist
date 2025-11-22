<?php
include("../dboperation.php"); 
$obj = new dboperation();

$customers = [];
if (isset($_POST['filter'])) {
    $from = $_POST['fromdate'];
    $to   = $_POST['todate'];

    $sql = "SELECT * FROM tbl_farmer u inner join tbl_location l on u.location_id=l.location_id
            WHERE value='accepted' and regdate BETWEEN '$from' AND '$to'
            ORDER BY regdate ASC";

    $res = $obj->executequery($sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $customers[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Farmer Registration Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="mb-4 text-center">Farmer Registration Report</h2>

  <!-- Filter Form -->
  <form  action="" method="post" class="row g-3 mb-4">
    <div class="col-md-4">
      <label class="form-label">From Date</label>
      <input type="date" name="fromdate" class="form-control" required>
    </div>
    <div class="col-md-4">
      <label class="form-label">To Date</label>
      <input type="date" name="todate" class="form-control" required>
    </div>
    <div class="col-md-4 d-flex align-items-end">
      <button type="submit" name="filter" class="btn btn-primary w-100">Filter</button>
    </div>
  </form>

  
  <?php if (!empty($customers)) { ?>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Location ID</th>
          <th>Username</th>
          
          <th>Registration Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($customers as $cust) { ?>
          <tr>
            <td><?php echo $cust['farmerid']; ?></td>
            <td><?php echo $cust['name']; ?></td>
            <td><?php echo $cust['contact']; ?></td>
            <td><?php echo $cust['email']; ?></td>
            <td><?php echo $cust['location_name']; ?></td>
            <td><?php echo $cust['username']; ?></td>
            
            <td><?php echo $cust['regdate']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  <?php } elseif (isset($_POST['filter'])) { ?>
    <p class="text-center text-danger">No customers found in this date range.</p>
  <?php } ?>
</div>

</body>
</html>