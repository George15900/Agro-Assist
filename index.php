<?php
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation();
$sql="select * from tbl_service";
 $result=$obj->executequery($sql);
?>


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
  <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" src="img/5.10.png" alt="Image">
        <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
          <div class="text-start p-5" style="max-width: 900px;">
            <h3 class="text-white">Experienced Farmers</h3>
            <h1 class="display-1 text-white mb-md-4">Good Farmers Gives Healthy Life</h1>
            <a href="login.php" class="btn btn-primary py-md-3 px-md-5 me-3">Login</a>
            <a href="about.php" class="btn btn-secondary py-md-3 px-md-5">About Us</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100" src="img/1.png" alt="Image">
        <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
          <div class="text-start p-5" style="max-width: 900px;">
            <h3 class="text-white">Organic Fruits</h3>
            <h1 class="display-1 text-white mb-md-4">Organic Fruits For Better Health</h1>
            <a href="login.php" class="btn btn-primary py-md-3 px-md-5 me-3">Login</a>
            <a href="about.php" class="btn btn-secondary py-md-3 px-md-5">About Us</a>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

    <!-- Carousel End -->
 

    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">servic</h6>
                <h1 class="display-5">Our Service</h1>
            </div>
                           <div class="owl-carousel product-carousel px-5">
                 <?php
                 while($display=mysqli_fetch_array($result))
                        {
                ?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="../uploads/<?php echo $display["image"];?>" style=" width:300px ; height:180px" alt="">
                        <h6 class="mb-3"><?php echo $display["servicename"]; ?></h6>
                        <input type="hidden" name="id" <?php echo $display["serviceid"]; ?> >
                        <a href="#" class="text-decoration-none">Click on below eye button</a>
                        <div class="btn-action d-flex justify-content-center">
            <a class="btn bg-secondary py-2 px-3 rounded-circle" href="login.php"><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                
                <?php
                }
                ?>
                 <div class="d-flex justify-content-center mt-3">
            <span style="font-size:24px; margin:0 15px; cursor:pointer;">&#8592;</span>
            <span style="font-size:24px; margin:0 15px; cursor:pointer;">&#8594;</span>
        </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Products End -->
 

          <!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Our Experience</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">7</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Farm Specialist</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">123</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Complete Work</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">1324</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Happy Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    

<!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5 my-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel p-5">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/5 (22).jpg" alt="">
                            <p class="fs-5">"I had land but no time or knowledge to manage farming. With Agro Assist, a skilled farmer group handled everything
                                from sowing to harvesting. 
                                I could track progress online, and the yield was better than I expected.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Ram K.R</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/5 (7).jpg" alt="">
                            <p class="fs-5">Agro Assist gave me and my farmer group regular work opportunities. We get land assignments based on our expertise, and payments are transparent. It has really improved our income and teamwork.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Anjali Nair</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



  <!-- Team Start -->
<div class="container-fluid py-5" style="background-color: #f5fff6;">
    <div class="container text-center">
        <h6 class="text-success text-uppercase">Our Team</h6>
        <h1 class="display-5 mb-5">Meet Our Professional Farmers</h1>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="rounded-4 shadow overflow-hidden bg-white">
                    <img src="img/5.0.jpg" class="img-fluid" alt="">
                    <div class="p-3 bg-success text-white">
                        <h4>Ajay Tom</h4>
                        <span>Senior Farmer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="rounded-4 shadow overflow-hidden bg-white">
                    <img src="img/5 (4).png" class="img-fluid" alt="">
                    <div class="p-3 bg-success text-white">
                        <h4>Rahul M</h4>
                        <span>Crop Specialist</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="rounded-4 shadow overflow-hidden bg-white">
                    <img src="img/5 (2).png" class="img-fluid" alt="">
                    <div class="p-3 bg-success text-white">
                        <h4>Akmal P.R</h4>
                        <span>Organic Expert</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->



  
<!-- Blog Start -->
<div class="container-fluid py-5" style="background: linear-gradient(135deg, #2e7d32, #66bb6a);">
    <div class="container text-center text-white">
        <h6 class="text-warning text-uppercase">Our Blog</h6>
        <h1 class="display-5 mb-5">Latest From Our Fields</h1>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg">
                    <img src="img/blog-1.jpg" class="img-fluid" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4" style="background: rgba(0,0,0,0.5);">
                      <h4 style="color: white;">Agro Assist Success Story</h4>
                        <span>Nov 01, 2025</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg">
                    <img src="img/blog-2.jpg" class="img-fluid" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4" style="background: rgba(0,0,0,0.5);">
                    <h4 style="color: white;">Agro Assist Success Story</h4>
                        <span>Nov 11, 2025</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg">
                    <img src="img/blog-3.jpg" class="img-fluid" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4" style="background: rgba(0,0,0,0.5);">
                       <h4 style="color: white;">Agro Assist Success Story</h4>
                        <span>Nov 07, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

    <!-- Blog End -->
<?php
include ("footer.php");
?>





