 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FarmFresh - Organic Farm Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- 🌾 HEADER START -->
<header>
  <!-- Topbar Start -->
  <div class="container-fluid px-5 d-none d-lg-block">
    <div class="row gx-5 py-3 align-items-center">
      <div class="col-lg-3">
        <div class="d-flex align-items-center justify-content-start">
          <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
          <h2 class="mb-0">+91 8875651423</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="d-flex align-items-center justify-content-center">
          <a href="index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 display-4 text-secondary"><span class="text-primary">Agro</span>Assist</h1>
          </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="d-flex align-items-center justify-content-end">
          <a class="btn btn-primary btn-square rounded-circle me-2" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
             <a class="btn btn-primary btn-square rounded-circle me-2" href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-primary btn-square rounded-circle me-2" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
 <a class="btn btn-primary btn-square rounded-circle" href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                            
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- 🌈 Custom Navbar Start -->
  <nav class="navbar-custom">
    <div class="logo"></div>
    <ul class="nav-links">
 <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="login.php" >Login</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sign UP</a>
                   <div class="dropdown-menu bg-success bg-gradient border-0 shadow">
  <a class="dropdown-item text-white fw-semibold" href="sign farmer.php">Farmer</a>
  <a class="dropdown-item text-white fw-semibold" href="sign customer.php">Customer</a>
</div>

    </ul>
    <button class="btn">
  </nav>
  <!-- Custom Navbar End -->
</header>

<!-- 🌾 HEADER STYLE -->
<style>
  .navbar-custom {
    background: linear-gradient(90deg, #00b09b, #96c93d);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 60px; /* Increased height and padding */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    position: sticky;
    top: 0;
    z-index: 999;
  }

  .logo {
    font-size: 2.2em;
    color: #fff;
    font-weight: 700;
    letter-spacing: 1.5px;
  }

  .nav-links {
    list-style: none;
    display: flex;
    gap: 35px;
  }

  .nav-links a {
    text-decoration: none;
    color: white;
    font-size: 1.2em;
    font-weight: 500;
    transition: all 0.3s ease;
    padding: 10px 18px;
    border-radius: 8px;
  }

  .nav-links a:hover {
    background: white;
    color: #00b09b;
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
  }

  .btn {
    background: white;
    color: #00b09b;
    border: none;
    padding: 12px 24px;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 600;
    font-size: 1.1em;
    transition: 0.3s;
  }

  .btn:hover {
    background: #009970;
    color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  }

  @media (max-width: 768px) {
    .navbar-custom {
      flex-direction: column;
      padding: 20px;
    }
    .nav-links {
      flex-direction: column;
      align-items: center;
      gap: 15px;
    }
  }
</style>
