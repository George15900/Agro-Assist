<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Completed</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .success-box {
      max-width: 500px;
      margin: 100px auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
      padding: 40px;
    }
    .success-icon {
      font-size: 80px;
      color: #28a745;
    }
    .btn-custom {
      border-radius: 50px;
      padding: 10px 25px;
    }
  </style>
</head>
<body>

  <div class="success-box">
    <div class="success-icon">✔</div>
    <h2 class="mt-3">Payment Completed</h2>
    <p class="text-muted">Thank you! Your payment has been successfully processed.</p>
    <a href="index.php" class="btn btn-success btn-custom mt-3">Go to Home</a>
  </div>

</body>
</html>
