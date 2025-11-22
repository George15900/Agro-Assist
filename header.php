<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["loginid"])) {
    echo "<script>
        alert('Please login first');
        window.location.href = '../Guest/login.php';
    </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="home.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Home</span>
            <div class="badge badge-info badge-pill"></div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Report</span>
            <div class="badge badge-info badge-pill"></div>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Request</p>
          <span></span>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="farmer_view_action.php">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Request</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>View</p>
          <span></span>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="categoryview.php">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Category View</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="location_view.php">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Loation View</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="districtview.php">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">District View</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="farmers_view.php">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Farmer View</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Registertions</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">Register</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="district.php"> District</a></li>
              <li class="nav-item"> <a class="nav-link" href="location.php"> location </a></li>
              <li class="nav-item"> <a class="nav-link" href="categoryregister.php"> Category </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item sidebar-category">
          <p>View</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Payment.view.php">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Payment</span>
          </a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="services_view.php">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Working Status</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback.php">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">feedback</span>
          </a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="complent.php">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">complent</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.bootstrapdash.com/demo/spica/template/">
      
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-4 py-3 d-flex flex-row align-items-center" style="background: linear-gradient(90deg, #dd9023ff, #efa466ff); box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 10px;">

  <!-- Left Section: Brand -->
  <div class="col-lg-6 d-flex align-items-center justify-content-start">
    <a href="index.php" class="navbar-brand d-flex align-items-center">
       <h1 class="m-0 display-4 " style="color:blue;"><span class="text-primary">Agro</span>Assist</h1>
    </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h4 style="color:white;" class="text-center">Welcome to Admin</h4>
  </div>

  <!-- Right Section: Logout -->
  <div class="col-lg-6 d-flex justify-content-end align-items-center">
    <a href="../logout.php" 
       class="btn d-inline-flex align-items-center gap-2 px-4 py-2 rounded-pill shadow-sm" 
       style="background-color:#e53935; color:white; font-weight:600; border:none; transition: all 0.3s ease;">
       
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" 
           viewBox="0 0 16 16" aria-hidden="true">
        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 
                 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 
                 8.5H1.5A.5.5 0 0 1 1 8z"/>
      </svg>
      Logout
    </a>
  </div>

</nav>

<!-- Optional Hover Effect -->
<style>
  .btn:hover {
    background-color: #c62828 !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  }
</style>
