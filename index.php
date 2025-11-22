<?php include('header.php'); ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <?php include('datewise.php');?>

      <div class="d-flex justify-content-end p-3">
  <a href="excel/export_excel.php" download class="btn btn-primary">
 Download<i class="bi bi-arrow-down-square-fill"></i>
  </a>
</div>

      <!-- Pie Chart Grid -->
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Service Distribution (Pie)</p>
            <canvas id="farmerPieChart"></canvas>
            <?php
            $con = mysqli_connect("localhost","root","","db_agroassit");
            $sql = "SELECT f.name, COUNT(r.requestid) as requestcount
                    FROM tbl_farmer f
                    INNER JOIN tbl_farmerservice s ON f.farmerid = s.farmerid
                    INNER JOIN tbl_request r ON s.farmerservice_id = r.farmerservice_id
                    GROUP BY f.farmerid
                    ORDER BY requestcount DESC";
            $res = mysqli_query($con, $sql);

            $farmerNames = []; 
            $requestCounts = [];
            while ($row = mysqli_fetch_assoc($res)) {
                $farmerNames[] = $row['name'];
                $requestCounts[] = $row['requestcount'];
            }
            ?>
          </div>
        </div>
      </div>

      <!-- Bar Chart Grid -->
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Payment Report (Bar)</p>
            <canvas id="paymentBarChart"></canvas>
            <?php
            $sql = "SELECT s.servicename, SUM(p.admin_payment) AS totalpayment
                    FROM tbl_payment p
                    INNER JOIN tbl_request r ON p.requestid = r.requestid
                    INNER JOIN tbl_farmerservice fs ON r.farmerservice_id = fs.farmerservice_id
                    INNER JOIN tbl_service s ON fs.serviceid = s.serviceid
                    WHERE p.status = 'pay'  
                    GROUP BY s.serviceid
                    ORDER BY totalpayment DESC";
            $res = mysqli_query($con, $sql);

            $serviceNames = [];
            $payments = [];
            while ($row = mysqli_fetch_array($res)) {
                $serviceNames[] = $row['servicename'];
                $payments[] = $row['totalpayment'];
            }
            ?>
          </div>
        </div>
      </div>

    </div>
    <!-- end row -->

 

  <?php include('footer.php'); ?>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Pie Chart
  const farmerPieCtx = document.getElementById('farmerPieChart').getContext('2d');
  new Chart(farmerPieCtx, {
      type: 'pie',
      data: {
          labels: <?php echo json_encode($farmerNames); ?>,
          datasets: [{
              label: 'Request Count',
              data: <?php echo json_encode($requestCounts); ?>,
              backgroundColor: [
                  '#ff6384','#36a2eb','#ffcd56','#4bc0c0','#9966ff',
                  '#ff9f40','#66ff66','#ff6666','#66ffff','#ffcc99'
              ]
          }]
      },
      options: {
          responsive: true,
          plugins: {
              legend: { position: 'right' }
          }
      }
  });

  // Bar Chart
  const paymentBarCtx = document.getElementById('paymentBarChart').getContext('2d');
  new Chart(paymentBarCtx, {
      type: 'bar',
      data: {
          labels: <?php echo json_encode($serviceNames); ?>,
          datasets: [{
              label: 'Total Payment (₹)',
              data: <?php echo json_encode($payments); ?>,
              backgroundColor: '#36a2eb',
              borderColor: '#1f7fd1',
              borderWidth: 1
          }]
      },
      options: {
          responsive: true,
          plugins: {
              legend: { display: true, position: 'top' }
          },
          scales: {
              y: { beginAtZero: true }
          }
      }
  });
</script>
